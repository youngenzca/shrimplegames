<?php
    /* LINK TO PHP SCRIPT AND PHP VARIABLES */
    date_default_timezone_set('America/Los_Angeles');
    include 'DATABASE\SHRIMPLE-GAMES-COMMENTS\shrimplegamescomments.inc.php';

    $date = date('F j, Y, g:i a');
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- TITLE ON WEBSITE TAB -->
    <title>Tristan's Website</title>

    <!-- LINKS TO WEBSITE FAVICON, CSS SCRIPT, AND JQUERY ENABLE -->
    <link rel="icon" type="image/x-icon" href="IMAGES\favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS\shrimple-games.css">
    <script src="SCRIPT\jquery-3.7.1.js"></script>
</head>

<body>     
    <!-- TABLE OF CONTENTS ON TOP OF PAGE -->
    <table class="TOCContainer">
        <tr>
            <th class="TOC"><input class="navBar" type="button" size="300" value="Shrimple Games Links" onclick="openNav()"></th>
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

    <!-- SIDE NAV BAR -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="SideBarHeaders"><a href="#ShrimpleGames" onclick="closeNav()">Shrimple Games Links</a></div>
        <a href="https://www.youtube.com/@shrimplegames">Youtube</a>
        <a href="#">Instagram</a>
        <a href="#">Tiktok</a>
        <a href="https://play.google.com/store/apps/dev?id=5399159223820683594">Google Play</a>
        <a href="https://apps.apple.com/us/app/depth-jumper/id6467833484">App Store</a>
        <a href="mailto:shrimple.games.help@gmail.com">Email:</a>
        <div class="Email">shrimple.games.help@gmail.com</div><hr>
        <div class="SideBarHeaders"><a href="#FallenInc" onclick="closeNav()">Fallen Inc Links</a></div>
        <a href="https://www.youtube.com/channel/UChKkXFVxsyGfm6QFtdV7hsQ">Youtube</a>
        <a href="https://www.instagram.com/falleninc/">Instagram</a>
        <a href="https://open.spotify.com/artist/6Rk9876tl1tWm2HtiX81EF?si=-9ToCh4sRO6m2KDZf4pLXg">Spotify</a>
        <a href="https://music.apple.com/us/artist/fallen-inc/1454986515">Apple Music</a>
        <a href="#">Email:</a>
        <div class="Email">fallenincorperated@gmail.com</div>
        <a href="#">.</a>
        <a href="#">.</a>
        <a href="#">.</a>
        <a href="#">.</a>
        <a href="#">.</a>
        <a href="#">.</a>
    </div>

    <!-- TITLE -->
    <h1>
        <img src="IMAGES\shrimplegamesicon.PNG" id="TitleImage" width="50" height="50">
        Shrimple Games
        
        <img src="IMAGES\fallenincicon.png" id="TitleImage" width="50" height="50">
        Fallen Inc
    </h1>

    <!-- ABOUT SHRIMPLE GAMES SECTION -->
    <h2 id="ShrimpleGames" class="sections">About Shrimple Games</h2>
    <img src="IMAGES\shrimplegamesabout.png" id=aboutPicture>
    
    <p class="SectionText"> 
        Shrimple Games is a soon-to-be game studio of me and Fallen Inc (who makes 
        all of the sounds and soundtracks!). The current games I have released are 
        Rebound, PixelScape, and Depth Jumper. Future games will be released soon, 
        so be sure to be on the lookout for them! Games are available on the iOS 
        App Store and the Google Play Store (both of which are on the links tab). 
        Be sure to reference the help email for any inquiries, and feel free to 
        leave any feedback in the comment section :)<br><br>

        Rebound is a mini-golf like game that uses intuitive ricochets, has multiple 
        fun gimmicks and puzzle-like levels that will easily pass the time as you 
        play!<br><br>

        PixelScape is a relaxing pixel art coloring game to help you relax and/or 
        pass the time, featuring 8 128x128 real images to color and 8 calming, 
        interactable songs!<br><br>

        Depth Jumper is a vertical arcade runner! Collect coins, vaporize enemies, 
        earn tons of achievements, and more!
    </p>

    <!-- ABOUT FALLEN INC SECTION -->
    <h2 id="FallenInc" class="sections">About Fallen Inc</h2>
    
    <p class="SectionText"> 
    Hi, I'm Chris! I produce anything from loud and heavy dubstep to chill and relaxing 
    lo-fi music. I've been making music for a little over 7 and a half years eventually 
    creating my artist name "Fallen Inc." Everything I make for Shrimple Games will be 
    on Spotify and Apple Music!
    </p>

    <!-- SPOTIFY DISPLAY SECTION -->
    <div id="SpotifyEmbed">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/6tyuZH26ZQRSJe7321TCbT?utm_source=generator" 
        width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; 
        fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div><br>

    <!-- LOOKING FOR ARTIST SECTION -->
    <h2 id="UnknownArtist">LOOKING FOR ARTIST!!</h2>
    <p id="ArtistSection"> 
        Shrimple Games is in need of an artist! If you are an artist looking to make 
        graphical assets in games and a little money, please email 
        shrimple.games.help@gmail.com and we will get back to you as soon as possible! 
        A little bit of animation is sought after, so the only requirement is that 
        you are good at digital art and animation! We look forward to hearing from 
        you!
    </p>

    <!-- COMMENTS HEADER -->
    <h2 id="comments" class="sections">Comments/Feedback</h2>

    <!-- COMMENTS HANDLER -->
<?php
    echo "<form method='POST' action='".setComments()."'>
        <!-- /////////NAME SUBMISSION OVERLAY///////// -->
        <div class='overlay-background'>
        <button id='backButton' onclick='displayOverlay('overlay-background', false)'>&#10094;</button>
            <!-- /////////OVERLAY BACKGROUND///////// -->
            <div class='overlay-content'>
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

        <input id='commentButton' type='button' name='submitComment' size='100' value='Comment' onclick='displayOverlay("overlay-background", true)'>
    </form>

<?php
    /* DISPLAYS COMMENTS BELOW COMMENT TEXT BOX */
    getComments();
?>

    <!-- CONTAINER TO DISPLAY "NO COMMENTS" -->
    <div id=commentsCheck>
    </div>

</body>

<script src="SCRIPT\shrimple-games.js"></script>

</html>