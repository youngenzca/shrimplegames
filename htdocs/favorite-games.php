<?php
    /* LINK TO PHP SCRIPT AND PHP VARIABLES */
    date_default_timezone_set('America/Los_Angeles');
    include 'DATABASE\FAVORITE-GAMES-COMMENTS\favoritegamescomments.inc.php';

    $date = date('F j, Y, g:i a');
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- TITLE ON WEBSITE TAB -->
    <title>Tristan's Website</title>

    <!-- LINKS TO WEBSITE FAVICON, CSS SCRIPT, AND JQUERY ENABLE -->
    <link rel="icon" type="image/x-icon" href="IMAGES\favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS\favorite-games.css">
    <script src="SCRIPT\jquery-3.7.1.js"></script>
</head>

<body>     
    <!-- TABLE OF CONTENTS ON TOP OF PAGE -->
    <table class="TOCContainer">
        <tr>
            <th class="TOC"><input class="navBar" type="button" size="300" value="Home" onclick="goToPage(1)"></th>
            <th class="TOC"><input class="navBar" type="button" size="300" value="Favorite Games" onclick="goToPage(2)"></th>
            <th class="TOC"><input class="navBar" type="button" size="300" value="Shrimple Games" onclick="goToPage(3)"></th>
            <th class="TOC"><select id="Social Medias" class="navBar">
                <option value="Social Medias">Social Medias</option>
                <option value="E-Mail">E-Mail: allen77t@gmail.com</option>
                <option value="Instagram">Instagram</option>
                <option value="Discord">Discord</option>
                <option value="Github">Github</option>
            </select></th>
            <th class="TOC"><input class="navBar" type="button" size="300" value="Comments" onclick="goToPage(5)"></th>
        </tr>
    </table>

    <!-- TITLE -->
    <h1>Favorite Games</h1>

    <!-- TABLE OF FAVORITE GAMES -->
    <table class="FavGames">
        <tr>
            <th></th>
            <th></th>
            <th id="RecentlyUpdated">Last Updated: 06/20/24</th>
        </tr>
        <!-- TABLE HEADER -->
        <tr>
            <th class="FavGamesHeaders">Favorite Of All Time</th>
            <th class="FavGamesHeaders">Most Played</th>
            <th class="FavGamesHeaders">Recently Played</th>
        </tr>
        <!-- ROW 1 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R1C1', true, false)" class="dropbtn">Deltarune</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R1C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\deltarune.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Phenomenal. This game is not even a third of what it's
                                planned to be and it is still absolutely remarkable. My absolute favorite 
                                game of all time from my absolute favorite game developer, Toby Fox.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R1C2', true, false)" class="dropbtn">Minecraft</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R1C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\minecraft.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Being that this was one of the first games I was hooked on, 
                                it isn't much of a surprise on how this is my most played game of all 
                                time. There is so much to do in Minecraft, the possibilities are truly 
                                endless, and you can spend a lifetime trying to do everything you can do.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R1C3', true, false)" class="dropbtn">Tom Clancy's Rainbow Six Siege</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R1C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\r6siege.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Tom Clancy's Rainbow Six Siege is an elite, tactical team-based 
                                shooter where superior planning and execution triumph.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 2 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R2C1', true, false)" class="dropbtn">Undertale</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R2C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\undertale.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">A Toby Fox classic. This game has so many layers to it, even 
                                after 9 years since its release people are still discovering new facts about 
                                it. But it's just what you can expect from a genius such as Toby Fox.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R2C2', true, false)" class="dropbtn">Terraria</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R2C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\terraria.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">While I don't play Terraria as much now-a-days, I use to grind 
                                that game hard. Similar to Minecraft, it has endless possibilities. Although 
                                the game is 2D, it utilizes that fact gracefully and has heaps of content 
                                that more than makes up for it.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R2C3', true, false)" class="dropbtn">Call of Duty: Black Ops II</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R2C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\blackops2.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Pushing the boundaries of what fans have come to expect from 
                                the record-setting entertainment franchise, Call of Duty: Black Ops II 
                                propels players into a near future Cold War
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 3 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R3C1', true, false)" class="dropbtn">Minecraft</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R3C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\minecraft.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Minecraft has to be in the top 3 of my favorite games of all 
                                time. This game is simply an outlet for creativity; if you can think of it 
                                you can make it. For that reason, I've spent countless hours playing this 
                                masterpiece.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R3C2', true, false)" class="dropbtn">Fortnite</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R3C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\fortnite.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Again, I haven't played Fortnite too much recently, but back 
                                in seasons 1-5 I would grind this game almost every day after school!
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R3C3', true, false)" class="dropbtn">Plants vs. Zombies</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R3C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\pvz.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Zombies are invading your home, and the only defense is your 
                                arsenal of plants! Armed with an alien nursery-worth of zombie-zapping plants 
                                like peashooters and cherry bombs, you'll need to think fast and plant faster 
                                to stop dozens of types of zombies dead in their tracks.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 4 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R4C1', true, false)" class="dropbtn">Half-Life 2</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R4C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\halflife2.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">The Half-Life series in general is so captivating, but 
                                Half-Life 2 specifically has outstanding story telling. The sandbox-y 
                                environment in this game makes it an absolute blast to play, and the 
                                story is so captivating despite having a silent protagonist.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R4C2', true, false)" class="dropbtn">Valorant</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R4C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\valorant.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">This was the first game I started playing when I first built 
                                my PC. It was free, focused on aim, has nice colors. I still enjoy the 
                                gameplay, but I do not enjoy its community.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R4C3', true, false)" class="dropbtn">Call of Duty: Black Ops</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R4C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\blackops.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">The biggest first-person action series of all time and the 
                                follow-up to critically acclaimed Call of Duty: Modern Warfare 2 returns 
                                with Call of Duty: Black Ops.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 5 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R5C1', true, false)" class="dropbtn">Fortnite</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R5C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\fortnite.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Dont't get me wrong, Fortnite today is far from being in my 
                                favorite games of all time; However, Fortnite seasons 1-5 has a chokehold 
                                on my memories of playing video games with my friends in highschool. We 
                                all had an absolute blast.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R5C2', true, false)" class="dropbtn">Call of Duty: Black Ops III</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R5C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\blackops3.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">I didn't enjoy Infinite Warfare that much, so I've played 
                                Black Ops III a lot more than any other Call of Duty game. The zombies 
                                experience, however, has me still playing to this day.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R5C3', true, false)" class="dropbtn">Saints Row: Gat out of Hell</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R5C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\gatoutofhell.jpeg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Join Johnny Gat & Kinzie Kensington as you tear apart Hell 
                                in a quest to save the Boss' soul. Historical icons, old friends, older 
                                enemies, a talking gun, a full length musical number & a whole lot more 
                                shenanigans await!
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 6 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R6C1', true, false)" class="dropbtn">Call of Duty: Black Ops III</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R6C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\blackops3.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">I was very much into the Call of Duty series, so since the 
                                installment after Black Ops III wasn't as appealing for me I spent even 
                                more time playing Black Ops III and thoroughly enjoyed every mode in this 
                                game, especially the Zombies mode (and still do to this day).
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R6C2', true, false)" class="dropbtn">Tom Clancy's Rainbow Six Siege</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R6C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\r6siege.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Since this was the first game I've played competitively, I was 
                                bound to dump a ton of hours into it. Playing with friends is truly a fun 
                                (or daunting!) experience.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R6C3', true, false)" class="dropbtn">Nom Nom Galaxy</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R6C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\nomnomgalaxy.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Welcome to SoupCo, Astroworker! In Nom Nom Galaxy, construct 
                                and automate gigantic soup factories on unexplored planets throughout the 
                                universe, harvest flora and fauna to turn them into artisanal soups, and 
                                rocket your product into the gullets of the galaxy!
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 7 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R7C1', true, false)" class="dropbtn">Call of Duty: Black Ops II - Multiplayer</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R7C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\blackops2.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">This hardly needs an explanation, this game is imprinted in 
                                a great majority of people my age. Everyone collectively had a blast playing 
                                this game with their friends in their childhood, and have bittersweet 
                                nostalgia looking back at their experience.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R7C2', true, false)" class="dropbtn">Overwatch</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R7C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\overwatch.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">I've played a ton of this game back near its first launch, and 
                                I still play every now and then. I've also spent a good amount of money on 
                                this game, not that I'm proud of it...
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R7C3', true, false)" class="dropbtn">Team Fortress 2</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R7C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\tf2.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Nine distinct classes provide a broad range of tactical 
                                abilities and personalities. Constantly updated with new game modes, maps, 
                                equipment and, most importantly, hats!
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 8 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R8C1', true, false)" class="dropbtn">Tom Clancy's Rainbow Six Siege</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R8C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\r6siege.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">The first game I've gotten serious about playing competitively. 
                                This game requires huge amounts of teamwork, coordination, and concentration, 
                                and will, at the same time, make you hate your friends and strengthen your 
                                bonds.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R8C2', true, false)" class="dropbtn">Plants vs. Zombies Garden Warfare 2</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R8C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\pvzgw2.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">A while ago, there was a time during summer where I have just 
                                spent all my time playing this game. Such an excellent shooter, love this game.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R8C3', true, false)" class="dropbtn">Call of Duty: Black Ops III</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R8C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\blackops3.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Call of Duty: Black Ops III combines three unique game modes: 
                                Campaign, Multiplayer and Zombies, providing fans with the deepest and most 
                                ambitious Call of Duty ever.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 9 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R9C1', true, false)" class="dropbtn">Plants vs. Zombies Garden Warfare 2</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R9C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\pvzgw2.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">An underrated gem! While the first Garden Warfare is heavily 
                                considered, the sequel doesn't get enough attention. I will typically require 
                                friends to have a lot of fun in multiplayer games, but this one I've spent a 
                                crazy amount of time just playing by myself and enjoying every minute of it.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R9C2', true, false)" class="dropbtn">Plants vs. Zombies</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R9C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\pvz.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">I honestly don't know how exactly I've put this many hours 
                                into this game, but I'm not one to argue with numbers. It's a really fun 
                                casual game that you can just hop on and play for a little bit.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R9C3', true, false)" class="dropbtn">Ninja Kiwi Archive</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R9C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\ninjakiwi.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Enjoy some of the best loved Flash games of the past in this 
                                awesome time capsule of over 60 Ninja Kiwi classics. Experience a piece of 
                                history and play the original Flash games that spawned the worldwide phenomenon 
                                of Bloons TD.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        <!-- ROW 10 -->
        <tr>
            <th class="FavGamesFill">
                <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R10C1', true, false)" class="dropbtn">DOOM Eternal</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R10C1" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\doometernal.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">A game carefully crafted with love and a need to stuff as 
                                much fun in a single video game as possible. Slaying demons with high 
                                bpm metal playing in the background is bad ass enough, but the story 
                                itself is so awesome it makes you come back for more every time you remember.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R10C2', true, false)" class="dropbtn">Call of Duty: Black Ops II - Multiplayer</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R10C2" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\blackops2.png" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Back in the day, I use to binge play this game when it first 
                                came out. I still play this game every now and then on PC, seeing that the 
                                servers are still alive. Just goes to show how awesome and impactful this 
                                game really is.
                            </div>
                        </div>
                    </div>
                </div>
            </th>
            <th class="FavGamesFill">
            <div class="dropdown">
                    <!-- GAME TITLE -->
                    <button onclick="displayOverlay('R10C3', true, false)" class="dropbtn">Geometry Dash</button>
                    <!-- DROPDOWN CONTAINER -->
                    <div id="R10C3" class="overlay-background" onclick="displayOverlay('overlay-content', false, false)">
                        <!-- GAME IMAGE -->
                        <div class="overlay-content" onclick="displayOverlay('overlay-content', false, false)">
                            <img src="IMAGES\geometrydash.jpg" width="600" height="400">
                            <!-- GAME DESCRIPTION -->
                            <div class="desc">Jump and fly your way through danger in this rhythm-based 
                                action platformer!
                            </div>
                        </div>
                    </div>
                </div>
            </th>
        </tr>
    </table>

    <!-- COMMENTS HEADER -->
    <h2 id="comments" class="sections">Comments/Feedback</h2>

    <!-- COMMENTS HANDLER -->
<?php
    echo "<form method='POST' action='".setComments()."'>
        <!-- /////////NAME SUBMISSION OVERLAY///////// -->
        <div class='comments-overlay-background'>
        <button id='backButton' onclick='displayOverlay('comments-overlay-background', false, true)'>&#10094;</button>
            <!-- /////////OVERLAY BACKGROUND///////// -->
            <div class='comments-overlay-content'>
                <img src='IMAGES\commentoverlay.png' width='800' height='533'>

                <!-- /////////OVERLAY TEXT/FORM///////// -->
                <div class='text-forms'>
                    Who's Writing?<br>
                    <textarea id='commentName' name='uid' placeholder='Leave blank for Anonymous' value=''></textarea><br>
                    <button id='confirmButton' name='confirmComment' size='100'>Confirm</button>
                </div>
            </div>
        </div>

        <!-- /////////COMMENT TEXT BOX///////// -->
        <textarea id='commentText' name='message' placeholder='Type comment here...'></textarea><br>
        <input type='hidden' name='date' value='$date'>"
?>

        <input id='commentButton' type='button' name='submitComment' size='100' value='Comment' onclick='displayOverlay("comments-overlay-background", true, true)'>
    </form>

<?php
    /* DISPLAYS COMMENTS BELOW COMMENT TEXT BOX */
    getComments();
?>

    <!-- CONTAINER TO DISPLAY "NO COMMENTS" -->
    <div id=commentsCheck>
    </div>

</body>

<script src="SCRIPT\favorite-games.js"></script>

</html>