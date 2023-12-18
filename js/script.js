window.onload = function() {
    var extendedInfo = document.getElementsByClassName("extendedInfo");
    for (var i = 0; i < extendedInfo.length; i++) {
        extendedInfo[i].style.height = "0px";
    }

    const menuItems = document.querySelectorAll("#menu ul li");
    menuItems.forEach((item) => {
        item.addEventListener("mouseover", () => {
            menuItems.forEach((menuItem) => {
                if (menuItem !== item) {
                    menuItem.classList.add("not-hovered");
                    menuItem.classList.remove("hovered");
                } else {
                    menuItem.classList.add("hovered");
                    menuItem.classList.remove("not-hovered");
                }
            });
        });

        item.addEventListener("mouseout", () => {
            menuItems.forEach((menuItem) => {
              menuItem.classList.remove("hovered", "not-hovered");
            });
        });
    });


    const rotativeText = document.getElementById("rotative-text");
    const texts = [
        "Web Developer",
        "Software Engineer",
        "Full Stack Developer",
        "Frontend Developer",
        "Backend Developer",
        "Mobile App Developer",
        "UI/UX Designer",
        "Data Analyst",
        "DevOps Engineer",
        "Game Developer",
        "Cloud Architect",
        "Machine Learning Engineer",
        "Physics Student",
        "Mathematics Student",
        "Astrophysics Enthusiast"
    ];

    let currentWordIndex = Math.floor(Math.random() * texts.length); // Iniciar en un índice aleatorio
    let currentText = "";
    let isDeleting = false;
    let typingSpeed = 100; // Velocidad de escritura en milisegundos
    let deletingSpeed = 30; // Velocidad de borrado en milisegundos
    let delayBetweenWords = 2000; // Tiempo de espera entre palabras en milisegundos

    function type() {
      const currentWord = texts[currentWordIndex];

      if (isDeleting) {
        currentText = currentWord.slice(0, currentText.length - 1);
        typingSpeed = deletingSpeed;
      } else {
        currentText = currentWord.slice(0, currentText.length + 1);
        typingSpeed = typingSpeed === delayBetweenWords ? 100 : typingSpeed;
      }

      rotativeText.textContent = currentText;

      if (!isDeleting && currentText === currentWord) {
        isDeleting = true;
        typingSpeed = delayBetweenWords;
      } else if (isDeleting && currentText === "") {
        isDeleting = false;
        currentWordIndex = Math.floor(Math.random() * texts.length); // Seleccionar un índice aleatorio
        typingSpeed = 100; // Velocidad de escritura
      }

      if (isDeleting && currentText === "") {
        setTimeout(type, typingSpeed);
      } else {
        setTimeout(type, typingSpeed + (isDeleting ? deletingSpeed * 2 : 0)); // Ralentizar la velocidad de borrado
      }
    }

    type();
};

function dropMenu() {
    // if menu is already open, close it
    if (document.getElementById("menuUl").style.transform == "translateX(0px)") {
        document.getElementById("menuUl").style.transform = "translateX(-100%)";
        document.getElementById("menuUl").style.transition = "0.5s";

        // the line2 and line3 will be rotated -45 degrees and line1 will be rotated 45 degrees
        document.getElementById("line2").style.display = "block";
        document.getElementById("line3").style.transform = "rotate(0deg)";
        document.getElementById("line1").style.transform = "rotate(0deg)";
        document.getElementById("burger").style.padding = "5px 10px";
        document.getElementById("burger").style.backgroundColor = "var(--wm-background)";
        document.body.style.overflow = "visible";
    }
    // if menu is closed, open it
    else {
        if (window.innerWidth >= 1024) { return; } else { console.log("hola"); }
        document.getElementById("menuUl").style.transform = "translateX(0px)";
        document.getElementById("menuUl").style.transition = "0.5s";

        // the line2 and line3 will be rotated 45 degrees and line1 will be rotated -45 degrees
        document.getElementById("line2").style.display = "none";
        document.getElementById("line3").style.transform = "rotate(45deg) translateY(-6px)";
        document.getElementById("line1").style.transform = "rotate(-45deg) translateY(6px)";
        document.getElementById("burger").style.padding = "7px 13px 7px 6px";
        document.getElementById("burger").style.backgroundColor = "transparent";
        document.body.style.overflow = "hidden";
    }
}



var modal = document.getElementById("serviceForm");
function showForm() { 
    document.body.style.overflow = "hidden";
    modal.style.height = "100%"; }

function closeModal() {
    document.body.style.overflow = "visible";
    modal.style.height = "0%";
}

window.onclick = function(event) { if (event.target == modal) { closeModal(); } }

function selectButton(button) {
    var buttons = document.getElementsByClassName("radioInput");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("selected");
    }
    buttons[button].classList.add("selected");
}


function dropExperience(number) {
    var extendedInfo = document.getElementsByClassName("extendedInfo");
    var experienceButtons = document.getElementsByClassName("experienceButton");

    for (var i = 0; i < extendedInfo.length; i++) {
        if (i != number) {
            extendedInfo[i].style.height = "0px";
            experienceButtons[i].classList.remove("bx-collapse-alt");
            experienceButtons[i].classList.add("bx-plus");
        }
    }

    if ( extendedInfo[number].style.height == "0px" ) {
        extendedInfo[number].style.height = "25vh";
        experienceButtons[number].classList.remove("bx-plus");
        experienceButtons[number].classList.add("bx-collapse-alt");
    } else {
        extendedInfo[number].style.height = "0px";
        experienceButtons[number].classList.remove("bx-collapse-alt");
        experienceButtons[number].classList.add("bx-plus");
    }    
}



function redirect(direction) {
    if (direction == "github") {
        window.open("https://github.com/AstroIzan");
    } else if (direction == "linkedin") {
        window.open("https://www.linkedin.com/in/izan-estirado-alfaro-6871a016b/");
    } else if (direction == "instagram") {
        window.open("https://www.instagram.com/astro_izan/");
    } else if (direction == "email") {
        window.open("mailto:izan2003@gmail.com");
    } else if (direction == "tlf") {
        window.open("tel:+34690293356");
    }
}