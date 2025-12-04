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

            <button type="submit">Register / Login</button>
        </form>

        <h3>Login with:</h3>
        <!-- Google -->
        <?php
            $googleClientId = "YOUR_GOOGLE_CLIENT_ID";
            $googleRedirect = "http://localhost/google-callback.php";
            echo '<a href="https://accounts.google.com/o/oauth2/v2/auth?response_type=code&client_id=' 
                . $googleClientId 
                . '&redirect_uri=' . urlencode($googleRedirect) 
                . '&scope=email%20profile">Login with Google</a><br><br>';
        ?>

        <!-- Discord -->
        <?php
            $discordClientId = "YOUR_DISCORD_CLIENT_ID";
            $discordRedirect = "http://localhost/discord-callback.php";
            echo '<a href="https://discord.com/api/oauth2/authorize?client_id=' 
                . $discordClientId 
                . '&redirect_uri=' . urlencode($discordRedirect) 
                . '&response_type=code&scope=identify%20email">Login with Discord</a>';
        ?>
    </body>
</html>