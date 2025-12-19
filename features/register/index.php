<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";
    session_start();

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = $_POST["password"];
        $password_confirmation = trim($_POST["confirm-password"]);

        if (!empty($_FILES["pfp"]["name"])) {
            $ext = pathinfo($_FILES["pfp"]["name"], PATHINFO_EXTENSION);
            $pfp_name = uniqid() . "." . $ext;
            $pfp_path = $_SERVER['DOCUMENT_ROOT'] . "/Images/pfp/" . $pfp_name;

            if (!move_uploaded_file($_FILES["pfp"]["tmp_name"], $pfp_path)) {
                $errors[] = "Failed to upload profile picture";
            }
        } else {
            $errors [] = "Profile picture required";
        }

        if ($password !== $password_confirmation) {
            $errors[] = "Passwords do not match.";
        }

        if (empty($username) || empty($email) || empty($password) || empty($password_confirmation)) {
            $errors[] = "All fields are required.";
        }

        if (empty($errors)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_password, user_pfp) VALUES (?, ?, ?, ?)");
            $stmt->execute([$username, $email, $hash, $pfp_name]);

            header(header: "Location: /features/login");
            exit();
        }
    }
?>

<html>
    <head>
        <title>Register - Beyond Wiki</title>
        <link rel="icon" type="image" href="/Images/Logo/Beyond_Wiki_logo.png">
        <link rel="stylesheet" href="/src/output.css">
        <link rel="stylesheet" href="/features/register/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    </head>
    <body class="register-page">
        <!-- Navbar -->
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/features/navbar.php'; ?>

        <div class="h-20"></div>

        <div class="register-container">
            <h2>Register</h2>

            <?php if (!empty($errors)): ?>
        <div style="color:red;">
            <ul>
                <?php foreach ($errors as $e): ?>
                    <li><?= htmlspecialchars($e) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
            
            <form method="POST" class="register-form" enctype="multipart/form-data">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <label for="pfp">Profile Picture:</label>
                <input type="file" id="pfp" name="pfp" accept="image/*" required>


                <button type="submit">Register</button>
            </form>
        </div>
    </body>
</html>