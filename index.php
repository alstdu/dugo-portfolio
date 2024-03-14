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
    <div class="circle orange-circle1">
    </div>
    <div class="circle aqua-circle">
    </div>
    <div class="circle orange-circle2">
    </div>
    <div class="gradient-border">
        <div class="page-scroll-button"><a href="#projects">Explore</a></div>
    </div>
    </section>
    <section id="projects">
    <h2>My Projects</h2>
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
