<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tatia.me | About</title>
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
                    <a href="./about.php" class="menu-option selected hover-top menu-bg">About</a>
                    <a href="./contact.php" class="menu-option hover-top menu-bg">Contact</a>
                </div>
                <a href="javascript:void(0);" class="menu-icon-container flex-center" onclick="open_menu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div id="my-links">
                <a href="./" class="ham-menu-option hover-right menu-bg">Home</a>
                <a href="./projects.php" class="ham-menu-option hover-right menu-bg">Projects</a>
                <a href="./about.php" class="ham-menu-option selected hover-right menu-bg">About</a>
                <a href="./contact.php" class="ham-menu-option hover-right menu-bg">Contact</a>
            </div>
        </header>
        <div class="page-container">
            <div class="about-container">
                <div class="about-me-text-container">
                    <div class="title-container flex-left">
                        Hello,
                    </div>
                    <div class="about-me">
                        My name's Rishabh. I am a Junior at <a href="https://www.tamu.edu" style="color:maroon;" target="_blank">Texas A&M University</a> studying Computer Science. Here's a little bit about me!
                        <ul class="bullets-container">
                            <li class="bullet">I was born in <a style="color:green;" target="_blank" href="https://www.google.com/maps/place/Gwalior,+Madhya+Pradesh,+India/@28.7853139,59.1335284,3.83z/data=!4m5!3m4!1s0x3976c5d1792291fb:0xff4fb56d65bc3adf!8m2!3d26.2195191!4d78.1842041">Gwalior, India.</a></li>
                            <li class="bullet">I've been living in the US for over 7 years.</li>
                            <li class="bullet">I am currently a part-time web developer for <a href="https://acelab.tamu.edu" target="_blank" style="color:maroon;">ACELAB</a>.</li>
                            <li class="bullet">I have been programming since my freshman year of high school.</li>
                            <li class="bullet">I am on the <span style="color:maroon;">A&M Racquetball</span> inter-collegiate team.</li>
                            <li class="bullet">I LOVE innovating and creating new software.</li>
                            <li class="bullet">One of my goals in life is to share my knowledge of computer science with as many people as possible.</li>
                            <li class="bullet">My ideal world would be one where all essential human activities are automated by robots and humans are free to do whatever they want!</li>
                        </ul>
                        <span class="end-note">(Scroll through more of my interests <span class="direction"></span>)<br><br></span>
                    </div>
                </div>
                <div class="my-interests-container">
                    <div class="interest flex-center" style="background-color: #8be88b;">Hiking</div>
                    <div class="interest flex-center" style="background-color: #f96c6c;">Ping Pong</div>
                    <div class="interest flex-center" style="background-color: #fffd83;">Pool</div>
                    <div class="interest flex-center" style="background-color: #ecebeb;">Board Games</div>
                    <div class="interest flex-center" style="background-color: #ac73f0;">Magic</div>
                    <div class="interest flex-center" style="background-color: #b1ecec;">FIFA</div>
                    <div class="interest flex-center" style="background-color: #f0c473;">Rocket League</div>
                    <div class="interest flex-center" style="background-color: #f07373;">Warzone</div>
                </div>
            </div>
        </div>
        <script src="./js/main.js"></script>
    </body>
</html>
