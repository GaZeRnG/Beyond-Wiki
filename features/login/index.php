<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";
?>

<html>
    <head>
        <title>Login - Beyond Wiki</title>
        <link rel="icon" type="image" href="/Images/Logo/Beyond_Wiki_logo.png">
        <link rel="stylesheet" href="/src/output.css">
        <link rel="stylesheet" href="/features/login/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    </head>
    <body class="login-page">
        <!-- Navbar -->
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/features/navbar.php'; ?>

        <div class="h-20"></div>

        <div class="login-container">
            <h2>Login</h2>
            <form method="POST" class="login-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>