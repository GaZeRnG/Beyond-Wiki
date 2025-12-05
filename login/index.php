<?php 
    session_start();
    include '../features/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        $profile_picture = null;
        if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
            $filename = time() . "_" . $_FILES ["profile pciture"]["name"];
        }
    }
?>

<html>
    <head>
        <title>Beyond Wiki - Login</title>
        <link rel="stylesheet" href="/src/output.css">
        <link rel="icon" type="image" href="/Images/Logo/Beyond_Wiki_logo.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    </head>
    <body class="login-page">
        <h2>Login</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <label>Profile Picture:</label><br>
            <input type="file" name="profile_picture" accept="image/*"><br><br>

            <button type="submit">Login</button>
        </form>

        <h3>Login with:</h3>
        <!-- Discord -->
        <?php
            $client_id = "1446515794442715217";
            $redirect_url = "http://192.168.1.4:3000/discord-callback.php";

            $scope = "identify email";

            $url = "https://discord.com/api/oauth2/authorize?client_id=$client_id&redirect_uri=" . urlencode($redirect_url) . "&response_type=code&scope=" . urlencode($scope);
            ?>

            <a href="<?= $url ?>">Login with Discord</a>
    </body>
</html>