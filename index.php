<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ============== scroll reveal cdn ================ -->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!-- ============== box icon cdn  ===================== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ============== custom css file ==================  -->
    <link rel="stylesheet" href="dist/style.css">

    <title>Lê Bảo Lộc</title>
</head>
<body>
    <!-- =============== home page ==================  -->
    <div class="home-section section flex " id="home">
        <!-- navigation menu  -->
        <div class="header-nav">
            <!-- mode change icon  -->
            <div class="mode-change-icon">
                <i class="bx bx-moon" id="mode-change-icon"></i>
            </div>

            <!-- menu icon  -->
            <div class="menu-icon">
                <i class='bx bx-grid-alt' id="menu-icon"></i>
            </div>

            <!-- nav list  -->
            <ul class="header-nav-list nav flex" id="header-nav-list">
                <li>
                    <a href="#home" class="nav-link active">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#projects" class="nav-link">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#about" class="nav-link">
                        About me
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-link">
                        Contact
                    </a>
                </li>
            </ul>
            
        </div>

        <!-- hero section  -->
        <div class="hero flex">
            <div class="hero-img flex">
                <img src="img/lbl.png" class="profile-pic" alt="">
                <span class="hero-img-bg"></span>
            </div>
            <!-- hero content  -->
            <div class="hero-content flex">
                <h1 class="header">
                    I'm 
                    <span>
                        Le Bao Loc
                    </span>
                    , a Web Developer
                </h1>
                
                <h2 class="sub-header">
                    I create Stunning 
                    <span>
                        Websites
                    </span>
                </h2>
    
                <button class="btn hero-btn">
                    <a href="https://github.com/lblauto" target="_blank" style="color: #fff; text-decoration: none;"> View my work</a>
                    <i class='bx bx-paper-plane' ></i>
                </button>
            </div>
    
            <!-- social icon list  -->
            <div class="social-icon-list">
                <ul class="nav flex">
                    <li class="social-icon">
                        <a href="https://www.facebook.com/LBLAuto/" target="_blank" style="color: #3300FF;"><i class="bx bxl-facebook-circle"></i></a>
                    </li>
                    <li class="social-icon">
                        <a href="https://www.instagram.com/lebaooloc/" target="_blank" style="color: #3300FF;"><i class="bx bxl-instagram-alt"></i></a>
                    </li>
                    <li class="social-icon">
                        <a href="https://twitter.com/LBLAuto" target="_blank" style="color: #3300FF;"><i class="bx bxl-twitter"></i></a>
                    </li>
                    <li class="social-icon">
                        <a href="https://www.youtube.com/@lebaoloc9961" target="_blank" style="color: #3300FF;"><i class="bx bxl-youtube"></i></a>
                    </li>
                </ul>
            </div>

            <div class="scroll-top-icon" id="scroll-up">
                <i class="bx bxs-chevron-up-circle" id="scroll-top-icon"></i>
            </div>
        </div>

    </div>

    <!-- =============== projects section ============ -->
    <div class="project-section section" id="projects">
        <h1 class="section-header">
            Projects
        </h1>

        <div class="project project-1 flex">
            <div class="project-img">
                <img src="img\project-1.png" alt="">
            </div>

            <div class="project-content flex">
                <h1 class="project-header">
                    Online sales website interface
                </h1>

                <p class="project-description">
                Welcome to our dynamic online shopping platform! Our web interface is meticulously crafted using three essential languages: HTML, CSS, and JavaScript, ensuring a seamless and engaging user experience. With two main interfaces at your disposal, namely the welcoming home page and the efficient login and registration page, we're here to cater to your every need.
                </p>

                <div class="btn-group">
                    <button class="btn live-demo-btn">
                        <a href="https://lblauto.github.io/Web-BH-Front-End/home-page.html" target="_blank" style="color: #fff; text-decoration: none;" >Live Demo</a>
                    </button>
                    <button class="btn view-code-btn">
                        <a href="https://github.com/lblauto/Web-BH-Front-End.git" target="_blank" style="color: #fff; text-decoration: none;">View Code</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="project project-2 flex">
            <div class="project-img">
                <img src="img/project-2.png" alt="">
            </div>

            <div class="project-content flex">
                <h1 class="project-header">
                    Web Counting Love Days
                </h1>

                <p class="project-description">
                    This web interface is a personal project where I combine my passion for design and front-end development. The project is built using HTML, CSS, and JavaScript, with the incorporation of the Font Awesome library to enhance the user experience with delightful icons. It enables couples to input the date when they started their relationship, and then it calculates and displays the duration of their love in months, days, hours, minutes, and seconds. Additionally, users can upload their own images to reminisce about their memorable moments on the interface.
                </p>

                <div class="btn-group">
                    <button class="btn live-demo-btn">
                        <a href="https://lblauto.github.io/Web-Love-Day-Dark-Light/" target="_blank" style="color: #fff; text-decoration: none;" >Live Demo</a>
                    </button>
                    <button class="btn view-code-btn">
                        <a href="https://github.com/lblauto/Web-Love-Day-Dark-Light.git" target="_blank" style="color: #fff; text-decoration: none;">View Code</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="project project-3 flex">
            <div class="project-img">
                <img src="img\project-3.png" alt="">
            </div>

            <div class="project-content flex">
                <h1 class="project-header">
                    Login and registration interface
                </h1>

                <p class="project-description">
                    This interface is the result of blending my design and front-end development skills. It has been constructed utilizing HTML, CSS, and the Font Awesome library to craft a user-friendly and captivating user experience. The interface encompasses both login and registration pages, featuring functionalities such as password remembering, password validation, and numerous other features aimed at enhancing the user experience.
                </p>

                <div class="btn-group">
                    <button class="btn live-demo-btn">
                        <a href="https://lblauto.github.io/loginlbl/login 1.html" target="_blank" style="color: #fff; text-decoration: none;" >Live Demo</a>
                    </button>
                    <button class="btn view-code-btn">
                        <a href="https://github.com/lblauto/loginlbl.git" target="_blank" style="color: #fff; text-decoration: none;">View Code</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== About Section ==============  -->
    <div class="about-section section" id="about">
        <h1 class="section-header">
            About me
        </h1>

        <div class="about-content flex">
            <div class="about-img flex">
                <img src="img/lbl.png" alt="">
            </div>

            <div class="about-info">
                <h1 class="content-header">
                    My name is Le Bao Loc
                </h1>

                <p class="content-body">
                    I'm 22 years old, currently living and working in Ho Chi Minh City, I'm someone who's always passionate about learning and exploring the world. With experience in the field of web development, I seamlessly integrate into every project with creativity and responsibility. Furthermore, I have a deep love for nature and the arts, often dedicating time to read books, study, listen to music and play games. My goal is to successful businessman thanks to technology. Join me on this journey and discover the exciting opportunities waiting ahead!
                </p>
            </div>
        </div>
    </div>

    <!-- =============== contact section ============= -->
    <div class="contact-section section" id="contact">
        <h1 class="section-header">
            Contact me
        </h1>

        <form action="https://formspree.io/f/xleynbzo" method="POST" class="contact-form flex">
            <div class="contact-group flex">
                <input type="text" name="name" placeholder="Your name" required>
                <input type="email" name="email" placeholder="Your email" required>
            </div>
            <textarea name="message" required placeholder="Your message" cols="30" rows="10"></textarea>

            <button class="btn submit-btn">
                Send Message
            </button>
        </form>
    </div>
    <!-- =============== footer section =============  -->
    <div class="footer-section section flex">
        <div class="footer-header">
            <h1>
                Lê Bảo Lộc
            </h1>
        </div>

        <div class="footer-nav">
            <ul class="nav flex">
                <li class="social-icon">
                    <a href="https://www.facebook.com/LBLAuto/" target="_blank" style="color: #fff;"><i class="bx bxl-facebook-circle"></i></a>
                </li>
                <li class="social-icon">
                    <a href="https://www.instagram.com/lebaooloc/" target="_blank" style="color: #fff;"><i class="bx bxl-instagram-alt"></i></a>
                </li>
                <li class="social-icon">
                    <a href="https://twitter.com/LBLAuto" target="_blank" style="color: #fff;"><i class="bx bxl-twitter"></i></a>
                </li>
                <li class="social-icon">
                    <a href="https://www.youtube.com/@lebaoloc9961" target="_blank" style="color: #fff;"><i class="bx bxl-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
</body>
<!-- =============== custom js file  ============= -->
    <script src="dist/script.js"></script>
</html>
