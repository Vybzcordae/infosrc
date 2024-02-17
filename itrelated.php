<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php 
require("data.php");
?>

<?php
include_once "config.php";
	
	$query = mysqli_query($con, "select * from posts where Field='IT related'"); //$_HOME_FILE --> /config/value.php
	if(mysqli_num_rows($query) > 0){
		//$_SESSION["current_room_id"] = $room_id;
		$posts_data = mysqli_fetch_array($query);
					
	} else {
		echo "<script>alert('No Post with this tag !!'); window.location='posts.php'</script>";
	}
?>

<body class="page-blog">

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

                <h2>Search Results</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="#">Search Results</a></li>
                </ol>
                <ol>
                    <li><?php echo mysqli_num_rows($query) ?> Results Found</li>
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

                            <div class="col-lg-6">
                                <article class="d-flex flex-column">
                                    <div class="post-img">
                                        <img src="images/<?= !empty($posts_data["img"]) ? $posts_data["img"] : "null"; ?>" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="post-details.php?user_id=<?= !empty($posts_data["user_id"]) ? $posts_data["user_id"] : "null"; ?>" title="View Post" id=""><?= !empty($posts_data["topic"]) ? $posts_data["topic"] : "null"; ?></a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person-fill"></i> <a href="post-details.php?user_id=<?= !empty($posts_data["user_id"]) ? $posts_data["user_id"] : "null"; ?>" id=""><?= !empty($posts_data["fname"]) ? $posts_data["fname"] : "null"; ?> <?= !empty($posts_data["lname"]) ? $posts_data["lname"] : "null"; ?></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock-fill"></i> <a href="post-details.php?user_id=<?= !empty($posts_data["user_id"]) ? $posts_data["user_id"] : "null"; ?>"><time datetime="2022-01-01" id=""><?= !empty($posts_data["date"]) ? $posts_data["date"] : "null"; ?></time></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="post-details.php?user_id=<?= !empty($posts_data["user_id"]) ? $posts_data["user_id"] : "null"; ?>"><?= !empty($posts_data["views"]) ? $posts_data["views"] : "0"; ?> Answers</a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- End blog posts list -->
                        <br>

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar ps-lg-4">
                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text" placeholder="Enter Post Title">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <!-- End sidebar search formn-->

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Add Post</h3>
                                <br>
                                <div class="col-lg-15">
                                    <form action="#" enctype ="multipart/form-data" role="form" class="php-email-form">
                                    <div class="error-txt"></div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="firstname" class="form-control" id="name" placeholder="First Name" autocomplete="off" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="text" class="form-control" name="lastname" id="email" placeholder="Last Name" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="topic" id="subject" placeholder="Question" autocomplete="off" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="file" class="form-control" name="image" id="image" placeholder="Image" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <select class="form-control" name="Field" id="subject">
                                                <option value="Java">Java</option>
                                                <option value="Hardware">Hardware</option>
                                                <option value="Python">Python</option>
                                                <option value="HTML & CSS">HTML & CSS</option>
                                                <option value="PHP & MySQL">PHP & MySQL</option>
                                                <option value="IT related">IT related</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="message" rows="5" placeholder="Details" autocomplete="off" required></textarea>
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
                            <?php
                                    include_once "config.php";
                                    $query = mysqli_query($con, "SELECT * FROM posts ORDER BY user_id DESC LIMIT 3");

                                    while($ro = mysqli_fetch_array($query)):
                                ?>
                                    <div class="mt-3">
                                        <div class="post-item mt-3">
                                            <img src="images/<?= !empty($ro["img"]) ? $ro["img"] : "null"; ?>" alt="" class="flex-shrink-0">
                                            <div>
                                                <h4><a href="post-details.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>" title="View Post" id=""><?= !empty($ro["topic"]) ? $ro["topic"] : "null"; ?></a></h4>
                                                <time datetime="2022-01-01" id=""><?= !empty($ro["date"]) ? $ro["date"] : "null"; ?></time>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php endwhile;
                                    if(mysqli_num_rows($query) < 1){
                                        echo "You don't have any post !!";
                                    }
                                ?>
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