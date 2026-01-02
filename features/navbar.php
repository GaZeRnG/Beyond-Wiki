<?php 
    include "db.php";
?>

<nav class="nav">
    <?php if (isset($page) && $page !== 'hub'): ?>
        <a href="/" class="logo_click">
            <img src="/Images/Logo/Beyond_Wiki_logo_crop.png" alt="Beyond Wiki Logo">
        </a>
    <?php else: ?>
        <img src="/Images/Logo/Beyond_Wiki_logo_crop.png" alt="Beyond Wiki Logo">
    <?php endif; ?>

    <section class="icons">
        <div class="user" id="user">
            <!-- If logged in -->
            <?php if (isset($_SESSION["user_name"])): ?>
                <p><?= htmlspecialchars($_SESSION["user_name"]) ?></p>
                <div class="user-icon" id="user-icon">
                    <img src="/Images/pfp/<?= htmlspecialchars($_SESSION["user_pfp"]) ?>" alt="User Profile Picture" class="rounded-full w-6 h-6 object-cover">
                </div>
            
            <!-- If not logged in -->
            <?php else: ?>
                <p>Guest</p>
                <div class="user-icon" id="user-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
            <?php endif; ?>
        </div>
        <div class="dropdown" id="dropdown">
            <?php if (isset($_SESSION["user_name"])): ?>
                <a href="/features/profile">Profile</a>
                <a href="/features/logout/logout.php">Logout</a>
            <?php else: ?>
                <a href="/features/login">Login</a>
            <?php endif; ?>
        </div>
    </section>
</nav>

<script src="/features/navbar.js"></script>