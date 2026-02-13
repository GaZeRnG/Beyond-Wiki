<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/features/bootstrap.php";

    $page = 'login';

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
        $login = trim($_POST["username"]);
        $password = $_POST["password"];

        if (empty($login) || empty($password)) {
            $errors[] = "All fields are required.";
        } else {
            $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ? OR user_email = ? LIMIT 1");
            $stmt->bind_param("ss", $login, $login);
            $stmt->execute();
            $res = $stmt->get_result();
            $user = $res->fetch_assoc();

            if ($user && password_verify($password, $user["user_password"])) {
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["user_name"] = $user["user_name"];
                $_SESSION["user_pfp"] = $user["user_pfp"];

                // Remember Me
                if (!empty($_POST["remember"])) {
                    $token = bin2hex(random_bytes(16));
                    $hash = hash("sha256", $token);
                    $exp = date("Y-m-d H:i:s", strtotime('+30 days'));

                    $stmt2 = $conn->prepare("REPLACE INTO cookie_tokens (user_id, token_hash, expires_at) VALUES (?, ?, ?)");
                    $stmt2->bind_param("iss", $user["user_id"], $hash, $exp);
                    $stmt2->execute();

                    setcookie("remember_me", $token, strtotime('+30days'), "/", "", true, true);
                };

                header(header: "Location: /");
                exit();

            } else {
                $errors[] = "Invalid username/email or password.";
            }
        }
    }
?>

<html>
    <head>
        <title>Login - Beyond Wiki</title>
        <link rel="icon" type="image" href="/Images/Logo/Beyond_Wiki_logo.png">
        <link rel="stylesheet" href="/src/output.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    </head>
    <body class="login-page">
        <div id="bg" class="fixed inset-0 -z-10 bg-cover bg-center transition-all duration-1000 opacity-100 bg-1"></div>
        <!-- Navbar -->
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/features/navbar.php'; ?>

        <div class="h-20"></div>

        <div class="login-container">
            <section class="login-title">LOGIN</section>

            <!-- For Errors -->
            <?php if (!empty($errors)): ?>
                <div class="text-red-500 text-center mb-3">
                    <?php foreach ($errors as $e): ?>
                        <p><?= htmlspecialchars($e) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form method="POST" class="login-form">
                <label for="username">Username/Email:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label class="login-remember">
                    <input type="checkbox" id="remember-link" name="remember" class="login-remember-box" value="1">
                    Remember Me
                </label>

                <button type="submit" class="login-submit">Login</button>
                
                <div class="login-others">
                    <!-- Google -->
                    <a href="/features/oauth/google.php" id="google-link" name="google" class="login-google">Google</a>

                    <!-- Discord -->
                    <a href="/features/oauth/discord.php" id="discord-link" name="discord" class="login-discord">Discord</a>
                </div>

                <a href="/features/register" class="login-register">Don't have an account? Register here.</a>
            </form>
        </div>
        <script src="/features/login/login.js"></script>
    </body>
</html>