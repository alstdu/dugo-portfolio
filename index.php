<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/homepageStyles.css">
    <link rel="stylesheet" href="./css/backtotop.css">
</head>
<body>
    <div class="circle-container">
        <div class="circle orange-circle1"></div>
        <div class="circle aqua-circle"></div>
        <div class="circle orange-circle2"></div>
    </div>
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
            <h2 class="home-header"><span>Hi, I'm Lexi!</span></h2>
            <p class="home-header-subtext">A <span class="highlight">Front End Dev</span> and <span class="highlight">New Media Designer</span></p>
            <p class="home-header-mini-text">Who will take any opportunity to buy bubble tea</p>
            <div class="indicator"></div>
        </div>
    </section>
    <section id="projects">
        <!-- <div class="canvas-container">

        </div> -->
        <h2>Projects</h2>
        <div class="projects-layout-container">
            <div id="dndSection">
                <img class="dndtools-preview project-preview" src="./assets/images/dndtools-preview.svg" alt="preview of D&D Tools Project">
                <h3>D&D Tools</h3>
                <p>A collection of D&D tools including a spells table, a point buy calculator and a 3D dice roller. Created using HTML, CSS, JS & packaged with Webpack.
                <br>
                <span class="arrow-icon-dndtools">&#8594; <a href="">Check It Out</a></span>
                </p>
            </div>
            <div id="ilogSection">
                <img class="ilog-preview project-preview" src="./assets/images/ilog-preview.svg" alt="preview of ILOG ELD Project">
                <h3>ILog ELD</h3>
                <p>ILog ELD is an HOS (hours of service) ELD (electronic logging device) for owner operators. It features the ability to add, edit, and certify logs.
                <br>
                <span class="arrow-icon-ilog">&#8594; <a href="./ilogDetailed.php">Check It Out</a></span> 
                </p>
            </div>
            <div id="onlineTarotSection">
                <img class="onlinetarot-preview project-preview" src="./assets/images/onlinetarot-preview.svg" alt="preview of Online Tarot Card Project">
                <h3>Online Tarot</h3>
                <p>An online tarot card picker that allows you to do one, two, and three card spreads. It features a deck that I created myself, and shows keywords for each.
                <br>
                <span class="arrow-icon-onlinetarot">&#8594; <a href="./tarotCardsDetailed.php">Check It Out</a></span> 
                </p>
            </div>
            <div id="ffdSection">
                <img href="./ffdcDetailed.php" class="ffdc-preview project-preview" src="./assets/images/ffdc-preview.svg" alt="preview of Furry Friends Daycare project">
                <h3>Furry Friends Daycare</h3>
                <p>Furry Friends Daycare is a fictional pet sitting business. Our job was to create the brand, create the wireframes, and develop the website using the Agile Methodology.
                <br>
                <span class="arrow-icon-ffdc">&#8594; <a href="./ffdcDetailed.php">Check It Out</a></span>
                </p>
            </div>
        </div>
    </section>
    <section id="mySkills">
        <div class="canvas-container">
            <canvas id="canvas3d" aria-label="My Skills"></canvas>
        </div>
        <div class="glass-effect skills-list">
            <h3>Development</h3>
            <p>HTML, CSS, JavaScript, JQuery, PHP, MySQL, GitHub, Webpack, QA, Android Studio</p>
            <h3>New Media</h3>
            <p>Photoshop, Illustrator, Figma, Social Media Networking & Marketing, SEO, Content Creation, Adobe InDesign, Adobe Dimension, Adobe Aero, Adobe After Effects</p>
            <h3>UX/UI</h3>
            <p>User Testing, Figma Prototyping, User Flow, Wireframing, Empathy Mapping, Usability Testing, User Experience Research</p>
            <h3>Project Management</h3> 
            <p>Team leadership, waterfall, agile, user stories, Trello, Time Management</p>
        </div>
    </section>
    <div class="social-sidebar">
        <a href="https://www.linkedin.com/in/lexidugo/" target="_blank" class="social-icon glass-effect">LinkedIn</a>
        <a href="https://github.com/alstdu" target="_blank" class="social-icon glass-effect">GitHub</a>
        <a href="https://instagram.com/lexidugo" target="_blank" class="social-icon glass-effect">Instagram</a>
        <a href="mailto:lexidugo@gmail.com" target="_blank" class="social-icon glass-effect">Email</a>
    </div>
    <?php include_once("backtothetop.html"); ?>
    <script type="module" src="./dist/scripts.bundle.js"></script>
</body>
</html>
