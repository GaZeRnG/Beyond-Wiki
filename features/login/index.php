<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";
    session_start();

    $page = 'login';

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

                header("Location: /");
                exit();
            } else {
                $errors[] = "Invalid username/email or password.";
            }
        }
    }

    // OAuth Callback
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
            <section class="login-title">Login</section>

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

                <button type="submit" class="login-submit">Login</button>
                
                <div class="login-others">
                    <a href="/features/oauth/google.php" class="login-google">Google</a>
                    <a href="/features/oauth/discord.php" class="login-discord">Discord</a>
                </div>

                <a href="/features/register" class="login-register">Don't have an account? Register here.</a>
            </form>
        </div>
        <script src="/features/login/login.js"></script>
    </body>
</html>