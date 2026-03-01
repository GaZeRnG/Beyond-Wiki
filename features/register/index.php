<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/features/bootstrap.php";

    $page = 'register';

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = $_POST["password"];
        $password_confirmation = trim($_POST["confirm-password"]);

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

            $stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_password, oauth_provider, oauth_id) VALUES (?, ?, ?, 'manual', NULL)");
            $stmt->bind_param("sss", $username, $email, $hash);
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
                <!-- Username -->
                <label for="username" class="input validator bg-neutral-800 rounded-md p-2.5 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <input type="text" id="username" name="username" required placeholder="Username" pattern="[A-Za-z][A-Za-z0-9\-]*" minlength="3" maxlength="30" title="Only letters, numbers or dash"/>
                </label>
                <p class="validator-hint hidden mt-0">Must be 3 to 30 characters<br>Containing only letters, numbers or dash</p>

                <!-- Email -->
                <label for="email" class="input validator bg-neutral-800 rounded-md p-2.5 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                    <input type="email" id="email" name="email" required placeholder="Email" title="Must be a valid email address"/>
                </label>
                <p class="validator-hint hidden mt-0">Enter valid email address</p>
                
                <!-- Password -->
                <label for="password" class="input validator bg-neutral-800 rounded-md p-2.5 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key-round-icon lucide-key-round"><path d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z"/><circle cx="16.5" cy="7.5" r=".5" fill="currentColor"/></svg>
                    <input type="password" id="password" name="password" required placeholder="Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter"/>
                </label>
                <p class="validator-hint hidden mt-0">Must be more than 8 characters, including number, lowercase letter, uppercase letter</p>

                <label for="confirm-password" class="input validator bg-neutral-800 rounded-md p-2.5 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key-round-icon lucide-key-round"><path d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z"/><circle cx="16.5" cy="7.5" r=".5" fill="currentColor"/></svg>
                    <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter"/>
                </label>
                <p class="validator-hint hidden mt-0">Must be more than 8 characters, including number, lowercase letter, uppercase letter</p>

                <button type="submit" class="register-submit">Register</button>
                <a href="/features/login" class="register-back">Back to Login</a>
            </form>
        </div>
    </body>
</html>