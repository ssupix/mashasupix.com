<!DOCTYPE html>
<html lang="en" class="lenis">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_sass/style.css">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>


    <!-- Include Highlight.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">  
    
    <!-- Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- Metadata -->
    <meta name="description" content=" Project: The Blue - Water Website.Visual experiences that showcases usage of Vanilla JavaScript, JS Plugins and Libraries for a good cause. Built with HTML, CSS, JavaScript." ">
    <meta name="keywords" content="Masha Supikhanova, Web Developer, Portfolio, Front-end Developer, Product Designer, Vancouver>
    <meta property="og:url" content="https://mashasupix.com/projects/theblue" />
    <meta property="og:title" content="mariasupix - the blue" />
    <meta property="og:description" content="Visual experiences that showcases usage of Vanilla JavaScript, JS Plugins and Libraries for a good cause" />
    <meta property="og:image" content="https://mashasupix.com/assets/img/posters/theblue-poster.png" />
    <meta property="og:type" content="website" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://mashasupix.com/projects/theblue">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <title>mariasupix - the blue</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.svg">
    <link rel="apple-touch-icon" href="../assets/img/logo.svg" />
</head>
<body>
    
    <?php include '../components/nav-project.php'; ?>

    <div id="cursor-follower">
        <span class="cursor-text"></span>
    </div>

    <main class="ezt" >
        <section class="title">
            <div class="grid">
                <div class="col-12">
                    <h2>the blue - water website</h2>
                </div>
                <div class="col-12">
                    <div class="tags">
                        <div class="pill-blue">html</div>
                        <div class="pill-blue">css</div>
                        <div class="pill-blue">javascript</div>
                        <div class="pill-pink">we design</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="project-container">
            <section class="project-banner">
                <video src="../assets/video/theblue.mp4" poster="../assets/img/posters/theblue-poster.png" autoplay muted looped></video>
            </section>
            <section class="description">
                <div class="grid">
                <div class="col-12">
                    <h4>an interactive visual experience designed to raise awareness around water pollution, created as an experiment to explore how far I can take your experience on my websites.</h4>
                </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="col-12 button-wrap">
                        <a class="button live" href="https://water.mashasupix.com/index.html" target="_blank">VIEW LIVE</a>
                        <a class="button code" href="https://github.com/ssupix/water-website" target="_blank">VIEW CODE</a>
                    </div>
                </div>
            </section>
            <section class="details">
                <div class="grid">
                    <div class="col-12 col-6-md detail border">
                        <h3>Input</h3>
                        <p>Masha Supikhanova – Creative developer <br> Airrick Dunfield  –  Mentor, front-end developer <br> Jayden Inniss  –  Photographer</p>
                        <h3>Total Hours</h3>
                        <p>30</p>
                    </div>
                    <div class="col-12 col-6-md detail">
                        <h3>Design Tools</h3>
                        <p>Photoshop, <br> Figma</p>
                        <h3>Developer Stack</h3>
                        <p>HTML, CSS, <br> JavaScript, jquery</p>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg ">
                        <q>My very personal thoughts and concerns, interpreted for a good cause, though art online.</q>
                        <p>I want to inspire hope and motivate action to combat the issue, by showcasing the beauty of water through interactive elements.</p>
                    </div>
                    <div class="visual col-12 col-8-lg ">
                        <p>This site was made as a term project for BCIT’s Web Scripting 1 course, as a part of the New Media Design & Web Development program to showcase usage of Vanilla JavaScript, JS Plugins and Libraries and my skills with CDN and NPM implementation.</p>
                        <video loop muted autoplay poster="../assets/img/imac-theblue-poster.png" title="The Blue Website Showcase">
                            <source src="../assets/video/imac-theblue.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </section>
            <section class="getting-started">
                <div class="grid showcase">
                    <div class="col-12 col-8-lg">
                        <img src="../assets/img/theblue/waterstart.png" alt="Figma Prototype Water Website">
                    </div>
                    <div class="col-12 col-7-md col-4-lg co sp">
                        <div class="text-wrap">
                            <p> I started by creating rough designs in figma. Design wasn't the focus of this project, but it was important to me personally. It helps me find better solutions when i see something cool looking on screen. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="process">
                <div class="grid">
                    <div class="col-12 col-7-lg sp"> 
                        <h2>using gsap.</h2>
                        <p>This website has interesting interactions and animation, that were made using GSAP.</p>
                        <p>I found out that GSAP is great at handling wide variety or animation with minimum code. By adding CDN link and a couple of additional HTML classes you get all control you need for quick and easy animating.</p>
                    </div>
                    <div class="col-12">
                        <h4>code snipets:</h4>
                        <div class="code-show">
                            <div class="select">
                                <span>drag and drop</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/dragdrop.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span>scroll trigger</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/scrolltrigger.php'; ?>
                            </ul>
                        </div>
                        <div class="code-show">
                            <div class="select">
                                <span>running line</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/runningline.php'; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-6-lg si">
                        <img src="../assets/img/theblue/npminstall.png" alt="Installing Plugins with NPM">
                    </div>
                    <div class="col-12 col-6-lg sp"> 
                        <h2>npm install.</h2>
                        <p>Other than GSAP I explored other possibilities with Node Package Manager, used through VS Code Terminal.</p>
                        <p>To begin, I initialized my project with npm, creating a package.json file to manage project dependencies and scripts. I installed these packages using the following command: npm install “library”. </p>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-12 col-6-lg sp"> 
                        <h2>scroll reveal.</h2>
                        <p>One noteworthy find was the AOS (Animate On Scroll) library, which provides a minimalist approach to animating sections upon scroll. This library stood out due to its ease of use and minimal code requirements, making it an excellent choice for enhancing the user experience in my project.</p>
                    </div>
                    <div class="col-12 col-6-lg sp">
                        <video loop muted autoplay poster="../assets/img/scroll-theblue-poster.jpg" title="The Blue Website Showcase">
                            <source src="../assets/video/scroll-theblue.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                    </div>
                    <div class="col-12">
                        <h4>code snipets:</h4>
                        <div class="code-show">
                            <div class="select">
                                <span>scroll reveal</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="code">
                                <?php include '../components/scrollreveal.php'; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-7-sm">
                        <p>During development I turned my “I don’t know how to make it” into “Let me see if can make it” in a span of two weeks. I explored a lot of YouTube tutorials, Code Pen demos, even opened a paper book
                            and read through a lot of documentation. It really got me thinking how sharing and caring dev community is, because the amount of free
                            knowledge I received is borderline illegal.</p>
                    </div>
                </div>
                <div class="grid showcase">
                    <div class="col-12 col-8-lg outline">
                        <img src="../assets/img/theblue/3js.png" alt="3js demo">
                    </div>
                    <div class="col-12 col-7-md col-4-lg co sp">
                        <div class="text-wrap">
                            <p>One of the biggest challenges I took on was implementing 3D scene, using Three.js Library. </p>
                            <p>But with help of caring dev community online I was able to add this simple, but such effective water model.</p>
                        </div>
                        <p>Accompanied by SoundCloud API widget, with custom water songs playlist.</p>
                    </div>
                </div>
            </section>
            <section class="thoughts">
                <div class="grid">
                    <div class="quote col-12 col-4-lg">
                        <q>It turned out to be concrete evidence of my ability to think and learn on my feet</q>
                        <p>I dedicate a lot of time to understanding the project's purpose and secondary goals. I prefer working on something intriguing that I truly care about. I didn't want to create anything commercial; instead, I wanted to show my unique style.</p>
                    </div>
                    <div class="visual col-12 col-8-lg">
                        <p>TheBlue showed me how far I’ve come in my web development journey and how
                            much more is out there to know, experience and learn. It also taught me about the importance of tidy and neat code structure, which is vital when you mix and extend functionality of your site in such ways, implementing different libraries, making it unique and memorable.</p>
                        <img src="../assets/img/theblue/water.png" alt="Water">
                    </div>
                </div>
            </section>
            <section class="buttons">
                <div class="grid">
                    <div class="col-12 button-wrap">
                        <a class="button live" href="https://water.mashasupix.com/index.html" target="_blank">VIEW LIVE</a>
                        <a class="button code" href="https://github.com/ssupix/water-website" target="_blank">VIEW CODE</a>
                    </div>
                </div>
            </section>
        </div>

        <section class="more-projects">
            <h2>more work.</h2>
                <div class="project-scroll">
                    <ul>
                        <li>
                            <div class="card hover-content" data-category="2" data-hover-text="View project" onclick="window.location.href='./ezt';">
                                <div class="cover">
                                    <video src="../assets/video/ezt.mp4" autoplay muted loop></video>
                                </div>
                                <h4>ezt - online tea shop</h4>
                                <div class="tags">
                                    <div class="pill-blue">ux research</div>
                                    <div class="pill-pink">ui design</div>
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Figma</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./meowdy';">
                                <div class="cover">
                                    <img src="../assets/img/meowdy/meowdy-mockup.jpg" alt="">
                                </div>
                                <h4>meowdy! Cat surprise boxes</h4>
                                <div class="tags">
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Photoshop</div>
                                    <div class="pill-pink">Packaging</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./workflow';">
                                <div class="cover">
                                    <video src="../assets/video/workflow.mp4" autoplay muted loop></video>
                                </div>
                                <h4>workflow - promotional landing</h4>
                                <div class="tags">
                                    <div class="pill-blue">html</div>
                                    <div class="pill-blue">scss</div>
                                    <div class="pill-blue">javascript</div>
                                    <div class="pill-blue">local storage</div>
                                    <div class="pill-pink">ui design</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="2" data-hover-text="View project" onclick="window.location.href='./ezt';">
                                <div class="cover">
                                    <video src="../assets/video/ezt.mp4" autoplay muted loop></video>
                                </div>
                                <h4>ezt - online tea shop</h4>
                                <div class="tags">
                                    <div class="pill-blue">ux research</div>
                                    <div class="pill-pink">ui design</div>
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Figma</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./meowdy';">
                                <div class="cover">
                                    <img src="../assets/img/meowdy/meowdy-mockup.jpg" alt="">
                                </div>
                                <h4>meowdy! Cat surprise boxes</h4>
                                <div class="tags">
                                    <div class="pill-pink">branding</div>
                                    <div class="pill-pink">Photoshop</div>
                                    <div class="pill-pink">Packaging</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card hover-content" data-category="3" data-hover-text="View project" onclick="window.location.href='./workflow';">
                                <div class="cover">
                                    <video src="../assets/video/workflow.mp4" autoplay muted loop></video>
                                </div>
                                <h4>workflow - promotional landing</h4>
                                <div class="tags">
                                    <div class="pill-blue">html</div>
                                    <div class="pill-blue">scss</div>
                                    <div class="pill-blue">javascript</div>
                                    <div class="pill-blue">local storage</div>
                                    <div class="pill-pink">ui design</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>
    </main>

    <?php include '../components/footer-project.php'; ?>

    <!-- scrolling -->
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script> 
    <script src="../js/smooth.js"></script>

    <!-- GSAP ANIMATIONS -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="../js/gsap.js"></script>
    <script src="../js/nav.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
    
    <script src="../js/scroll.js"></script>
    <script src="../js/scramble.js"></script>
    <script src="../js/dropdown.js"></script>
    <script src="../js/video.js"></script>

    <!-- Include Highlight.js JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="../js/cursor.js"></script>

</body>
</html>