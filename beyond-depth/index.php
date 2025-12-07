<?php 
    include __DIR__ ."/../features/db.php";

    // For navbar wiki logo
    $page = 'bd';
?>

<html>
    <head>
        <link rel="stylesheet" href="/src/output.css">
        <link rel="stylesheet" href="/beyond-depth/style.css">
        <link rel="icon" type="image" href="/Images/Logo/Beyond_Wiki_logo.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <title>Beyond Wiki - Depth</title>
    </head>

    <body class="bd-page">
        <!-- Navbar -->
        <?php include_once __DIR__ . '/../features/navbar.php'; ?>

        <div class="h-20"></div>
        
        <!-- Warning -->
        <section class="warning">
            <h2>This wiki is currently under development and will have LIMITED, INACCURATE or NO INFO at all.</h2>
        </section>

        <!-- Logo -->
        <section class="logo">
            <img src="/../Images/Logo/Beyond_Depth_logo_crop.png">
        </section>

        <!--Content-->
        <div class="main">
            <section class="what">
                <p class="sector-title"><b>What is Beyond Depth?</b></p>
                Beyond Depth is an adventure and exploration modpack fully optimized with 400+ mods designed for players seeking new challenges. It features unique progression, expanded biomes, tougher bosses, and new mechanics, focusing on survival and discovery. Without relying too much on quests. With unique structures, enhanced combat, pet systems, and Building contraptions, the pack caters to various playstyles.
            </section>

            <div class="categories">
                <section class="items">
                    <p class="sector-title"><b>Items</b></p>
                    <ul>
                        <li><span>Weapons</span></li>
                        <li><span>Tools</span></li>
                        <li><span>Armor</span></li>
                        <li><span>Accessories</span></li>
                        <li><span>Ammo</span></li>
                        <li><span>Bars</span></li>
                        <li><span>Ores</span></li>
                        <li><span>Potions</span></li>
                        <li><span>Minions</span></li>
                        <li><span>Blocks</span></li>
                        <li><span>Crafting Stations</span></li>
                    </ul>
                </section>

                <section class="dimensions">
                    <p class="sector-title"><b>Dimensions</b></p>
                    <ul>
                        <li><span>Undergarden</span></li>
                        <li><span>Nether</span></li>
                        <li><span>End</span></li>
                        <li><span>Otherside</span></li>
                        <li><span>Voidscape</span></li>
                    </ul>
                </section>

                <section class="bosses">
                    <p class="sector-title"><b>Bosses</b></p>
                    <!-- Mini -->
                    <div class="mini">
                        <button onclick="dropfunction()" class="drop"><b>Mini-Bosses</b></button>
                        <ul id="dropped" class="drop-content">
                            <li><span>Forgotten Guardian</span></li>
                            <li><span>Eel</span></li>
                            <li><span>Mother of the Maze</span></li>
                            <li><span>Warped Mosco</span></li>
                            <li><span>Gum Worm</span></li>
                            <li><span>Farseer</span></li>
                            <li><span>Forsaken</span></li>
                            <li><span>Magnetron</span></li>
                            <li><span>Hullbreaker</span></li>
                            <li><span>Warden</span></li>
                            <li><span>Void's Wrath</span></li>
                            <li><span>Corpse Warlock</span></li>
                        </ul>
                    </div>

                    <div class="tier">
                        <!-- Early Game -->
                        <div class="early">
                            <button onclick="dropfunction()" class="drop"><b>Early-Game</b></button>
                            <ul id="dropped" class="drop-content">
                                <li><span>Chaos Spawner</span></li>
                                <li><span>Tongbi</span></li>
                                <li><span>Frostmaw</span></li>
                                <li><span>Ferrous Wroughtnaut</span></li>
                                <li><span>Sunbird</span></li>
                            </ul>
                        </div>

                        <!-- Mid Game -->
                        <div class="mid">
                            <button onclick="dropfunction()" class="drop"><b>Mid-Game</b></button>
                            <ul id="dropped" class="drop-content">
                                <li><span>Boros</span></li>
                                <li><span>Ouros</span></li>
                                <li><span>Frostbitten Golem</span></li>
                                <li><span>Possessed Paladin</span></li>
                                <li><span>Ancient Guardian</span></li>
                                <li><span>Cloud Golem</span></li>
                                <li><span>Dune Sentinel</span></li>
                                <li><span>Overgrown Colossus</span></li>
                                <li><span>Skeletosaurus</span></li>
                                <li><span>Lava Eater</span></li>
                                <li><span>Withered Abomination</span></li>
                                <li><span>Shulker Mimic</span></li>
                                <li><span>Endersent</span></li>
                                <li><span>Night Licht</span></li>
                                <li><span>Void Blossom</span></li>
                                <li><span>Nether Gauntlet</span></li>
                                <li><span>Obsidilith</span></li>
                                <li><span>Captain Cornelia</span></li>
                                <li><span>Luxtructosaurus</span></li>
                                <li><span>Void Worm</span></li>
                            </ul>
                        </div>

                        <!-- Late Game -->
                        <div class="late">
                            <button onclick="dropfunction()" class="drop"><b>End-Game</b></button>
                            <ul id="dropped" class="drop-content">
                                <li><span>Wither</span></li>
                                <li><span>Ender Dragon</span></li>
                                <li><span>Stalker</span></li>
                                <li><span>Corrupted Pawn</span></li>
                                <li><span>Servants</span></li>
                                <li><span>Remnant</span></li>
                                <li><span>Maledictus</span></li>
                                <li><span>Scylla</span></li>
                                <li><span>Leviathan</span></li>
                                <li><span>Harbinger</span></li>
                                <li><span>Netherite Monstrosity</span></li>
                                <li><span>Ignis</span></li>
                                <li><span>Ender Guardian</span></li>
                                <li><span>Nameless Guardian</span></li>
                                <li><span>Immortal</span></li>
                                <li><span>Wither Storm</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <div class="tips">
                    <p class="sector-title"><b>Tips</b></p>
                    <ul>
                        <li><span>Tip 1</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Bottom-->
        <div class="extra">
            <section class="others">
                <p class="sector-title"><b>Other Modpacks</b></p><br>
                <div class="pack">
                    <a>
                        <img src="/Images/Logo/Beyond_Ascension_logo_crop.png">
                    </a>
                    <a>
                        <img src="/Images/Logo/Beyond_Cosmo_logo_crop.png">
                    </a>
                    <a>
                        <img src="/Images/Logo/Beyond_Ocean_logo_crop.png">
                    </a>
                    <a>
                        <img src="/Images/Logo/Beyond_Zombie_logo_crop.png">
                    </a>
                    <a>
                        <img src="/Images/Logo/Beyond_Nightfall_logo_crop.png">
                    </a>
                </div>
            </section>

            <section class="more">
                <b>Want to contribute in this wiki?</b>
                <p>You can currently add info freely with no restrictions for now. </p>
                <p class="join">Support the packs creator: <a href="https://ko-fi.com/blueversal" target="_blank"><img src="https://drive.google.com/thumbnail?id=1WaU22e-BXhwRxwx2Zm4LsShYnPFtIPig&sz=4000"></a></p>
                <p class="join">Also join our Discord: <a href="https://discord.gg/VqrxmqZP" target="_blank"><img src="/Images/Logo/discord.png"></a></p>
            </section>
        </div>

        <script src="/beyond-depth/script.js"></script>
    </body>
</html>