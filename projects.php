<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tatia.me | Projects</title>
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
                    <a href="./projects.php" class="menu-option selected hover-top menu-bg">Projects</a>
                    <a href="./about.php" class="menu-option hover-top menu-bg">About</a>
                    <a href="./contact.php" class="menu-option hover-top menu-bg">Contact</a>
                </div>
                <a href="javascript:void(0);" class="menu-icon-container flex-center" onclick="open_menu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div id="my-links">
                <a href="./" class="ham-menu-option hover-right menu-bg">Home</a>
                <a href="./projects.php" class="ham-menu-option selected hover-right menu-bg">Projects</a>
                <a href="./about.php" class="ham-menu-option hover-right menu-bg">About</a>
                <a href="./contact.php" class="ham-menu-option hover-right menu-bg">Contact</a>
            </div>
        </header>
        <div class="body-container">
            <div class="all-projects-container">
                <div class="proj-container">
                    <div class="proj-img-container">
                        <img src="./img/moosic.png" class="proj-img" alt="">
                    </div>
                    <div class="proj-info-container">
                        <div class="proj-name flex-left">Moosic Bot</div>
                        <div class="proj-description">
                            A website for you to download songs from youtube for free.
                            <br><br>Main Features:
                            <ul style="margin:5px;">
                                <li>Huge Database</li>> The server fetches videos from youtube, so if the song is on youtube, it can be downloaded.
                                <li>Speed</li>> The bot is extremely fast, and can download songs within seconds upon input.
                                <li>Multiple downloads</li>> The program can perform several downloads at the same time (this increases completion time however).
                                <li>Consistent format</li>> All songs are directly fetched from youtube and converted into mp3 format.
                            </ul>
                        </div>
                        <div class="proj-links-container">
                            <a target="_blank" href="https://github.com/tatiaris/Moosic" class="proj-link github-link">Github</a>
                            <a target="_blank" href="https://moosic-bot.glitch.me/" class="proj-link live-link">Live Demo</a>
                            <a href="#" class="proj-link download-link">Download</a>
                        </div>
                    </div>
                    <div class="proj-tags-container flex-center">
                        <div class="proj-tag-list">
                            <div class="proj-tag nodejs-tag">Node.js</div>
                            <div class="proj-tag nodejs-tag">Axios</div>
                            <div class="proj-tag nodejs-tag">Cheerio</div>
                            <div class="proj-tag nodejs-tag">Fs</div>
                            <div class="proj-tag nodejs-tag">YT-mp3</div>
                        </div>
                    </div>
                </div>
                <div class="proj-container">
                    <div class="proj-img-container">
                        <img src="./img/apples-to-apples.png" class="proj-img" alt="">
                    </div>
                    <div class="proj-info-container">
                        <div class="proj-name flex-left">Apples-to-Apples Card Game</div>
                        <div class="proj-description">
                            An Apples-to-Apples card game simulator for people to play online.
                            <br><br>Main Features:
                            <ul style="margin:5px;">
                                <li>Custom Cards</li>> Ability to add custom prompts and answers to the database for future use.
                                <li>Clean Design</li>> A minimal and intuitive user interface for a great user experience.
                                <li>Game Log</li>> Log of all events that have occured in the game so one does not miss anything.
                                <li>Leaderboard</li>> Keeps track of each players score live.
                                <li>Custom Name</li>> Players can customize their names for ease of recognition.
                            </ul>
                        </div>
                        <div class="proj-links-container">
                            <a target="_blank" href="https://github.com/tatiaris/apples-to-apples" class="proj-link github-link">Github</a>
                            <a target="_blank" href="https://cah-online.glitch.me/" class="proj-link live-link">Live Demo</a>
                            <a href="#" class="proj-link download-link">Download</a>
                        </div>
                    </div>
                    <div class="proj-tags-container flex-center">
                        <div class="proj-tag-list">
                            <div class="proj-tag nodejs-tag">Node.js</div>
                            <div class="proj-tag nodejs-tag">Socket.io</div>
                            <div class="proj-tag nodejs-tag">Express</div>
                            <div class="proj-tag nodejs-tag">Http</div>
                            <div class="proj-tag nodejs-tag">JQuery</div>
                        </div>
                    </div>
                </div>
                <div class="proj-container">
                    <div class="proj-img-container">
                        <img src="./img/zotak.png" class="proj-img" alt="">
                    </div>
                    <div class="proj-info-container">
                        <div class="proj-name flex-left">Zotak Discord Bot</div>
                        <div class="proj-description">
                            A multi-purpose Discord bot that performs a variety tasks based on user inputs.
                            <br><br>Main Features:
                            <ul style="margin:5px;">
                                <li>Text Predictor</li>> Submit text and get AI generated follow up text for it (uses <a href="https://talktotransformer.com/" style="color:blue;" target="_blank">talktotransformer</a>).
                                <li>Meme Creator</li>> Given an image and text, generates a meme/comic by using the two appropriately.
                                <li>Image Searcher</li>> Performs an image search using the input and returns the first result.
                                <li>Comic Generator</li>> Sends a random comic scraped from several different websites.
                                <li>Magic 8 Ball</li>> If asked a question, answers with a magic 8 ball (and custom) answer.
                            </ul>
                        </div>
                        <div class="proj-links-container">
                            <a target="_blank" href="https://github.com/tatiaris/Zotak" class="proj-link github-link">Github</a>
                            <a target="_blank" href="https://discordapp.com/oauth2/authorize?client_id=702314809357762591&permissions=0&scope=bot" class="proj-link live-link">Live Demo</a>
                            <a target="_blank" href="#" class="proj-link download-link">Download</a>
                        </div>
                    </div>
                    <div class="proj-tags-container flex-center">
                        <div class="proj-tag-list">
                            <div class="proj-tag nodejs-tag">Node.js</div>
                            <div class="proj-tag nodejs-tag">Discord.js</div>
                            <div class="proj-tag nodejs-tag">Fs</div>
                            <div class="proj-tag nodejs-tag">Puppeteer</div>
                            <div class="proj-tag nodejs-tag">JQuery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/main.js"></script>
    </body>
</html>
