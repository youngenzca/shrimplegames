// VARIABLE DECLARATIONS
let slideIndex = 1;
let updatedIndex;
let manualSlide = false;
let autoSlideIndex = 0;

// DROPDOWN VARIABLE
const dropdown = document.getElementById('Social Medias');

// SHOW MESSAGE OF THE DAY
MessageOfTheDay();

// AUTO SLIDESHOW CONTROL
autoSlides();

// SEE IF THERE ARE NO COMMENTS
commentsCheck();

function MessageOfTheDay() {
    let day = document.getElementById('motdDate').getAttribute('name');

    if ((day > 10) && (day < 21)) {
        day -= 10;
    } else if ((day > 10) && (day < 31)) {
        day -= 20;
    } else if (day > 30) {
        day -= 30;
    }


    if (day == 1) {
        document.getElementById("motdQuote").innerHTML 
        = "If you keep carrying old bricks, you will build the same house!";
    } else if (day == 2) {
        document.getElementById("motdQuote").innerHTML 
        = "Observe the thought, rather than directly react to it!";
    } else if (day == 3) {
        document.getElementById("motdQuote").innerHTML 
        = "Not every closed door is locked!";
    } else if (day == 4) {
        document.getElementById("motdQuote").innerHTML 
        = "Everything is difficult at first!";
    } else if (day == 5) {
        document.getElementById("motdQuote").innerHTML 
        = "Take care of yourself, because someone really cares about you!";
    } else if (day == 6) {
        document.getElementById("motdQuote").innerHTML 
        = "Drink water!";
    } else if (day == 7) {
        document.getElementById("motdQuote").innerHTML 
        = "You didn't get this far by giving up!";
    } else if (day == 8) {
        document.getElementById("motdQuote").innerHTML 
        = "It's wonderful that you are you!";
    } else if (day == 9) {
        document.getElementById("motdQuote").innerHTML 
        = "If you find your truth, you must follow it!";
    } else if (day == 10) {
        document.getElementById("motdQuote").innerHTML 
        = "Better days are coming!";
    }
}

// NEXT/PREV CONTROLS
function plusSlides(n) {
    // UPDATE INDEX NUMBER TO SYNC MANUAL AND AUTO
    if (updatedIndex != slideIndex) {
        slideIndex = autoSlideIndex + n;
    } else {
        slideIndex += n;
    }
    
    updatedIndex = slideIndex;

    // FIX SLIDE NUMBER
    if (updatedIndex == 0) {
        updatedIndex = 5;
    } else if (updatedIndex == 6) {
        updatedIndex = 1;
    }
    showSlides(slideIndex);
}

// DOT SLIDE CONTROLS
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// SWITCH SLIDES
function showSlides(n) {
    // VARIABLE DECLARATIONS
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    // FIX SLIDEINDEX NUMBER
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    // MAKE SURE SLIDE DISPLAYS ARE OFF
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    // SHOW SLIDE THAT SHOULD BE ACTIVE BASED ON NUMBER
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";

    // PAUSE AUTO SLIDE
    manualSlide = true;
}

function autoSlides() {
    // IF NOT PAUSED, AUTO SLIDE
    if (manualSlide == false) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        // FIX SLIDEINDEX NUMBER
        for (i = 0; i < slides.length; i++) {
            if (slides[i].style.display == "block") {
                autoSlideIndex = i+1;
            }
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        autoSlideIndex++;
        if (autoSlideIndex > slides.length) {
            autoSlideIndex = 1
        }
        // SHOW SLIDE THAT SHOULD BE ACTIVE BASED ON NUMBER
        slides[autoSlideIndex-1].style.display = "block";
        dots[autoSlideIndex-1].className += " active";
        updatedIndex = autoSlideIndex;
        // START A 5 SECOND COUNT
        setTimeout(autoSlides, 5000);
    } else {
        // IF PAUSED, RESTART COUNT
        manualSlide = false;
        setTimeout(autoSlides, 5000);
    }
}

function goToPage(n) {
    // SWITCH TO DIFFERENT WEBPAGE BASED ON WHAT BUTTON WAS CLICKED ON NAV BAR
    if (n == 1) {
        window.location.href = "home.php";
    } else if (n == 2) {
        window.location.href = "favorite-games.php";
    } else if (n == 3) {
        window.location.href = "shrimple-games.php";
    } else if (n == 5) {
        window.location.href = "home.php#comments";
    }
}

function linkDropDown() {
    // GO TO A LINK BASED ON WHAT WAS CLICKED ON THE DROPDOWN MENU
    const selectedValue = dropdown.value;
    if (selectedValue == "Instagram") {
        window.location.href = "https://www.instagram.com/tristan0418?igsh=NGVhN2U2NjQ0Yg%3D%3D&utm_source=qr";
    } else if (selectedValue == "Discord") {
        window.location.href = "https://discordapp.com/users/393365618285477898";
    } else if (selectedValue == "Github") {
        window.location.href = "https://github.com/youngenzca";
    }
}

// EXECUTE FUNCTION WHEN A DROPDOWN MENU OPTION IS SELECTED
dropdown.addEventListener('change', function() { 
    linkDropDown();
});

//DISPLAYS NAME SUBMISSION OVERLAY WHEN COMMENT BUTTON IS CLICKED
function displayOverlay(type, bool) {
    //DETERMINES WHETHER TO OPEN OR CLOSE THE OVERLAY VIA PARAMETER
    if (bool == true) {
        //GETS SPECIFIC IMAGE AND TEXT CONTENT BY ACCESSING ALL DIV CHILDREN
        let content = document.getElementsByClassName(type);

        //DISPLAYS SPECIFIC BACKGROUND, IMAGE AND TEXT
        for (i = 0; i < content.length; i++) {
            content[i].style.display = "block";
        }
    } else {
        //TAKES ALL BACKGROUNDS AND CONTENT OVERLAYS
        let backgrounds = document.getElementsByClassName("overlay-background");
        let overlays = document.getElementsByClassName(type);

        //REMOVES ALL DISPLAYS
        for (i = 0; i < overlays.length; i++) {
            backgrounds[i].style.display = "none";
            overlays[i].style.display = "none";
        }
    }
}

function commentsCheck() {
    if (document.getElementsByClassName("allComments").length == 0) {
        document.getElementById("commentsCheck").innerHTML = "<h2 class='sections'>No Comments</h2>";
    }
}