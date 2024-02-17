<!DOCTYPE html>
<html lang="en">

<?php 
require("data.php");
?>

<body class="page-portfolio">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt=""> 
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="#" class="active"><span>Tools</span></i></a></li>
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
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Tools</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Tools.php">Tools</a></li>
                    <li>Applications</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li><a href="Tools.php">All</a></li>
                        <li><a href="Tools1.php">Books</a></li>
                        <li class="filter-active">Applications</a></li>
                        

                    </ul>
                    <ul class="portfolio-flters" data-aos="fade-up">
                    <form action="search_tools2.php" method="post" class="mt-3">
                        <li class="search"><input type="text" name="tool_search" placeholder="Search here...">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </li>
                    </form>
                    </ul>
                    <!-- End Portfolio Filters -->

                    <div class="row gy-4 portfolio-container2" data-aos="fade-up" data-aos-delay="300">
                    <?php
                        include_once "Admin/config/db.php";
                        $query = mysqli_query($conn, "SELECT * FROM uploads WHERE type='Application'");

                        while($ro = mysqli_fetch_array($query)):
                    ?>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <img src="Admin/uploads/<?= !empty($ro["image"]) ? $ro["image"] : "0"; ?>" class="img-fluid" alt=""/>
                            <div class="portfolio-info">
                                <h4><?= !empty($ro["name"]) ? $ro["name"] : "0"; ?></h4>
                                <p><?= !empty($ro["description"]) ? $ro["description"] : "0"; ?></p>
                                
                                <a href="portfolio-details.php" title="Download" class="details-link"><i class="bi-cloud-download"></i></a>
                            </div>
                        </div>
                    
                    <?php endwhile;
                        if(mysqli_num_rows($query) < 1){
                        }
                    ?>

                    </div>
                    <!-- End Portfolio Container -->

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

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