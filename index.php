<!DOCTYPE html>
<html lang="en">

<?php 
require("data.php");
?>

<body class="page-index">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <h1 class="d-flex align-items-center"><img src="assets/img/logo.png"alt=""> 
                </h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="Tools.php"><span>Tools</span></a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">A Trusted Knowledge & Resource Pool for Malawian IT Developers</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Welcome to <b>InfoSrc</b>. A responsive Hub created for software developers in Malawi to find resources and the knowledge required when developing their software. </p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href=".\room\login.php" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Ad</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>What Our Site Offers:</h3>

                        <div class="row gy-4">
                            
                        <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                                    <span>Question & Comment Section</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->    

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                    <span>Chat Room Section</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                                    <span>Automated Features</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                                    <span>Help/Contact Us Section</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->
                            
      
                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                                    <span>Tools/Requirements Section</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                    <span>Services Offered Section</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                    <span>Smooth website Features</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                    <span>Event Advertising</span>
                                </div>
                            </div>
                            <!-- End Icon List Item-->
                        </div>
                    </div>
                    <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="phone-wrap">
                            <img src="assets/img/bbb.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="phone-wrap">
                            
                        </div>
                    </div>
                </div>

            </div>

            <div class="details">
                <div class="container" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Let Us Help You<br>Beyond Your Imaginations</h4>
                            <p>Companies looking to outsource website developers can contact us and we can provide on for you at a very reasonable price!</p>
                            <a href="mailto:InfoSrcmw@gmail.com" class="btn-get-started">Email Us</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Do you have any IT related question?</h3>
                        <p>Share the questions and problems you are facing by posting so that other students or IT specialists all over Malawi can help you.<br> This is the fastest and most efficient way of getting help faster, and the good thing about it is that it is for free.
                        </p>
                        <a class="cta-btn" href="posts.php">Post A Question</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Call To Action Section -->


        <!-- End Features Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>

                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    This is a really good platform to learn all about programming languages by engaging in group discussions. It helps students all over Malawi help each other in problems concerning Information Systems (IT).
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Solly Mlambo</h3>
                                    <h4>Co &amp; Founder</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    This website has helped me improve my website designing capabilities in a lot of ways. With the help of other IT students who i interact with on this website i can now design any type of website. 
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Gloria Hala</h3>
                                    <h4>Web Designer</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    With the help of other IT students on this platform i learnt all about CCTV installation and now my shop which used to be vandalized every month is now safe as the thieves can now be caught on camera. 
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Felix Mkometsa</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    I really thought it was impossible to be a freelance programmer here in Malawi with the low skills i had, but now with the help i got from my friends on this website i am now a freelance website developer.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                    <h3>Blessings Mkanda</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    My business was a flop, i was using modern ways of running a business until i was introduced to the InfoSrc team who helped me build my business technologically and now my business is booming thanks all to you.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                    <h3>Johnson Msisya</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php 
        require("footer.php");
    ?>
    <!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>