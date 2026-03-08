<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/features/bootstrap.php";
?>

<section class="nav">
    <!-- Logo -->
    <?php if (isset($page) && $page !== 'hub'): ?>
        <a href="/" class="nav_logo tooltip tooltip-right tooltip-neutral" data-tip="Go back to Hub">
            <img src="/Images/Logo/Beyond_Wiki_logo_crop.webp" alt="Beyond Wiki Logo">
        </a>
    <?php else: ?>
        <img src="/Images/Logo/Beyond_Wiki_logo_crop.webp" alt="Beyond Wiki Logo">
    <?php endif; ?>

    <section class="drop">
        <div class="user" tabindex="0" role="button">
            <!-- If logged in -->
            <?php if (isset($_SESSION["user_name"])): ?>
                <p><?= htmlspecialchars($_SESSION["user_name"]) ?></p>
                <div class="user-icon" id="user-icon">
                    <?php if (!empty($_SESSION["user_pfp"])): ?>
                        <img src="<?= htmlspecialchars($_SESSION["user_pfp"]) ?>" alt="User Profile Picture" class=" avatar rounded-full">
                    <!-- If logged in but no pfp -->
                    <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <?php endif; ?>
                </div>
            
            <!-- If not logged in -->
            <?php else: ?>
                <p>Guest</p>
                <div class="user-icon" id="user-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
            <?php endif; ?>
        </div>
        <ul tabindex="-1" class="drop_menu dropdown-content">
            <?php if (isset($_SESSION["user_name"])): ?>
                <li><a href="/features/profile">Profile</a></li>
                <li><a href="/features/logout/logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="/features/login">Login</a></li>
            <?php endif; ?>
        </ul>
    </section>
</section>