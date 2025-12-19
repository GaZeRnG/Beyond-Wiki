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
            
                <p>Guest</p>
                <div class="user-icon" id="user-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
        </div>
        <div class="dropdown" id="dropdown">

            <a href="/features/login">Login</a>
        </div>
    </section>
</nav>

<script src="/features/navbar.js"></script>