<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";
    session_start();

    $page = 'register';

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = $_POST["password"];
        $password_confirmation = trim($_POST["confirm-password"]);

        // Handle profile picture upload
        if (!empty($_FILES["pfp"]["name"])) {
            if ($_FILES["pfp"]["error"] !== UPLOAD_ERR_OK) {
                $errors[] = "Upload error code " . $_FILES["pfp"]["error"];
                goto skip_pfp;
            }

            $tmp = $_FILES["pfp"]["tmp_name"];
            $info = getimagesize($tmp);
            if (!$info) {
                $errors[] = "Uploaded file is not a valid image.";
                goto skip_pfp;
            }

            switch ($info[2]) {
                case IMAGETYPE_JPEG:
                    $img = imagecreatefromjpeg($tmp);
                    break;
                case IMAGETYPE_PNG:
                    $img = imagecreatefrompng($tmp);
                    break;
                case IMAGETYPE_GIF:
                    $img = imagecreatefromgif($tmp);
                    break;
                default:
                    $errors[] = "Unsupported image type. Please upload a JPG, PNG, or GIF.";
                    goto skip_pfp;
            }

            // Convert to webp
            $pfp_name = uniqid() . ".webp";
            $pfp_path = $_SERVER["DOCUMENT_ROOT"] . "/Images/pfp/" . $pfp_name;

            imagewebp($img, $pfp_path, 95);
            imagedestroy($img);

            $webpath = "/Images/pfp/" . $pfp_name;

            skip_pfp:
            if (isset($errors[count($errors) - 1]) && strpos($errors[count($errors) - 1], 'pfp') !== false) {
                // If there was an upload error, do nothing
            }
        } else {
            $errors[] = "Profile picture is required.";
        }

        // Validate inputs
        if ($password !== $password_confirmation) {
            $errors[] = "Passwords do not match.";
        }

        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters long.";
        }

        if (empty($username) || empty($email) || empty($password) || empty($password_confirmation)) {
            $errors[] = "All fields are required.";
        }

        if (empty($errors)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $webpath = "/Images/pfp/" . $pfp_name;
            $stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_password, user_pfp, oauth_provider, oauth_id) VALUES (?, ?, ?, ?, 'manual', NULL)");
            $stmt->bind_param("ssss", $username, $email, $hash, $webpath);
            $stmt->execute();
            
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    </head>
    
    <body class="register-page">
        <div id="bg" class="fixed inset-0 -z-10 bg-cover bg-center transition-all duration-1000 opacity-100 bg-1"></div>
        <!-- Navbar -->
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/features/navbar.php'; ?>

        <div class="h-20"></div>

        <div class="register-container">
            <section class="register-title">REGISTER</section>

            <!-- For Errors -->
            <?php if (!empty($errors)): ?>
                <div style="color:red;">
                    <ul>
                        <?php foreach ($errors as $e): ?>
                            <li><?= htmlspecialchars($e) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <!-- Form -->
            <form method="POST" class="register-form" enctype="multipart/form-data">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" minlength="8" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <label for="pfp">Profile Picture:</label>
                <input type="file" id="pfp" name="pfp" accept="image/*" required>

                <button type="submit" class="register-submit">Register</button>
                <a href="/features/login" class="register-back">Back to Login</a>
            </form>
        </div>
        <script src="/features/register/register.js"></script>
    </body>
</html>