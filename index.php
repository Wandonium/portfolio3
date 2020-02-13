<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Hillary Wando</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css"> -->
</head>

<body>
    <header>
        <div class="menu-toggler">
            <div class="bar half start"></div>
            <div class="bar"></div>
            <div class="bar half end"></div>
        </div>
        <nav class="top-nav">
            <ul class="nav-list">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </nav>

        <div class="landing-text">
            <h1>Hillary Wando</h1>
            <h6>Software Developer and Enterpreneur</h6>
        </div>
    </header>

    <section class="about" id="about">
        <div class="container">
            <div class="profile-img" data-aos="fade-right" data-aos-delay="300">
                <img src="images/profile.png" alt="My Profile Photo">
                <div class="img_overlay">

                </div>
            </div>
            <div class="about-details" data-aos="fade-left" data-aos-delay="600">
                <div class="about-heading">
                    <h1>About</h1>
                    <h6>Myself</h6>
                </div>
                <p>Hi there. I'm a software developer based in Nairobi, Kenya. I build apps for any platform or form-factor from web apps and mobile apps to desktop apps and embedded systems. I am a full stack developer and have experience working on both
                    the front end and back end of development. I love to tackle challenging projects by breaking them into pieces, building the pieces brick by brick and then putting the pieces back together again.
                </p><br>
                <p>I am versatile on the programming languages I work with and prefer to choose the languages based on the project. I am more than conversant with HTML, CSS and Javascript and can make use of their various libraries and frameworks such as
                    Sass, Bootstrap, ReactJS, GSAP etc to make beautiful and elegant user interfaces for any project. On the backend, I can work with any SQL-based DBMS like MySQL and Postgresql as well as NoSQL DBMSs like Mongo DB. Furthermore, building
                    and managing servers is second nature with languages like Python, NodeJS, PHP, Ruby, C# and Java.
                </p><br>
                <p>My overarching goal is to build software that lets Africa take off by solving the unique problems plagueing the continent. I believe Africa is ripe for disruption in almost every industry in each of its countries.
                </p>
                <div class="social-media">
                    <ul class="nav-list">
                        <li><a href="https://codepen.io/wandonium" target="_blank" class="icon-link"><i class="fab fa-codepen"></i></a></li>
                        <li><a href="https://github.com/Wandonium" target="_blank" class="icon-link"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/hillary-wando" target="_blank" class="icon-link"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="section-heading">
                <h1>Services</h1>
                <h6>What I can do for you</h6>
            </div>
            <div class="my-skills">
                <div class="skill" data-aos="fade-in" data-aos-delay="300">
                    <div class="icon-container">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h1>Web Design</h1>
                    <p>From illustrations and mockups using Inkscape and Adobe Illustrator to UI/UX designs using Adobe XD and Figma or Adobe Photoshop and Gimp, I can do it all.</p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="600">
                    <div class="icon-container">
                        <i class="fas fa-code"></i>
                    </div>
                    <h1>Web Development</h1>
                    <p>I build web apps as well as websites. I can build them from scratch or I can use CMSs like Wordpress and Joomla or frameworks like Laravel, Django and Ruby on Rails</p>
                </div>
                <div class="skill" data-aos="fade-in" data-aos-delay="900">
                    <div class="icon-container">
                        <i class="fas fa-mobile"></i>
                    </div>
                    <h1>Mobile App Development</h1>
                    <p>I build Android apps using Android Studio (Java + XML) but I can also use cross-platfrom frameworks like React Native and Flutter</p>
                </div>
                <!-- <div class="skill" data-aos="fade-in" data-aos-delay="1200">
                    <div class="icon-container">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h1>Product Strategy</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, quasi. Dolore dolorem vel maxime non aperiam quia, praesentium excepturi magnam.</p>
                </div> -->
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-heading">
                <h1>Portfolio</h1>
                <h6>View some of my recent work</h6>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="100">
                    <img src="images/face-id-brain.png" alt="">
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="200">
                    <h6>Full Stack App</h6>
                    <h1>Smart Brain</h1>
                    <p>Smart Brain is a web application for recognizing faces in photos and images. The app makes use of the artificial intelligence libraries provided by the <span>
                        <a href="https://www.clarifai.com/" target="_blank" class="p-link">Clarifai API</a></span>. The front-end was developed using the ReactJS framework while the back-end is held together with the ExpressJS library on top of the NodeJS
                        framework. The app allows persistence of user data through the use of a PostgreSql database.</p>
                    <a href="https://face-reco-brain.herokuapp.com/" target="_blank" class="cta">View App</a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="300">
                    <h6>Web Design</h6>
                    <h1>Background Generator</h1>
                    <p>Background Generator is a web tool that helps you to generate gradient backgrounds for your websites. It does this by letting you pick two colors from the color pickers and then combining the selected colors into a gradient background.
                        It also lets you pick from any two random colors by clicking the random button. The tool then displays this gradient as its own background and also provides the CSS code needed to use the chosen background. This lets you see the
                        background as it changes and also copy the CSS code needed to implement it directly into your own code.</p>
                    <a href="https://wandonium.github.io/gradientBackground/" target="_blank" class="cta">View App</a>
                </div>
                <div class="portfolio-img" data-aos="fade-left" data-aos-delay="400">
                    <img src="images/bg-gen.png" alt="">
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right" data-aos="fade-right" data-aos-delay="500">
                    <img src="images/robo-dark.png" alt="">
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="600">
                    <h6>API Development</h6>
                    <h1>Robo Friends</h1>
                    <p>Robot Friends is a web app that illustrates the consumption of a RESTful web API. The app makes use of the <span><a href="https://robohash.org/" class="p-link" target="_blank">Robohash</a>
                    </span> web service which "makes it easy to provide unique, robot/alien/monster/whatever images for any text". Robohash is a robot-based hashing tools on the web that lets you generate hundreds of millions of image variations from
                        any text.
                    </p>
                    <a href="https://my-robo-friends.herokuapp.com/" target="_blank" class="cta">View App</a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-description has-margin-right" data-aos="fade-right" data-aos-delay="700">
                    <h6>Wordpress</h6>
                    <h1>Photography Blog</h1>
                    <p>This is a demo Photography blog built using the Wordpress Content Management System (CMS). The blog lets you present your photos in a clean and engaging UI</p>
                    <a href="http://photoart.hillarywando.com/" target="_blank" class="cta">View Website</a>
                </div>
                <div class="portfolio-img" data-aos="fade-left" data-aos-delay="800">
                    <img src="images/photoart.png" alt="">
                </div>
            </div>
            <div class="portfolio-item">
                <div class="mobile-photo" data-aos="fade-right" data-aos-delay="900">
                    <img src="images/iSecurity.jpg" alt="">
                </div>
                <div class="portfolio-description" data-aos="fade-left" data-aos-delay="1000">
                    <h6>Mobile App</h6>
                    <h1>iSecurity Android App</h1>
                    <p>This is an app that helps private security companies in Kenya fight terrorism and use modern technology in their daily activities. The app lets a security guard in a business premise scan the national IDs of guests to the premise to
                        determine if they are known criminals or not and to keep track of all who come and go into the building. The details of the guests are stored in a database and can be used for analytics by the police in case of an investigation.
                    </p>
                    <a href="http://hillarywando.com/blog/isecurity-app" class="cta">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experience" id="experience">
        <div class="container">
            <div class="section-heading">
                <h1>Work Experience</h1>
                <h6>Past and current jobs</h6>
            </div>
            <div class="timeline" data-aos="fade-down" data-aos-delay="300">
                <ul>
                    <li class="date" data-date="July 2019 - Present">
                        <h1>TechCloud Ltd</h1>
                        <p>Lead Developer on the iSecurity app. Duties included developing the front-end and back-end of the app, working with the team consisting of a designer, a tester and another developer and deploying the app to the market on custom
                            tablets.
                        </p>
                    </li>
                    <li class="date" data-date="Oct 2015 - Dec 2015">
                        <h1>County Government of Kiambu</h1>
                        <p>Junior Statistician, Department of Development and Planning. Duties included performing a variety of data related duties such as handling errors and missing data and performing a variety of administrative duties i.e meeting preparations,
                            reservations and office supply & equipment management.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="section-heading">
                <h1>Contact</h1>
                <h6>Let's work together</h6>
            </div>
            <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>">
                <?php echo $msg; ?>
            </div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" data-aos="fade-up" data-aos-delay="300">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name..." value="<?php echo isset($_POST['name']) ? $name : ''; ?>" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email..." value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
                <label for="services">Services</label>
                <select name="services" id="service">
                    <option value="">Web Design</option>
                    <option value="">Web Development</option>
                    <option value="">Mobile App Development</option>
                </select>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="10" rows="10"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <footer class="copyright">
        <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>
        </div>
        <p>&copy; 2020 Hillary Wando</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="main.js"></script>
</body>

</html>