<!DOCTYPE html>
<html lang="en">

<?php 
require("data.php");
?>

<body class="page-services">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt=""> 
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php" class="active">Services</a></li>
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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Services</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Services</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-5">
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                        <div>
                            <h4 class="title"><a href=".\room\login.php" class="stretched-link">Online Discussions</a></h4>
                            <p class="description">We provide a perfect space for you to learn and discuss with other students and IT experts all over Malawi for free. These spaces are a good thing since they provide privacy.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-megaphone" style="color: #f5cf13;"></i></div>
                        <div>
                            <h4 class="title"><a href="posts.php" class="stretched-link">Posting Space</a></h4>
                            <p class="description">If you have any questions related with IT sector, you can can post a question and get answers through the comments for free. The answer voted with most likes is chosen as the best one.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-book-half" style="color: #15bfbc;"></i></div>
                        <div>
                            <h4 class="title"><a href="Tools.php" class="stretched-link">Developers Tools</a></h4>
                            <p class="description">We provide required applications and books for you so that in case you need some clear understand of a certain concept you can download the required books and research.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                        <div>
                            <h4 class="title"><a href="mailto:InfoSrcmw@gmail.com" class="stretched-link">Job Opportunities</a></h4>
                            <p class="description">The email yo enter when commenting on a post will later be used to contact you when a certain job opportunity arise. <b>Note:</b> <i>Those who comment frequently and collect answers stand a higher chance.</i></p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-server" style="color: #d90769;"></i></div>
                        <div>
                            <h4 class="title"><a href="mailto:InfoSrcmw@gmail.com" class="stretched-link">Web Services</a></h4>
                            <p class="description">We also help businesses elevate at an incredible speed by helping you out with website features at a very low price. You can send us an e-mail right now.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
                        <div>
                            <h4 class="title"><a href="mailto:InfoSrcmw@gmail.com" class="stretched-link">Event Advertiser</a></h4>
                            <p class="description">If you have any IT event that you are hosting, you can also post it to let others on our platform know about it.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                </div>

            </div>
        </section>
        <!-- End Our Services Section -->

        <!-- ======= Services Cards Section ======= -->
        <section id="services-cards" class="services-cards">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-1.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Malawi 2063 Vision.</h4>
                                        <p>Technology is one of the main cole foundations for the implementation of Malawi 2063 vision. if Malawi is developed technologically, a lot of things can be developed here instead of purchasing them outside the country.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-2.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Help Others in Need</h4>
                                        <p>Companies to let us know if you have vacancies so that we can give students on this platform a chance to start earning money and reduce the unemployment rate here in Malawi. We also on our part try by allowing expert
                                            tutors create there own space</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-3.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Business Booming</h4>
                                        <p>Let us know if you want some web services and we will be here to help at the very best and at the lowest price. You can also choose the interns from this website to do the work for you at a negotiated price between
                                            yourselves.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-4.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Buy Malawi</h4>
                                        <p>Our website is based in Malawi so by buying our service you will be helping the circulation of cash here in Malawi that is instead of cash going out of Malawi, it will be here thereby improving our Malawian economy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                </div>

            </div>
        </section>
        <!-- End Services Cards Section -->

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