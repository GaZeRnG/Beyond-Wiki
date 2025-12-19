<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";
    require_once __DIR__ . "/../../vendor/autoload.php";
    session_start();

    $dotnev = Dotenv\Dotenv::createImmutable(__DIR__ . "/../../");
    $dotnev->load();

    $client_id = $_ENV["GOOGLE_CLIENT_ID"];
    $client_secret = $_ENV["GOOGLE_CLIENT_SECRET"];
    $redirect_uri = $_ENV["GOOGLE_REDIRECT_URI"];

    // Step 1: Redirect to Google's OAuth 2.0 server
    if (!isset($_GET["code"])) {
        $auth_url = "https://accounts.google.com/o/oauth2/v2/auth?" . http_build_query([
            'client_id' => $client_id,
            'redirect_uri' => $redirect_uri,
            'response_type' => 'code',
            'scope' => 'email profile',
            'access_type' => 'online',
            'prompt' => 'select_account'
        ]);
        header("Location: $auth_url");
        exit();
    }

    // Step 2: Handle the OAuth 2.0 server response
    $code = $_GET["code"];
    $token_response = file_get_contents("https://oauth2.googleapis.com/token", false, stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded\r\n',
            'content' => http_build_query([
                'code' => $code,
                'client_id' => $client_id,
                'client_secret' => $client_secret,
                'redirect_uri' => $redirect_uri,
                'grant_type' => 'authorization_code'
            ])
        ]
    ]));

    $token_data = json_decode($token_response, true);
    $access_token = $token_data['access_token'] ?? null;
    if (!$access_token) die("Error retrieving access token.");

    // Step 3: Retrieve user information
    $user_info_json = file_get_contents("https://www.googleapis.com/oauth2/v1/userinfo?alt=json&access_token=");
    $user_info = json_decode($user_info_json, true);

    $google_id = $user_info['id'];
    $email = $user_info['email'];
    $name = $user_info['name'] ?? $email;
    $pfp = $user_info['picture'];

    // Check if user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE oauth_provider = 'google' AND oauth_id = ? LIMIT 1");
    $stmt->bind_param("s", $google_id);
    $stmt->execute();
    $res = $stmt->get_result();
    $user = $res->fetch_assoc();

    // If user doesn't exist, create a new one
    if (!$user) {
        $stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_pfp, oauth_provider, oauth_id) VALUES (?, ?, ?, 'google', ?)");
        $stmt->bind_param("ssss", $name, $email, $pfp, $google_id);
        $stmt->execute();
        $user_id = $conn->insert_id;
    } else {
        $user_id = $user['user_id'];
        $name = $user['user_name'];
        $pfp = $user['user_pfp'];
    }

    // Set session
    $_SESSION["user_id"] = $user_id;
    $_SESSION["user_name"] = $name;
    $_SESSION["user_pfp"] = $pfp;

    header("Location: /");
    exit();
?>