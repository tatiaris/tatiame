<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tatia.me | Home</title>
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
                    <a href="./" class="menu-option selected hover-top menu-bg">Home</a>
                    <a href="./projects.php" class="menu-option hover-top menu-bg">Projects</a>
                    <a href="./about.php" class="menu-option hover-top menu-bg">About</a>
                    <a href="./contact.php" class="menu-option hover-top menu-bg">Contact</a>
                </div>
                <a href="javascript:void(0);" class="menu-icon-container flex-center" onclick="open_menu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div id="my-links">
                <a href="./" class="ham-menu-option selected hover-right menu-bg">Home</a>
                <a href="./projects.php" class="ham-menu-option hover-right menu-bg">Projects</a>
                <a href="./about.php" class="ham-menu-option hover-right menu-bg">About</a>
                <a href="./contact.php" class="ham-menu-option hover-right menu-bg">Contact</a>
            </div>
        </header>
        <div class="sections-container">
            <a href="./projects.php" class="major-section darkest hover-top hover-bg">PROJECTS</a>
            <a href="./about.php" class="major-section dark hover-top hover-bg">ABOUT</a>
            <a href="./contact.php" class="major-section light hover-top hover-bg">CONTACT</a>
            <div class="links-section-container lightest">
                <div class="links-section">
                    <a href="https://github.com/tatiaris" class="link hover-right github">GITHUB</a>
                    <a href="https://www.linkedin.com/in/rishabh-tatia-164bb5170/" class="link hover-right linkedin">LINKEDIN</a>
                    <a href="https://tatia.me/resume.pdf" class="link hover-right resume">RESUME</a>
                    <a href="https://open.kattis.com/users/rishabh-tatia" class="link hover-right kattis">KATTIS</a>
                    <a href="https://www.instagram.com/tat.ris/" class="link hover-right insta">INSTAGRAM</a>
                </div>
            </div>
        </div>
        <script src="./js/main.js"></script>
    </body>
</html>
