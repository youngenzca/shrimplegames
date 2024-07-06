<?php
    /* LINK TO PHP SCRIPT AND PHP VARIABLES */
    date_default_timezone_set('America/Los_Angeles');
    include 'DATABASE\HOME-COMMENTS\homecomments.inc.php';

    $date = date('F j, Y, g:i a');
    $day = date('j');
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- TITLE ON WEBSITE TAB -->
    <title>Tristan's Website</title>

    <!-- LINKS TO WEBSITE FAVICON, CSS SCRIPT, AND JQUERY ENABLE -->
    <link rel="icon" type="image/x-icon" href="IMAGES\favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS\home.css">
    <script src="SCRIPT\jquery-3.7.1.js"></script>
</head>

<body>     
    <!-- TABLE OF CONTENTS ON TOP OF PAGE -->
    <table>
        <tr>
            <th><input class="topBar" type="button" size="300" value="Home" onclick="goToPage(1)"></th>
            <th><input class="topBar" type="button" size="300" value="Favorite Games" onclick="goToPage(2)"></th>
            <th><input class="topBar" type="button" size="300" value="Shrimple Games" onclick="goToPage(3)"></th>
            <th><select id="Social Medias" class="topBar">
                <option value="Social Medias" disabled selected>Social Medias</option>
                <option value="E-Mail">E-Mail: allen77t@gmail.com</option>
                <option value="Instagram">Instagram</option>
                <option value="Discord">Discord</option>
                <option value="Github">Github</option>
            </select></th>
            <th><input class="topBar" type="button" size="300" value="Comments" onclick="goToPage(5)"></th>
        </tr>
    </table>

    <!-- TITLE -->
    <h1>Tristan's Website :)</h1>

    <!-- MESSAGE OF THE DAY -->
<?php
    echo "<div id='motdDate' name='$day'>
        <h2 class='motd'>Message of the day:<br></h2>"
?>
        <h2 id='motdQuote'>MOTD!
        </h2>
    </div>

    <!-- SLIDESHOW HANDLER -->
    <div class="slideshow-container">

        <!-- IMAGES, CAPTIONS, TEXTS, AND LINKS -->
        <div class="mySlides fade">
            <div class="caption">Home</div>
            <div class="numbertext">1 / 5</div>
            <a href="home.php"><img src="IMAGES\Home.png" style="width:100%"></a>
            <div class="text">
                The hub for the different pages of this website! Here you can find out about 
                me or navigate to any of the pages using the bar up top or clicking one of 
                these images.
            </div>
        </div>

        <div class="mySlides fade">
            <div class="caption">Favorite Games</div>
            <div class="numbertext">2 / 5</div>
            <a href="favorite-games.php"><img src="IMAGES\Zombies.png" style="width:100%"></a>
            <div class="text">
                Here is a personal list of my favorite games of all time, the games I've recently 
                played, and the games I've played the most! I have also included insight on what
                my thoughts are on each game; feel free to share your thoughts in the comments
                of that page!
            </div>
        </div>

        <div class="mySlides fade" >
            <div class="caption">Shrimple Games</div>
            <div class="numbertext">3 / 5</div>
            <a href="shrimple-games.php"><img src="IMAGES\Shrimple.png" style="width:100%"></a>
            <div class="text">
                This is the name of which I release the games I create. Shrimple Games is a soon-to-be 
                game studio of me and my good friend Chris (who makes all of the sounds and soundtracks!).
                I am still looking for an artist to help me make my games pretty and eye-catching; if
                you are interested, leave a comment or contact me on any Shrimple Games social medias!
            </div>
        </div>

        <div class="mySlides fade">
            <div class="caption">Social Medias</div>
            <div class="numbertext">4 / 5</div>
            <img src="IMAGES\Social Medias.png" style="width:100%">
            <div class="text">
                At the top of the page, you can find the list of where to contact me. Each contact 
                is personal, so if you have any questions I will be able to answer very quickly :)
            </div>
        </div>

        <div class="mySlides fade">
            <div class="caption">Comments</div>
            <div class="numbertext">5 / 5</div>
            <a href="#comments"><img src="IMAGES\Comments.png" style="width:100%"></a>
            <div class="text">
                At the bottom of the page are the comments! If you have any feedback, feel free to
                write whats on your mind; just make sure to keep it appropriate ;)
            </div>
        </div>

        <!-- NEXT/PREVIOUS BUTTONS -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

        <!-- DOTS TO GO TO ANY SLIDE -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    <!-- ABOUT ME SECTION -->
    <h2 class="sections">About Me</h2>
    <div id=aboutPicture>
        <img src="IMAGES\AboutMe.png" style="width:50%">
    </div>
    <p> 
        Hi! My name is Tristan Allen, and I have been a small time developer for 3 years. I have 
        an ambition to make developing and coding my full-time job and have been learning lots of
        different languages to make that dream come true. While developing games is my passion,
        I have begun learning to code websites to expand my knowledge of how different
        languages work together and synergize. I've started with this personal website, which I 
        have built from scratch, to get me started in website building. For more information on 
        the games I have made, head on to the Shrimple Games tab. If you are a future client, I 
        look forward to working with you! I'll always do my best! For any inquiries, you can reach
        me at allen77t@gmail.com or any of my social medias! Feel free to leave a comment too, just
        make sure to keep it appropriate ;)
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

<!-- LINK TO JAVASCRIPT -->
<script src="SCRIPT\home.js"></script>

</html>