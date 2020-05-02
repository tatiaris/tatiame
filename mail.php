<?
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tatia.me | Confirmation</title>
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
            <div class="confirmation-msg-container">
                <div class="confirmation-msg">
                    Thank you for reaching out to me, <?echo $name?>! I will get back to you as soon as possible!
                </div>
            </div>
        </div>
        <script src="./js/main.js"></script>
    </body>
</html>
