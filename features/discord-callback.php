<?php
include 'db.php';

$dotenv = parse_ini_file(__DIR__ . '/../.env');

$client_id = $dotenv['DISCORD_CLIENT_ID'];
$client_secret = $dotenv['DISCORD_CLIENT_SECRET'];
$redirect_url = $dotenv['REDIRECT_URI'];

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    // Exchange code for token
    $data = [
        "client_id" => $client_id,
        "client_secret" => $client_secret,
        "grant_type" => "authorization_code",
        "code" => $code,
        "redirect_uri" => $redirect_url
    ];

    $options = [
        "http" => [
            "header"  => "Content-type: application/x-www-form-urlencoded",
            "method"  => "POST",
            "content" => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents("https://discord.com/api/oauth2/token", false, $context);

    $token = json_decode($response, true);

    // Get user info
    $opts = [
        "http" => [
            "header" => "Authorization: Bearer {$token['access_token']}"
        ]
    ];

    $context = stream_context_create($opts);
    $user = json_decode(file_get_contents("https://discord.com/api/users/@me", false, $context), true);

    $discordId = $user['id'];
    $email = $user['email'];

    // Check if exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE oauth_provider='discord' AND oauth_id=?");
    $stmt->bind_param("s", $discordId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        $stmt = $conn->prepare("INSERT INTO users (email, oauth_provider, oauth_id) VALUES (?, 'discord', ?)");
        $stmt->bind_param("ss", $email, $discordId);
        $stmt->execute();
    }

    session_start();
    $_SESSION['user'] = $email;

    header("Location: index.php");
    exit();
}
