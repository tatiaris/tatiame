<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tatia.me | Contact</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/style_mobile.css">
        <link rel="stylesheet" href="./css/style_tablet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="flex-center nav-bar-container">
                <div class="name-container">
                    <div class="first-name">Rishabh</div>
                    <div class="last-name">Tatia</div>
                </div>
                <div class="menu-container">
                    <a href="./" class="menu-option hover-top menu-bg">Home</a>
                    <a href="./projects.php" class="menu-option hover-top menu-bg">Projects</a>
                    <a href="./about.php" class="menu-option hover-top menu-bg">About</a>
                    <a href="./contact.php" class="menu-option selected hover-top menu-bg">Contact</a>
                </div>
                <a href="javascript:void(0);" class="menu-icon-container flex-center" onclick="open_menu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div id="my-links">
                <a href="./" class="ham-menu-option hover-right menu-bg">Home</a>
                <a href="./projects.php" class="ham-menu-option hover-right menu-bg">Projects</a>
                <a href="./about.php" class="ham-menu-option hover-right menu-bg">About</a>
                <a href="./contact.php" class="ham-menu-option selected hover-right menu-bg">Contact</a>
            </div>
        </header>
        <div class="page-container">
            <div class="contact-container">
                <div class="contact-title-container flex-left">Contact Me</div>
                <div class="contact-info-form-container">
                    <div class="contact-info-container">
                        Feel free to contact me using this form or any of my linked social media. I will respond as soon as I can!
                        <div class="social-links-container">
                            <div class="social-link-box-top">
                                <a href="https://www.linkedin.com/in/rishabh-tatia-164bb5170/" class="social-link linkedin-link">LINKEDIN</a>
                                <a href="https://www.instagram.com/tat.ris/" class="social-link instagram-link">INSTAGRAM</a>
                            </div>
                            <div class="social-link-box-bot">
                                <a href="https://twitter.com/Rishabh77022392" class="social-link twitter-link">TWITTER</a>
                                <a href="mailto:tatiaris@gmail.com?Subject=Hello!" class="social-link email-link">EMAIL</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-container">
                        <form class="contact-form" action="./mail.php" method="post">
                            <input type="text" name="name" value="" placeholder="Your Name"><br>
                            <input type="text" name="email" value="" placeholder="Your Email"><br>
                            <textarea type="text" name="message" value="" placeholder="Enter message..."></textarea><br>
                            <input class="submit-btn" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/main.js"></script>
    </body>
</html>
