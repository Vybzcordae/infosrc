<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php 
require("data.php");
?>

<body class="page-blog">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt=""> 
                <h1 class="d-flex align-items-center">c</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="posts.php" class="active">Posts</a></li>
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
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Posts</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Posts</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="row gy-5 posts-list">
                        <?php
                            include_once "config.php";
                            $query = mysqli_query($con, "SELECT * FROM posts ORDER BY user_id DESC");

                            while($ro = mysqli_fetch_array($query)):
                        ?>

                            <div class="col-lg-6">
                                <article class="d-flex flex-column">
                                    <div class="post-img">
                                        <img src="images/<?= !empty($ro["img"]) ? $ro["img"] : "null"; ?>" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="post-details.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>" title="View Post" id=""><?= !empty($ro["topic"]) ? $ro["topic"] : "null"; ?></a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person-fill"></i> <a href="post-details.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>" id=""><?= !empty($ro["fname"]) ? $ro["fname"] : "null"; ?> <?= !empty($ro["lname"]) ? $ro["lname"] : "null"; ?></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock-fill"></i> <a href="post-details.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>"><time datetime="2022-01-01" id=""><?= !empty($ro["date"]) ? $ro["date"] : "null"; ?></time></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="post-details.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>"><?= !empty($ro["views"]) ? $ro["views"] : "0"; ?> Comments</a></li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <p>
                                            <?= !empty($ro["Field"]) ? $ro["Field"] : "null"; ?>...
                                        </p>
                                    </div>
                                    <div class="read-more mt-auto align-self-end">
                                        <a href="post-details.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>" class= "share" id="view">Read More <i class="bi-forward-fill"></i></a>
                                    </div>
                                </article>
                            </div>
                            <?php endwhile;
                                if(mysqli_num_rows($query) < 1){
                                    echo "You don't have any post !!";
                                }
                            ?>
                        </div>
                        <!-- End blog posts list -->
                        <br>

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar ps-lg-4">
                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="search_posts.php" method="post" class="mt-3">

                                    <input type="text" name="post_search" placeholder="Enter Post Title">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <!-- End sidebar search formn-->

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Add Post</h3>
                                <br>
                                <div class="col-lg-15">
                                    <form action="#" enctype ="multipart/form-data" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="firstname" class="form-control" id="name" placeholder="First Name" autocomplete="off" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="text" class="form-control" name="lastname" id="email" placeholder="Last Name" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="topic" id="subject" placeholder="Topic" autocomplete="off" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="file" class="form-control" name="image" id="image" placeholder="Image" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="Field" rows="2" id="subject" placeholder="Introduction" autocomplete="off" required></textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" autocomplete="off" required></textarea>
                                        </div>
                                        <div class="my-3">
                                            <div class="error-message"></div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="submit">Post</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- End sidebar categories-->
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                            

                                

                            </div>
                            <!-- End sidebar recent posts-->

                            
                            <!-- End sidebar tags-->

                        </div>
                        <!-- End Blog Sidebar -->

                    </div>

                </div>

            </div>
        </section>
        <!-- End Blog Section -->

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
    <script src="signup.js"></script>


</body>

</html>