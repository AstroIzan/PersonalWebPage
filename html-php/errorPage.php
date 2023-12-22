<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/astrap.css">
    <link rel="stylesheet" href="../css/mediaQueries.css">
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Izan Estirado Alfaro</title>
    <style>
        h2 { text-align: center; }
        h3 { text-align: center; }
        p { text-align: center; }
        a {
            text-decoration: none;
            color: #fff;
            background-color: #68a691;
            padding: 10px 20px;
            border-radius: 50px;
            transition: all 0.3s ease; }
        a:hover { background-color: #4d7b7a; }
    </style>
</head>
<body>
    <div id="available">
        <header id="available">
            <div class="container column-center">
                <?php
                    $error = $_GET['error'];
                    switch ($error) {
                        case '404':
                            echo "<h2>404</h2>";
                            echo "<h3>Page not found</h3>";
                            echo "<p>Sorry, the page you're looking for doesn't exist.</p>";
                            break;
                        case '403':
                            echo "<h2>403</h2>";
                            echo "<h3>Forbidden</h3>";
                            echo "<p>Sorry, you don't have permission to access this page.</p>";
                            break;
                        case '500':
                            echo "<h2>500</h2>";
                            echo "<h3>Internal Server Error</h3>";
                            echo "<p>Sorry, the server encountered an internal error or misconfiguration and was unable to complete your request.</p>";
                            break;
                        case '606':
                            echo "<h2>Cuation</h2>";
                            echo "<h3>Forms Not Available</h3>";
                            echo "<p>At the moment the forms are not active, due to an error with the php server, while this error is resolved you can contact me through my different social networks, visible in the footer of the page.</p>";
                            echo "<p>Sorry for the inconvenience.</p>";
                            // ADD A BUTTON TO CONTINUE to the page
                            echo "<a href='../indexProvisional.html' class='btn'>Continue</a>";
                            break;
                        default:
                            echo "<h2>Unknown Error</h2>";
                            echo "<h3>Unknown Error</h3>";
                            echo "<p>Sorry, an unknown error has occurred.</p>";
                            break;
                    }
                ?>
            </div>
        </header>
        <footer id="contact" class="row-center">
                <div class="footerInfo column-start">
                    <h2 class="pt-5">Available for select <br>freelance opportunities</h2>
                    <p class="pl-3">Have an exciting project you need<br>help with?<br>Send me an email or contact me via<br>instant message!</p>
                    <div class="rrss column-start pb-5 pl-2">
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
                <div class="footerContact column-center">
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
            </footer>
            <script src="js/script.js"></script>
            <script src="https://kit.fontawesome.com/b55cd54a84.js" crossorigin="anonymous"></script>
        </div>
    </div>
    <div id="not-available" class="column-center">
        <h1>Display not available</h1>
        <p>Sorry, this page is not available for devices of this size, please try on a slightly larger device.</p>    
    </div>
</body>
</html>
