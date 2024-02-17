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

                <h2>Post Details</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li>Post Details</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <article class="blog-details">
                        <?php
                        include_once "config.php";
                                $user_id = $_GET["user_id"];
                                
                                $sql = mysqli_query($con, "select * from posts where user_id='{$user_id}'"); //$_HOME_FILE --> /config/value.php
                                if(mysqli_num_rows($sql) > 0){
                                    $row = mysqli_fetch_assoc($sql);
                                                
                                } else {
                                    echo "failure";
                                }
                        ?>
                        
                        <?php
                            include_once "config.php";
                            $user_id = $_GET["user_id"];
                            $sq = mysqli_query($con, "select * from comment WHERE unique_id='{$user_id}'");
                        ?>

                            <div class="post-img">
                                <img src="images/<?php echo $row['img'] ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="title"><?php echo $row['topic'] ?></h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="post-details.php"><?php echo $row['fname'] .' '.$row['lname']?></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="post-details.php"><time datetime="2020-01-01"><?php echo $row['date'] ?></time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="post-details.php"><?php echo mysqli_num_rows($sq) ?> Answers</a></li>
                                </ul>
                            </div>
                            <!-- End meta top -->

                            <div class="content">

                                <blockquote>
                                    <p>
                                        <small>
                                            <?php echo $row['message'] ?>.
                                        </small>
                                    </p>
                                </blockquote>

                            </div>
                            <!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi-person-circle"></i>
                                <ul class="cats">
                                    <li><a href="#"><?php echo $row['fname'] .' '.$row['lname']?></a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#"><?php echo $row['Field']?></a></a></li>
                                </ul>
                            </div>
                            <!-- End meta bottom -->

                        </article>
                        <!-- End post author -->

                        <div class="comments">
                        <?php
                        include_once "config.php";
                                $user_id = $_GET["user_id"];
                                
                                $sql1 = mysqli_query($con, "select * from comment where unique_id='{$user_id}'"); //$_HOME_FILE --> /config/value.php
                        ?>
                            <h4 class="comments-count"><?php echo mysqli_num_rows($sql1) ?> Answers</h4>
                                <?php
                                include_once "config.php";
                                        $user_id = $_GET["user_id"];
                                        
                                        $sql = mysqli_query($con, "select * from posts where user_id='{$user_id}'"); //$_HOME_FILE --> /config/value.php
                                        if(mysqli_num_rows($sql) > 0){
                                            $row = mysqli_fetch_assoc($sql);
                                                        
                                        } else {
                                            echo "failure";
                                        }
                                ?>
                            <div class="coms">
                                <div class="row hide">
                                    <div class="col form-group">
                                    <?php
                                        include_once "config.php";
                                        $user_id = $_GET["user_id"];
                                        $query = mysqli_query($con, "SELECT comment.id, comment.fname, comment.lname, comment.comment, comment.date, comment.likes, posts.message FROM comment INNER JOIN posts ON comment.unique_id = posts.user_id WHERE comment.unique_id='{$user_id}' ORDER BY comment.likes DESC");

                                        while($ro = mysqli_fetch_array($query)):
                                    ?>
                                        <div class="comment" >
                                            <div class="d-flex">
                                                <div class="comment-img"><img src="assets/img/blog/2.png" alt=""></div>
                                                <div>
                                                    <h5>
                                                        <a href=""><?= !empty($ro["fname"]) ? $ro["fname"] : "null"; ?> <?= !empty($ro["lname"]) ? $ro["lname"] : "null"; ?></a>

                                                        <a href="like.php?user_id=<?= !empty($ro["id"]) ? $ro["id"] : "null"; ?>" class="reply"><i class="like bi bi-check-circle"></i> </a><?= !empty($ro["likes"]) ? $ro["likes"] : "0"; ?>
                                                    </h5>
                                                    <time datetime="2020-01-01"><em><?= !empty($ro["date"]) ? $ro["date"] : "null"; ?></em></time>
                                                    <p>
                                                    <?= !empty($ro["comment"]) ? $ro["comment"] : "null"; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile;
                                            if(mysqli_num_rows($query) < 1){
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>


                            <!-- End comment #1 -->
                            <div class="reply-form">

                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <form action="" class="comme">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="firstname" type="text" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="lastname" type="text" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <div class="row hide">
                                        <div class="col form-group">
                                            <input name="user_id" type="text" class="form-control" value="<?php echo $row['user_id']?>" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" rows="3" placeholder="Add An Answer" required></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post</button>

                                </form>

                            </div>

                        </div>
                        <!-- End blog comments -->

                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

                        <div class="sidebar ps-lg-4">


                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>
                                <ul class="mt-3">
                                    <li><a href="java.php">Java</a></li>
                                    <li><a href="hardware.php">Hardware</a></li>
                                    <li><a href="python.php">Python</a></li>
                                    <li><a href="htmlcss.php">HTML & CSS</a></li>
                                    <li><a href="phpmysql.php">PHP & MySQL</a></li>
                                    <li><a href="itrelated.php">IT Related</a></li>
                                </ul>
                            </div>
                            <!-- End sidebar tags-->
                            <br>
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


                        </div>
                        <!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section>
        <!-- End Blog Details Section -->

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
    <script src="comment.js"></script>

</body>

</html>