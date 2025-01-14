// DROPDOWN VARIABLE
const dropdown = document.getElementById('Social Medias');

//SEE IF THERE ARE NO COMMENTS
commentsCheck();

function goToPage(n) {
    // SWITCH TO DIFFERENT WEBPAGE BASED ON WHAT BUTTON WAS CLICKED ON NAV BAR
    if (n == 1) {
        window.location.href = "index.html";
    } else if (n == 2) {
        window.location.href = "favorite-games.html";
    } else if (n == 3) {
        window.location.href = "shrimple-games.html";
    } else if (n == 5) {
        window.location.href = "shrimple-games.html#comments";
    }
}

function linkDropDown() {
    // GO TO A LINK BASED ON WHAT WAS CLICKED ON THE SOCIAL MEDIA DROPDOWN MENU
    const selectedValue = dropdown.value;
    if (selectedValue == "E-Mail") {
        window.location.href = "mailto:allen77t@gmail.com";
    } else if (selectedValue == "Instagram") {
        window.location.href = "https://www.instagram.com/tristan0418?igsh=NGVhN2U2NjQ0Yg%3D%3D&utm_source=qr";
    } else if (selectedValue == "Discord") {
        window.location.href = "https://discordapp.com/users/393365618285477898";
    } else if (selectedValue == "Github") {
        window.location.href = "https://github.com/youngenzca";
    }
}

// EXECUTE FUNCTION WHEN A SOCIAL MEDIA DROPDOWN MENU OPTION IS SELECTED
dropdown.addEventListener('change', function() { 
    linkDropDown();
});

// OPENS SIDE NAV BAR
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

// CLOSES SIDE NAV BAR
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

// DISPLAYS NAME SUBMISSION OVERLAY WHEN COMMENT BUTTON IS CLICKED
function displayOverlay(type, bool) {
    // DETERMINES WHETHER TO OPEN OR CLOSE THE OVERLAY VIA PARAMETER
    if (bool == true) {
        // GETS SPECIFIC IMAGE AND TEXT CONTENT BY ACCESSING ALL DIV CHILDREN
        let content = document.getElementsByClassName(type)

        // DISPLAYS SPECIFIC BACKGROUND, IMAGE AND TEXT
        for (i = 0; i < content.length; i++) {
            content[i].style.display = "block";
        }
    } else {
        // TAKES ALL BACKGROUNDS AND CONTENT OVERLAYS
        let backgrounds = document.getElementsByClassName("overlay-background");
        let overlays = document.getElementsByClassName(type);

        // REMOVES ALL DISPLAYS
        for (i = 0; i < overlays.length; i++) {
            backgrounds[i].style.display = "none";
            overlays[i].style.display = "none";
        }
    }
}

// CHECKS IF THERES COMMENTS, IF NOT THROW "NO COMMENTS"
function commentsCheck() {
    if (document.getElementsByClassName("allComments").length == 0) {
        document.getElementById("commentsCheck").innerHTML = "<h2 class='sections'>Error! Github does not support PHP!</h2>";
    }
}