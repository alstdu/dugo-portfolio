<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/homepageStyles.css">
</head>
<body>
    <header>
        <nav>
            <img class="logo" src="./assets/images/logo.svg">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="#mySkills">My Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="./about.php">About Me</a></li>
            </ul>
        </nav>
    </header>
    <section id="home">
        <div id="canvasTextContainer" class="glass-effect">
            <h2 class="home-header"><span>Hi! I'm Lexi Dugo</span></h2>
            <p class="home-header-subtext">A Front End Dev and New Media Designer</p>
        </div>
    <!-- <canvas id="canvas3d"></canvas> -->
    <!-- <div class="circle-container">
        <div class="circle orange-circle1">
        </div>
        <div class="circle aqua-circle">
        </div>
        <div class="circle orange-circle2">
        </div>
    </div> -->
        <div class="gradient-border">
            <div class="page-scroll-button"><a href="#projects">Explore</a></div>
        </div>
    </section>
    <section id="projects">
        <h2>Projects</h2>
        <div id="dndSection">
            <img src="./assets/images/dndtools-preview.svg" alt="preview of D&D Tools Project">
            <h3>D&D Tools</h3>
            <p>A collection of D&D tools including a spells table, a point buy calculator and a 3D dice roller. Created using HTML, CSS, JS & packaged with Webpack.
            <br>
            <span class="arrow-icon">&#8594;</span> <a href="">Check It Out</a>
            </p>
        </div>
        <div id="ilogSection">
            <img src="./assets/images/ilog-preview.svg" alt="preview of ILOG ELD Project">
            <h3>ILog ELD</h3>
            <p>ILog ELD is an HOS (hours of service) ELD (electronic logging device) for owner operators. It features the ability to add, edit, and certify logs.
            <br>
            <span class="arrow-icon">&#8594;</span> <a href="">Check It Out</a>
            </p>
        </div>
        <div id="onlineTarotSection">
            <img src="./assets/images/onlinetarot-preview.svg" alt="preview of Online Tarot Card Project">
            <h3>Online Tarot</h3>
            <p>An online tarot card picker that allows you to do one, two, and three card spreads. It features a deck that I created myself, and shows keywords for each.
            <br>
            <span class="arrow-icon">&#8594;</span> <a href="">Check It Out</a>
            </p>
        </div>
        <div id="ffdSection">
            <img src="./assets/images/ffdc-preview.svg" alt="preview of Furry Friends Daycare project">
            <h3>Furry Friends Daycare</h3>
            <p>Furry Friends Daycare is a fictional pet sitting business. Our job was to create the brand, create the wireframes, and develop the website using the Agile Methodology.
            <br>
            <span class="arrow-icon">&#8594;</span> <a href="">Check It Out</a>
            </p>
        </div>
        <div class="gradient-border">
            <div class="page-scroll-button"><a href="#mySkills">My Skills</a></div>
        </div>
    </section>
    <section id="mySkills">
        <h2>Skills</h2>
    </section>
    <script type="module" src="./dist/scripts.bundle.js"></script>
</body>
</html>
