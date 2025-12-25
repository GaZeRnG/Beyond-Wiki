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

    $ch = curl_init("https://discord.com/api/oauth2/token");

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query([
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $redirect_uri
        ]),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
        ],
    ]);

    $response = curl_exec($ch);

    if ($response === false) {
        die("cURL token error: " . curl_error($ch));
    }

    curl_close($ch);

    $token = json_decode($response, true);

    if (!isset($token['access_token'])) {
        die("Token error: " . print_r($token, true));
    }

    // Step 3: Retrieve user information
    $ch = curl_init("https://discord.com/api/users/@me");

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer " . $token['access_token']
        ],
    ]);

    $user_response = curl_exec($ch);

    if ($user_response === false) {
        die("cURL user error: " . curl_error($ch));
    }

    curl_close($ch);

    $user_info = json_decode($user_response, true);


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