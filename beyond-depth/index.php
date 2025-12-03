<html>
    <head>
        <link rel="stylesheet" href="/beyond-depth/style.css">

        <link rel="icon" type="image" href="https://drive.google.com/thumbnail?id=1OQlYuWBYktXTOZe47gpjdoLBPEAAstWR">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <title>Beyond Wiki</title>
    </head>
    <script src="script.js"></script>
    <body>
        <div class="topnav" id="topnav">
            <div class="topnav_logo">
                <a href="../"><img src="https://drive.google.com/thumbnail?id=1OQlYuWBYktXTOZe47gpjdoLBPEAAstWR&sz=s4000"></a>
            </div>
            <div class="search">
                <input type="text" placeholder="Search" id="searchInput">
                <button id="searchButton" class="button"><img src="https://drive.google.com/thumbnail?id=14FhaqwMgCFqcfxZAcrCnDyC5zRpxbVYt&sz=s4000"></button>
            </div>
            <div class="topnav_logo2">
                <a href="../beyond-depth"><img src="https://drive.google.com/thumbnail?id=1WKzVUzgRO1n7ev2_RVV40dA7WYtJH91y&sz=s4000"></a>
            </div>
        </div>
        <div class="body">
        <div class="warning">
            <h2>This wiki is currently under development and will have NO INFO.</h2>
        </div>
        <div class="title_logo">
            <img src="https://drive.google.com/thumbnail?id=1iBvkS4pMGpLls4fi8UBcyggPtDFPLwRQ&sz=s4000">
        </div>
        <!--Content-->
        <div class="content">
            <div class="what">
                <h3>What is Beyond Depth?</h3>
                Beyond Depth is an adventure and exploration modpack fully optimized with 400+ mods designed for players seeking new challenges. It features unique progression, expanded biomes, tougher bosses, and new mechanics, focusing on survival and discovery. Without relying too much on quests. With unique structures, enhanced combat, pet systems, and Building contraptions, the pack caters to various playstyles.
            </div>
            <div class="categories">
                <div class="items">
                    <h3>Items</h3>
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
                </div>
                <div class="dimensions">
                    <h3>Dimensions</h3>
                    <ul>
                        <li><span>Undergarden</span></li>
                        <li><span>Nether</span></li>
                        <li><span>End</span></li>
                        <li><span>Otherside</span></li>
                        <li><span>Voidscape</span></li>
                    </ul>
                </div>
                <div class="bosses">
                    <h3>Bosses</h3>
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
                </div>
                <div class="mechanics">
                    <h3>What to put?</h3>
                    <ul>
                        <li><span>???</span></li>
                        <li><span>???</span></li>
                        <li><span>???</span></li>
                        <li><span>???</span></li>
                        <li><span>???</span></li>
                        <li><span>???</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Bottom-->
        <div class="edit">
            <div class="others">
                <h3>Other Modpacks</h3>
                <div class="pack">
                    <a>
                        <img src="https://drive.google.com/thumbnail?id=1OnpeLyigLlEj6Cbu3u31iwwgPYa3l3aE&sz=s4000">
                    </a>
                    <a>
                        <img src="https://drive.google.com/thumbnail?id=19Z6LNg_Sbq1bP4O1oCYs2DsqxnEyMsnE&sz=s4000">
                    </a>
                    <a>
                        <img src="https://drive.google.com/thumbnail?id=10qpD3Zd73NzIRf6VKnAUTXsVoaYQUHxf&sz=s4000">
                    </a>
                    <a>
                        <img src="https://drive.google.com/thumbnail?id=10oV4GaALWo6gUXFP03QCeKIHlO-Ov4iK&sz=s4000">
                    </a>
                    <a>
                        <img src="https://drive.google.com/thumbnail?id=1po_8J81Jhj36pwswK4e_U_hQoWylUqfo&sz=s4000">
                    </a>
                </div>
            </div>
            <div class="more">
                <h3>Want to contribute in this wiki?</h3>
                <p>You can add info by <a href="https://discord.gg/VqrxmqZP" target="_blank">Joining our Discord</a> and we will review your suggested info.</p><br>
                <p class="join">Support the packs creator: <a href="https://ko-fi.com/blueversal" target="_blank"><img src="https://drive.google.com/thumbnail?id=1WaU22e-BXhwRxwx2Zm4LsShYnPFtIPig&sz=4000"></a></p>
            </div>
        </div>
        </div>
    </body>
</html>