<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/features/db.php";

    // Session
    session_start([
        'cookie_httponly' => true,
        'cookie_secure' => true,
        'cookie_samesite' => 'Strict',
        'use_strict_mode' => true
    ]);

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    // CSRF
    function csrf_token(): string {
        return $_SESSION['csrf_token'] ?? '';
    }

    function validate_csrf_token(string $token): bool {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }

    // Auto Login
    if (isset($_SESSION["user_id"])) return;

    if (!empty($_COOKIE["remember_me"])) {
        $token = $_COOKIE["remember_me"];
        $hash = hash("sha256", $token);

        $stmt = $conn->prepare("SELECT u.user_id, u.user_name, u.user_pfp FROM cookie_tokens ct JOIN users u ON u.user_id = ct.user_id WHERE ct.token_hash = ? AND ct.expires_at > NOW()");
        $stmt->bind_param("s", $hash);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        if ($user) {
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["user_name"] = $user["user_name"];
            $_SESSION["user_pfp"] = $user["user_pfp"];
        } else {
            setcookie("remember_me", "", time() - 3600, "/", "", true, true);
        }
    }

    // Rate Limit
    $ip = $_SERVER['REMOTE_ADDR'];
    $attempts_key = 'login_attempts_' . $ip;

    if (!isset($_SESSION[$attempts_key])) {
        $_SESSION[$attempts_key] = ['count' => 0, 'timestamp' => time()];
    }

    if ($_SESSION[$attempts_key]['count'] >= 5 && time() - $_SESSION[$attempts_key]['timestamp'] < 60) {
        die("Too many login attempts. Please try again after 1 minute.");
    }

    $_SESSION[$attempts_key]['count']++;
?>