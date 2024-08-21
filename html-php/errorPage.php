<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/astrap.css">
    <link rel="stylesheet" href="css/mediaQueries.css">
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Izan Estirado Alfaro</title>
</head>
<body>
    <header id="home">
        <nav id="menu" class="column-center">
            <ul id="menuUl" class="row-center m-0 p-0">
                <li><a onclick="dropMenu()" href="#home"><span>01</span>Home</a></li>
                <li><a onclick="dropMenu()" href="#about"><span>02</span>About</a></li>
                <li><a onclick="dropMenu()" href="#services"><span>03</span>Services</a></li>
                <li><a onclick="dropMenu()" href="#experience"><span>04</span>Experience</a></li>
                <li><a onclick="dropMenu()" href="#projects"><span>05</span>Projects</a></li>
                <li><a onclick="dropMenu()" href="#contact"><span>06</span>Contact</a></li>
            </ul>
            <div class="burger" id="burger" onclick="dropMenu();">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
            </div>
        </nav>
        <div class="container column-center">
            <div id="pageTitle" class="pt-5 column-center">
                <h1 class="pt-5 column-center">Izan<span>Estirado</span></h1>
                <p class="m-0" id="rotative-text">Web Developer</p>
            </div>
            <div class='scrolldown mb-1'>
                <a href="#about" class="mouse"></a>
                <p class="text">Scroll</p>
            </div>              
        </div>
    </header>
    <footer class="mt-5">
        <div class="row-center">
            <div class="footerInfo column-start">
                <h2 class="pt-5">Available for select <br>freelance opportunities</h2>
                <p class="pl-3">Have an exciting project you need<br>help with?<br>Send me an email or contact me via<br>instant message!</p>
                <div class="column-start pb-5 pl-2">
                    <div class="row-start p-1" onclick="redirect('instagram')">
                        <span class='bx bxl-instagram mr-1'></span>
                        <a href="https://www.instagram.com/astro_izan/" target="_blank" class="">@AstroIzan</a>
                    </div>
                    <div class="row-start p-1" onclick="redirect('linkedin')">
                        <span class='bx bxl-linkedin mr-1'></span>
                        <a href="https://www.linkedin.com/in/izan-estirado-alfaro-6871a016b/" target="_blank" class="">@IzanEstiradoAlfaro</a>
                    </div>
                    <div class="row-start p-1" onclick="redirect('github')">
                        <span class='bx bxl-github mr-1'></span>
                        <a href="https://github.com/AstroIzan" target="_blank" class="">@AstroIzan</a>
                    </div>
                    <div class="row-start p-1" onclick="redirect('email')">
                        <span class='bx bx-envelope mr-1'></span>
                        <a href="mailto:izan2003@gmail.com" class="">izan2003@gmail.com</a>
                    </div>
                    <div class="row-start p-1" onclick="redirect('tlf')">
                        <span class='bx bx-phone mr-1'></span>
                        <a href="tel:+34722728925" class="">722 72 89 25</a>
                    </div>
                </div>
            </div>
            <div class="contactInfo column-center">
                <h2>Contact Form</h2>
                <p>Send me a message and I will get back to you as soon as possible!</p>
                <form action="" class="column-center">
                    <div class="row-center mt-1">
                        <div class="column-start">
                            <label for="name" class="pl-3">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                        <div class="column-start right_input">
                            <label for="email" class="pl-5">Email</label>
                            <input type="email" name="email" id="email" placeholder="Ex. izan2003@gmail.com" required>
                        </div>
                    </div>
                    <div class="column-start">
                        <label for="subject" class="pl-3 mt-1">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Ex. Web Design" required>
                    </div>
                    <div class="column-start">
                        <label for="message" class="pl-3 mt-1">Message</label>
                        <textarea class="pt-1" name="message" id="message" cols="40" rows="8" placeholder="What are you thinking?" required></textarea>
                    </div>
                    <div class="column-end">
                        <input type="submit" value="Send Message" class="mt-1">
                    </div>
                </form>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>