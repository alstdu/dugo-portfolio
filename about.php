<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <?php include_once("menu.html"); ?>
    </header>
    <div class="content-wrapper">
        <div class="desktop">
            <img class="portrait" src="./assets/images/BCIT DT-10.png">
            <main class='glass-effect'>
                <div class='about-me'>
                <h1>About Me</h1>
                    <p>School: British Colombia Institute of Technology - New Media Design and Web Development</p>
                    <p>Location: New Westminster, BC</p>
                    <p>Hobbies: Video Games, Yoga, Running my bubble tea Instagram page</p>
                    <p>D&D Homebrew: Dryad</p>
                    <p>Languages: English - Native | French - Beginner | Mandarin - Beginner</p>
                </div>
                <div class="lets-connect">
                    <h2>Let's Connect</h2>
                    <div class="connect-columns">
                        <div class="social-icons">
                            <img src="./assets/images/linkedinlogo.svg">
                            <img src="./assets/images/instagramlogo.svg">
                            <img src="./assets/images/githublogo.svg">
                        </div>
                        <div class="handles">
                            <p><a href="https://linkedin.com/in/lexidugo" target="_blank">Lexi Dugo</a></p>
                            <p><a href="https://instagram.com/lexidugo" target="_blank">lexidugo</a></p>
                            <p><a href="https://github.com/alstdu" target="_blank">alstdu</a></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="resume">
            <p>Think I'd be a good fit for you or a friend? Download my resume!</p>
            <button class="download-button" id="downloadButton"><a href="https://profile.indeed.com/p/alexisd-fdpr3c4" target="_blank">Download</a></button>
        </div>
    </div>
    <script src="./scripts/scripts.js"></script>
    <script src="./scripts/print.js"></script>
</body>
</html>
