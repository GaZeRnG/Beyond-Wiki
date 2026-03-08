<?php 
    require_once $_SERVER["DOCUMENT_ROOT"] . "/features/bootstrap.php";

    // For navbar wiki logo
    $page = 'hub';
?>

<html>
    <head>
        <title>Beyond Wiki</title>
        <link rel="stylesheet" href="/src/output.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image" href="/Images/Logo/Beyond_Wiki_logo.webp">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    </head>

    <body class="hub-page">
        <!-- Navbar -->
        <?php include_once __DIR__ . '/features/navbar.php'; ?>

        <div class="h-20"></div>

        <!-- Warning -->
        <section class="warning">
            <h2>This wiki is currently under development and will have LIMITED or NO INFO at all.</h2>
            <h3>The only feature that works is the links below and beyond depth.</h3>
        </section>

        <!-- Logo -->
        <section class="logo">
            <img src="/Images/Logo/Beyond_Wiki_logo_crop.webp" alt="Beyond Wiki Logo">
        </section>

        <!-- Main -->
        <section class="main">
            <p>Welcome to <b>Beyond Wiki</b></p>
            <p>A wiki for all of Beyond Packs.</p>
            

            <hr class="mx-auto w-[90%] my-4">

            <h1 class="m-0 text-lg font-bold">Modpacks</h1>
            <div class="wiki-links">
                <div class="wiki-links-images">
                    <a href="/" class="mod" data-index="0"><img src="/Images/Logo/Beyond_Ocean_logo_crop.webp" ></a>
                    <a href="/" class="mod" data-index="1"><img src="/Images/Logo/Beyond_Ascension_logo_crop.webp"></a>
                    <a href="/beyond-depth" class="mod active" data-index="2"><img src="/Images/Logo/Beyond_Depth_logo_crop.webp"></a>
                    <a href="/" class="mod" data-index="3"><img src="/Images/Logo/Beyond_Cosmo_logo_crop.webp"></a>
                    <a href="/" class="mod" data-index="4"><img src="/Images/Logo/Beyond_Zombie_logo_crop.webp"></a>
                    <a href="/" class="mod" data-index="5"><img src="/Images/Logo/Beyond_Nightfall_logo_crop.webp"></a>
                </div>
                <div class="wiki-links-buttons">
                    <button id="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-left-icon lucide-arrow-big-left"><path d="M13 9a1 1 0 0 1-1-1V5.061a1 1 0 0 0-1.811-.75l-6.835 6.836a1.207 1.207 0 0 0 0 1.707l6.835 6.835a1 1 0 0 0 1.811-.75V16a1 1 0 0 1 1-1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1z"/></svg></button>
                    <button id="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-right-icon lucide-arrow-big-right"><path d="M11 9a1 1 0 0 0 1-1V5.061a1 1 0 0 1 1.811-.75l6.836 6.836a1.207 1.207 0 0 1 0 1.707l-6.836 6.835a1 1 0 0 1-1.811-.75V16a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1z"/></svg></button>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer footer-center">
            <div class="last">
                <div class="join">
                    <p>Discord: <a href="https://discord.gg/VqrxmqZP" target="_blank"><img src="/Images/Logo/discord.webp"></a></p>
                </div>
                
                <div class="link2">
                    <p class="official">Official Links:
                        <div class="cflink">
                            <a href="https://www.curseforge.com/minecraft/modpacks/beyond-depth" target="_blank"><img src="/Images/Logo/Beyond_Depth_logo.webp"></a>
                            <a href="https://www.curseforge.com/minecraft/modpacks/beyond-depth-insanity" target="_blank"><img src="/Images/Logo/Beyond_Depth_Insanity_logo.webp"></a>
                            <a href="https://www.curseforge.com/minecraft/modpacks/beyond-ascension" target="_blank"><img src="/Images/Logo/Beyond_Ascension_logo.webp"></a>
                            <a href="https://www.curseforge.com/minecraft/modpacks/beyond-cosmo" target="_blank"><img src="/Images/Logo/Beyond_Cosmo_logo.webp"></a>
                            <a href="https://www.curseforge.com/minecraft/modpacks/beyond-ocean" target="_blank"><img src="/Images/Logo/Beyond_Ocean_logo.webp"></a>
                            <a href="https://www.curseforge.com/minecraft/modpacks/beyond-zombie" target="_blank"><img src="/Images/Logo/Beyond_Zombie_logo.webp"></a>
                            <a href="https://www.curseforge.com/minecraft/modpacks/beyond-nightfall" target="_blank"><img src="/Images/Logo/Beyond_NightFall_logo.webp"></a>
                        </div>
                    </p>
                </div>

                <div class="join">
                    <p>Support the Creator: <a href="https://ko-fi.com/blueversal" target="_blank"><img src="/Images/Logo/kofi.webp"></a></p>
                </div>
            </div>
        </footer>

        <script src="script.js"></script>
    </body>
</html>