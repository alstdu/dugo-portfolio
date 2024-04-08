<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarot Cards Online Project</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
    <?php include_once("backtoprojects.html"); ?>
    </header>
    <div class="artifact-keywords-container">
        <div class="artifact-keywords">CSS</div>
        <div class="artifact-keywords">JS Plugins</div>
        <div class="artifact-keywords">APIs</div>
    </div>
    <h1>Online Tarot</h1>
    <img src="">
    <div class="glass-effect artifact-stats">
        <p><span class="artifact-stats-headers">Time:</span>~ 32 Hours</p>
        <p><span class="artifact-stats-headers">Languages:</span>HTML, CSS, JS</p>
        <p><span class="artifact-stats-headers">Skills:</span>Learning to Implement JS Plugins, Reading Documentation, Async Functions, JS Loops, APIs, CSS Animation, Table Accessibility, JSON, WebPack</p>
    </div>
    <div class="glass-effect artifact-process">
        <h2>Process</h2>
        <p>I knew immediately I wanted to create a set of D&D tools after looking at Chicken Dinner (another dnd tool site) and thinking that I could create something similar and more interactive. I wanted to stick to an accessible and simple design that anyone could use no matter the device. Since this was for an assignment, I needed 3 pages. So, I decided to make a spells list and then try a 3D dice roll page. I originally wanted to do a spell planning page, but using 3D in projects has always interested me, so I wanted to give it a shot.</p>
        <figure>
            <img src="">
            <figcaption>To see this page, <a>tap here</a></figcaption>
        </figure>
        <p>The point buy page was inspired by Chicken Dinner layout, but I added a bit more interactivity to the overall look with the gradient background. It changes when you begin adding points, when you reach the limit, and if you go over the limit. I love playing with the use of color in my projects, so I thought this would be a great integration.</p>
        <figure>
            <img src="">
            <figcaption>To see this page, <a>tap here</a></figcaption>
        </figure>
        <p>The spells list for me was where the bulk of my plugins were. The list.js plugin was a little poorly documented in my opinion, so it was a bit difficult to use and figure out at first. However, after figuring out how to use it, it made managing the search and filtering features easier. This table pulls from a D&D api to fill in the data for each spell. I used Granim again to assign a set of color gradients for each spell school that would activate on hover, focus and click. You can also tab through the list for accessibility.</p>
        <figure>
            <img src="">
            <figcaption>To see this page, <a>tap here</a></figcaption>
        </figure>
    </div>
    <div class="glass-effect artifact-challenges">
        <h2>Challenges & Solutions</h2>
        <p>This project was started with desktop in mind, so I had to go back in and optimize it for mobile as well. This could have been a lot easier had I designed it for mobile from the start. Afterall, it's 2024. Additionally, the API is a bit slow so it takes a while to load initially at times. Whatever the case, enjoy the cool loading animation.</p>
        <figure>
            <img src="">
            <figcaption></figcaption>
        </figure>
        <p>The Dice Roller part was challenging for me. There were a lot of JavaScript tools I had to figure out and hadn’t had much practice with. querySelectorAll was confusing me when using it on a Node List, so I spent a lot of time looking up documentation for that and how to properly target the container and the items inside to make it work for my forEach loop. Eventually, I figured it out after asking for help and reading up on ways to target those elements properly (and an equal amount of console logging everything I possibly could).</p>
    </div>
    <div class="glass-effect artifact-extras">
        <h2>Post-Coutse Additions</h2>
        <p>After the course was completed, I added the ability to roll multiple dice and have it add up the totals from all of the dice rolled. I still want to implement the ability to roll multiple types of dice instead of just multiple of the same kind, as well as the ability to roll with advantage and disadvantage.</p>
        <figure>
                <img src="">
                <figcaption></figcaption>
        </figure>
    </div>
    <div class="artifact-buttons-container">
        <button class="artifact-buttons"><a href="https://github.com/alstdu/dugo-dnd-tools" target="_blank">View Code</a></button>
        <button class="artifact-buttons"><a href="https://dndtools.lexidugo.com" target="_blank">Live Site</a></button>
    </div>
</body>
</html>
