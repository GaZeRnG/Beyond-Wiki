<?php 
    session_start();

    $page = 'add-tip';

    require_once $_SERVER["DOCUMENT_ROOT"] ."/features/db.php";

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title = trim($_POST['title']);
        $content = trim($_POST['content'] ?? '');
        $author = trim($_POST['author'] ??'');

        if ($content === '') {
            $errors[] = 'Tip content cannot be empty.';
        }

        if (empty($errors)) {
            $stmt = $conn->prepare("INSERT INTO tips (tip_title, tip_content, author) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $content, $author);

            if ($stmt->execute()) {
                $id = $stmt->insert_id;
                $stmt->close();
                header("Location: view-tip?id=" . $id);
                exit();
            } else {
                $errors[] = 'Database error: ' . $conn->error;
            }
        }
    }
?>

<html>
    <head>
        <link rel="icon" type="image" href="/Images/Logo/Beyond_Wiki_logo.png">
        <link rel="stylesheet" href="/src/output.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <title>BD - Add Tip</title>
    </head>
    <body class="add-tip-page">

        <!-- Navbar -->
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/features/navbar.php'; ?>

        <div class="h-20"></div>

        <!-- Title -->
        <section class="title"><b>Add Tip</b></section>

        <!-- Errors -->
        <?php if (!empty($errors)): ?>
            <div>
                <ul>
                    <?php foreach ($errors as $e): ?>
                        <li><?php echo htmlspecialchars($e); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Form -->
        <form method="POST" action="">
            <div class="input-value">
                <label for="author" class="input-title">Your Name (Optional)</label>
                <input id="author" name="author" class="author-input" type="text" maxlength="100" value="<?= isset($author) ? htmlspecialchars($author) : '' ?>">
            </div>

            <div class="input-value">
                <label for="title" class="input-title">Title of the Tip</label>
                <input id="title" name="title" class="title-input" type="text" maxlength="300" required value="<?= isset($title) ? htmlspecialchars($title) : '' ?>">
            </div>

            <div class="input-value">
                <label for="content" class="input-title">Tip</label>
                <textarea id="content" name="content" class="content-input" rows="3" cols="60" required><?= isset($content) ? htmlspecialchars($content) : '' ?></textarea>
            </div>

            <div class="submit-button">
                <button type="submit" class="submit">Submit Tip</button>
                <a href="/beyond-depth" class="back">Back to Beyond Depth</a>
            </div>
        </form>
    </body>
</html>