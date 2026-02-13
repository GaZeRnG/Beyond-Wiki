<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/features/db.php";
    session_start();

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
?>