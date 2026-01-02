<?php
    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";

    session_start();
    session_destroy();

    if (isset($_SESSION["user_id"])) {
        $stmt = $conn->prepare("DELETE FROM cookie_tokens WHERE user_id = ?");
        $stmt->bind_param("i", $_SESSION["user_id"]);
        $stmt->execute();
    }

    setcookie("remember_me", "", time() - 3600, "/", "", true, true);
    header("Location: /features/login");
    exit();
?>