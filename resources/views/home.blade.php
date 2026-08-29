<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Character Encoding -->
    <meta charset="UTF-8">

    <!-- Responsive Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Website Title -->
    <title>Elisha Portfolio</title>

    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        
    
</head>

<body>

    <!-- ========================= -->
    <!-- Navigation Bar Starts -->
    <!-- ========================= -->

    <header>

        <nav class="navbar">
            <div class="logo">
                <h2>Elisha.</h2>
            </div>

            <!-- Navigation Menu -->
                    <ul class="nav-links">

            <li><a href="#home">Home</a></li>

            <li><a href="#about">About</a></li>

            <li><a href="#skills">Skills</a></li>

            <li><a href="#projects">Projects</a></li>

            <li><a href="#services">Services</a></li>

            <li><a href="#contact">Contact</a></li>

        </ul>
 <!--  dark mode-->  
        <div class="theme-toggle">
            <i class="fas fa-moon"></i>
        </div>
                <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>

        </nav>

    </header>

    <!-- ========================= -->
    <!-- Navigation Bar Ends -->
    <!-- ========================= -->



    <!-- ========================= -->
    <!-- Home Section Starts -->
    <!-- ========================= -->

    <section id="home" class="home">

        <!-- Left Side -->

        <div class="home-content">

            <h3>Hello, It's Me</h3>

            <h1>Elisha Mwambala</h1>

            <h3>I'm a   <span id="typing"></span></h3>

            <p>
                Welcome to my personal portfolio website.
                I love creating modern, responsive and beautiful
                websites and System using HTML, CSS, JavaScript and PHP , 
                also i has technologies of window installation ,Git & Github,Network Configuration and Hardware Troubleshooting of computers.
                
            </p>

            <!-- Social Icons -->

            <div class="social-icons">

                <a href="#"><i class="fab fa-facebook-f"></i></a>

                <a href="#"><i class="fab fa-instagram"></i></a>

                <a href="#"><i class="fab fa-linkedin-in"></i></a>

                <a href="#"><i class="fab fa-github"></i></a>

            </div>

            <!-- Buttons -->

            <div class="buttons">

                <a href="files/my cv.pdf" class="btn" download>Download CV</a>
                <a href="#contact" class="btn btn-contact">Contact Me</a>
                <a href="#about" class="btn">Read More</a>
                

            </div>

        </div>


        <!-- Right Side -->

        <div class="home-image">

            <img src="images/el.png" alt="Profile Picture">

        </div>

    </section>

    <!-- ========================= -->
    <!-- Home Section Ends -->
    <!-- ========================= -->



     <!-- ========================= -->
    <!-- about Section -->
    <!-- ========================= -->

    <section class="about" id="about">

    <!-- About Image -->
    <div class="about-image">
        <img src="images/eli002.jpg" alt="About Image">
    </div>

    <!-- About Content -->
    <div class="about-content">

        <h2>About <span>Me</span></h2>

        <h3>ICT Student</h3>

        <p>
            Hello! My name is Elisha Mwambala. I am an ICT student
            with a passion for Web Development, Networking,Hardware Troubleshooting and
            Programming. I enjoy creating beautiful, responsive,
            and user-friendly websites and System using HTML, CSS,
            JavaScript, PHP, and MySQL.
        </p>

        <a href="#skills" class="btn">Read More</a>

    </div>
    </section>

     <!-- ========================= -->
    <!-- skills Section -->
    <!-- ========================= -->


    <section id="skills">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            
            <div class="skills-grid">
                <!-- Skill 1 -->
                <div class="skill-card">
                    
                    <i class="fab fa-html5"> <h4>HTML5</h4></i>
                    <p>Semantic, accessible markup</p>
                    <!-- Skill level bar -->
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 90%;"></div>
                    </div>
                    <span class="skill-percent">90%</span>
                </div>
                
                <!-- Skill 2 -->
                <div class="skill-card">
                    <i class="fab fa-css3-alt"><h4>CSS3</h4></i>
                    <p>Flexbox, Grid, Animations</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 85%;"></div>
                    </div>
                    <span class="skill-percent">85%</span>
                </div>
                
                <!-- Skill 3 -->
                <div class="skill-card">
                    <i class="fab fa-js"><h4>JavaScript</h4></i>
                    <p>ES6+, DOM manipulation</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%;"></div>
                    </div>
                    <span class="skill-percent">75%</span>
                </div>
                
                <!-- Skill 4 -->
                <div class="skill-card">
                    <i class="fab fa-react"> <h4>React</h4></i>
                    <p>Components, Hooks, Router</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 65%;"></div>
                    </div>
                    <span class="skill-percent">65%</span>
                </div>
                
                <!-- Skill 5 -->
                <div class="skill-card">
                    <i class="fab fa-php"> <h4>Php</h4></i>
                    <p>Connecting database</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 60%;"></div>
                    </div>
                    <span class="skill-percent">60%</span>
                </div>
                
                <!-- Skill 6 -->
                <div class="skill-card">
                    <i class="fas fa-database"><h4>SQL</h4></i>
                    <p>MySQL, PostgreSQL</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 70%;"></div>
                    </div>
                    <span class="skill-percent">70%</span>
                    
                </div>
                 <a href="#projects" class="btn"  >Read More</a>
            </div>
        </div>
    </section>


 <!-- ========================= -->
    <!-- projects Section -->
    <!-- ========================= -->

<section class="projects" id="projects">

    <div class="projects-title">
        <h2>My <span>Projects</span></h2>
        <p>Here are some of the projects I have developed.</p>
    </div>

    <div class="projects-container">

        <!-- Project 1 -->
        <div class="project-card">

            <img src="images/fund.png" alt="Project 1">

            <h3>Youth Fund System</h3>

            <p>
                An online system for managing youth contributions using
                HTML, CSS, JavaScript, PHP and MySQL.
            </p>

            <a href="#" class="btn">View Project</a>

        </div>

        <!-- Project 2 -->
        <div class="project-card">

            <img src="images/ptf img.png" alt="Project 2">

            <h3>Portfolio Website</h3>

            <p>
                A modern responsive personal portfolio website built
                using HTML, CSS and JavaScript.
            </p>

            <a href="#" class="btn">View Project</a>

        </div>

        <!-- Project 3 -->
        <div class="project-card">

            <img src="images/payment.jpg" alt="Project 3">

            <h3>Student Management System</h3>

            <p>
                A system for managing student records using PHP
                and MySQL database.
            </p>

            <a href="#" class="btn">View Project</a>

        </div>

    </div><br>
  <div>
                 <a href="#services" class="btn"   >Read More</a>
            </div>
</section>


 <!-- ========================= -->
    <!-- services Section -->
    <!-- ========================= -->

<section class="services" id="services">

    <div class="services-title">

        <h2>My <span>Services</span></h2>

        <p>
            I provide quality digital solutions that help businesses
            and individuals achieve their goals.
        </p>

    </div>

    <div class="services-container">

        <!-- Service 1 -->
        <div class="service-card">

            <i class="fas fa-laptop-code"></i>

            <h3>Web Development</h3>

            <p>
                I create responsive and modern websites using
                HTML, CSS, JavaScript and PHP.
            </p>

            <a href="#contact" class="btn">Hire me</a>

        </div>

        <!-- Service 2 -->
        <div class="service-card">

            <i class="fas fa-palette"></i>

            <h3>UI/UX Design</h3>

            <p>
                I design beautiful and user-friendly website
                interfaces for all devices.
            </p>

             <a href="#contact" class="btn">Hire me</a>

        </div>

        <!-- Service 3 -->
        <div class="service-card">

            <i class="fas fa-database"></i>

            <h3>Database Design</h3>

            <p>
                I design secure MySQL databases for websites
                and business systems.
            </p>

             <a href="#contact" class="btn">Hire me</a>

        </div>

    </div><br>
  <div>
                 <a href="#contact" class="btn"  >Read More</a>
            </div>
</section>


<!-- Contact Form -->
<section class="contact" id="contact">

    <div class="contact-title">
        <h2>Contact <span>Me</span></h2>
        <p>Feel free to contact me anytime.</p>
    </div>

    <div class="contact-container">

        <!-- Contact Information -->
        <div class="contact-info">

            <h3>Get In Touch</h3>

            <p>
                <i class="fas fa-phone"></i>
                +255 761672783
            </p>

            <p>
                <i class="fas fa-envelope"></i>
                mwambalaelisha5@gmail.com
            </p>

            <p>
                <i class="fas fa-location-dot"></i>
                Tunduma, Tanzania
            </p>

        </div>

        <!-- Contact Form -->
        <!-- Contact Form -->
@if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #c3e6cb;">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <!-- ... Maelezo yako ya form yaendelee hapa chini ... -->

        <form action="{{ route('contact.store') }}" method="POST">

            @csrf

            <input
                type="text"
                name="name"
                placeholder="Your Name"
                value="{{ old('name') }}"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="Your Email"
                value="{{ old('email') }}"
                required
            >

            <input
                type="text"
                name="subject"
                placeholder="Subject"
                value="{{ old('subject') }}"
            >

            <textarea
                name="message"
                rows="6"
                placeholder="Your Message"
                required
            >{{ old('message') }}</textarea>

            <button type="submit" class="btn">
                <i class="fas fa-paper-plane"></i>
                Send Message
            </button>

        </form>
    </div>
</section>
   <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
    <footer>
        <p>&copy;2026 Elisha Mwambala | All Rights Reserved</p>
    </footer>
<div class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</div>
</body>

</html>


