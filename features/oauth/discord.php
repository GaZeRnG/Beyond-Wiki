<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";
    require_once __DIR__ . "/../../vendor/autoload.php";
    session_start();

    $dotnev = Dotenv\Dotenv::createImmutable(__DIR__ . "/../../");
    $dotnev->load();

    $client_id = $_ENV["DISCORD_CLIENT_ID"];
    $client_secret = $_ENV["DISCORD_CLIENT_SECRET"];
    $redirect_uri = $_ENV["DISCORD_REDIRECT_URI"];

    // Step 1: Redirect to Discord's OAuth 2.0 server
    if (!isset($_GET["code"])) {
        $params = [
            'client_id' => $client_id,
            'redirect_uri' => $redirect_uri,
            'response_type' => 'code',
            'scope' => 'identify email'
        ];
        $auth_url = "https://discord.com/api/oauth2/authorize?" . http_build_query($params);
        header("Location: $auth_url");
        exit();
    }

    // Step 2: Handle the OAuth 2.0 server response
    $code = $_GET["code"];
    $token_url = "https://discord.com/api/oauth2/token";

    $data = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'grant_type' => 'authorization_code',
        'code' => $code,
        'redirect_uri' => $redirect_uri,
        'scope' => 'identify email'
    ];

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($token_url, false, $context);
    if (!$response) {
        die("Error retrieving access token.");
    }
    $token = json_decode($response, true);

    // Step 3: Retrieve user information
    $opts = [
        'http' => [
            'header' => "Authorization: Bearer {$token['access_token']}\r\n"
        ]
    ];
    $context = stream_context_create($opts);
    $user_info = json_decode(file_get_contents("https://discord.com/api/users/@me", false, $context), true);

    // Check if user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE oauth_provider = 'discord' AND oauth_id = ? LIMIT 1");
    $stmt->bind_param("s", $user_info['id']);
    $stmt->execute();
    $res = $stmt->get_result();
    $user = $res->fetch_assoc();

    if (!$user) {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_pfp, oauth_provider, oauth_id) VALUES (?, ?, ?, 'discord', ?)");
        $stmt->bind_param("ssss", $user_info['username'], $user_info['email'], $user_info['avatar'], $user_info['id']);
        $stmt->execute();
        $user_id = $conn->insert_id;
    } else {
        $user_id = $user['user_id'];
    }

    // Set session
    $_SESSION["user_id"] = $user_id;
    $_SESSION["user_name"] = $user_info['username'];
    $_SESSION["user_pfp"] = $user_info['avatar'];

    header("Location: /");
    exit();
?>