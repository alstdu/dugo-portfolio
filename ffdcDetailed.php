<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furry Friends Daycare Project</title>
    <link rel="stylesheet" href="./css/backtoprojects.css">
    <link rel="stylesheet" href="./css/backtotop.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/projectDetailed.css">
</head>
<body>
    <header>
    <?php include_once("backtoprojects.html"); ?>
    </header>
    <div class="artifact-keywords-container">
        <div class="gradient-border">
            <div class="artifact-keywords">CSS</div>
        </div>
        <div class="gradient-border">
            <div class="artifact-keywords">SEO</div>
        </div>
        <div class="gradient-border">
            <div class="artifact-keywords">Accessibility</div>
        </div>
    </div>
    <div class="artifact-header">
        <div class="artifact-image-title">
            <h1>Furry Friends Daycare</h1>
            <img src="./assets/images/ffdc-preview.svg">
        </div>
        <div class="glass-effect artifact-stats">
            <p><span class="artifact-stats-headers">Time:</span> ~17 Hours (my contribution)</p>
            <p><span class="artifact-stats-headers">Languages:</span> HTML, CSS, JS</p>
            <p><span class="artifact-stats-headers">Skills:</span> Scrum Methodology, Accessible Design, GitHub Collaboration, Designing from a Wireframe, SEO Markup</p>
            <p><span class="artifact-stats-headers">Contributors:</span><span class="contributors"> Manh Ellis</span> (Copywriter & Development Assistant), <span class="contributors">Kimia Ashrafi</span> (Social Icons & Product Owner), <span class="contributors">Myta Palo</span> (Branding), <span class="contributors">Stella Park</span> (Scrum Master & UX/UI)</p>
        </div>
    </div>
    <h2>Process</h2>
    <div class="glass-effect section artifact-section artifact-process">
        <p>For my project management course, we were tasked with coming up with a fictional business and creating branding, wireframes, and a website using the scrum methodology.  The whole project was done using a 5 week sprint structure. I created the template for our All In One Google Sheet which included time logs, our backlog, sprints, and burndown charts.</p>
        <figure>
            <img src="./assets/images/artifact-photos/ffdc-1.png">
            <figcaption>To see this page, <a href="https://docs.google.com/spreadsheets/d/1O8CvXmbhbtlzrKtNar9PQUufsr2qIEz_kxThoAKuRlo/edit?usp=sharing">tap here</a></figcaption>
        </figure>
        <p>We started by creating user stories and prioritizing those tasks in our backlog and weekly sprints.</p>
        <figure>
            <img src="./assets/images/artifact-photos/ffdc-2.png">
            <figcaption>To see this page, <a href="https://docs.google.com/spreadsheets/d/1O8CvXmbhbtlzrKtNar9PQUufsr2qIEz_kxThoAKuRlo/edit?usp=sharing">tap here</a></figcaption>
        </figure>
        <p>Development started in sprint 2, and in sprint 3 my teammate Manh helped with code reviews and creating the contact page. We learned about merging and pull requests and had some practice reviewing and managing branches.</p>
        <figure>
            <img src="./assets/images/artifact-photos/ffdc-3.png">
            <figcaption>A bit of pull request history</figcaption>
        </figure>
    </div>
    <h2>Challenges & Solutions</h2>
    <div class="glass-effect section artifact-section artifact-challenges">
        <p>Most of the challenges I encountered were related to making certain elements accessible. This was the first project in which I took a deep dive into accessible elements.</p>
        <p>I used many resources to help guide decision making such as <a href="https://www.aditus.io/patterns/accordion/">Aditus’ guide on accessible accordion menus</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset%2520https:_developer.mozilla.org/en-US/docs/Web/HTML/Element/form">MDN’s documentation</a> on forms and inputs, and multiple sources for how to style radio buttons without the checkbox.</p>
        <figure class="figure-row-span">
            <img src="./assets/images/artifact-photos/ffdc-4.png">
            <figcaption>Accessible Accordion Menu</figcaption>
        </figure>
        <p>You can check out <a href="https://github.com/alstdu/FurryFriendsDaycare">my GitHub repo’s</a> README to see more sources.</p>
    </div>
    <h2>Post-Course Additions</h2>
    <div class="glass-effect section artifact-section artifact-extras">
        <p>After the course was completed, I added some SEO markup to the HTML to practice implementing structured data markup and metadata.</p>
        <figure class="figure-row-span">
                <img src="./assets/images/artifact-photos/ffdc-5.png">
                <figcaption>Structured Data Markup</figcaption>
        </figure>
        <p>Our New Media Marketing class taught us about the importance of SEO and how crawlers search webpages for different types of data. We also learned how to make a marketing plan from start to finish.</p>
    </div>
    <div class="artifact-buttons-container">
        <button class="artifact-buttons"><a href="https://docs.google.com/spreadsheets/d/1O8CvXmbhbtlzrKtNar9PQUufsr2qIEz_kxThoAKuRlo/edit?usp=sharing" target="_blank">Sheets</a></button>
        <button class="artifact-buttons"><a href="https://github.com/alstdu/FurryFriendsDaycare" target="_blank">View Code</a></button>
        <button class="artifact-buttons"><a href="https://furryfriendsdaycare.lexidugo.com" target="_blank">Live Site</a></button>
    </div>
    <?php include_once("backtothetop.html"); ?>
    <script src="./scripts/projectDetailed.js"></script>
</body>
</html>
