<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: pages-login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>InfoSrc Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
        require("header.php");
    ?>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
            <a href="forms-elements.php">
              <i class="bi bi-circle"></i><span>Posts</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.php">
              <i class="bi bi-circle"></i><span>Uploads</span>
            </a>
          </li>
                </ul>
            </li>
            <!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.php">
                            <i class="bi bi-circle"></i><span>General Tables</span>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.php">
                            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.php">
                            <i class="bi bi-circle"></i><span>Remix Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.php">
                            <i class="bi bi-circle"></i><span>Boxicons</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Icons Nav --><br>

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.php">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="../room/home.php">
                    <i class="bi bi-card-list"></i>
                    <span>Chat Room</span>
                </a>
            </li>
            <!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-error-404.php">
                    <i class="bi bi-dash-circle"></i>
                    <span>Error 404</span>
                </a>
            </li>
            <!-- End Error 404 Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.php">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li>
            <!-- End Blank Page Nav -->

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span>Log Out</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Downloads Card -->
                        <div class="col-xxl-4 col-md-6">
                            
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                <?php
                                    include_once "config/db.php";
                                    $sql = mysqli_query($conn, "SELECT DISTINCT room_member.user_id from room_member INNER JOIN chat_room ON room_member.room_id=chat_room.room_id UNION SELECT DISTINCT room_member.user_id from room_member INNER JOIN chat_room ON room_member.room_id=chat_room.room_id");
                                ?>
                                    <h5 class="card-title">Chatroom Users <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo mysqli_num_rows($sql) ?></h6>
                                            <span class="text-danger small pt-1 fw-bold"><?php echo mysqli_num_rows($sql)/100*10?>%</span> <span class="text-muted small pt-2 ps-1">Increase</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                <?php
                                    include_once "../config.php";
                                    $sql = mysqli_query($con, "SELECT * FROM posts");
                                    

                                ?>
                                    <h5 class="card-title">Posts <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-receipt-cutoff"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo mysqli_num_rows($sql)?></h6>
                                            <span class="text-success small pt-1 fw-bold"><?php echo mysqli_num_rows($sql)/100*10?>%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Revenue Card -->

                        <!-- End Customers Card -->

                        <div class="col-12 room">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Rooms <span>| This Year</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-primary">#</th>
                                                <th scope="col" class="text-primary">Owner</th>
                                                <th scope="col" class="text-primary">Room Name</th>
                                                <th scope="col" class="text-primary">Room Description</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table_rooms">
                                        <?php
                                            include_once "config/db.php";
                                            $quer = mysqli_query($conn, "SELECT chat_room.room_id, chat_room.room_name, chat_room.room_description, user.username, user.firstName, user.lastName FROM chat_room INNER JOIN user ON chat_room.owner = user.id");

                                            while($ro = mysqli_fetch_array($quer)):
                                        ?>
                                        <tr>
                                            <th scope="row"><?= !empty($ro["room_id"]) ? $ro["room_id"] : "null"; ?></th>
                                            <td><?= !empty($ro["firstName"]) ? $ro["firstName"] : "null"; ?> <?= !empty($ro["lastName"]) ? $ro["lastName"] : "null"; ?></td>
                                            <td><?= !empty($ro["room_name"]) ? $ro["room_name"] : "null"; ?></td>
                                            <td><?= !empty($ro["room_description"]) ? $ro["room_description"] : "null"; ?></td>
                                        </tr>
                                        <?php endwhile;
                                            if(mysqli_num_rows($quer) < 1){
                                            }
                                        ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0 ">
                                    <h5 class="card-title">Registered Users <span>| This Year</span></h5>

                                    <table class="table table-borderless ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-primary">User ID</th>
                                                <th scope="col" class="text-primary">Picture</th>
                                                <th scope="col" class="text-primary">Full Name</th>
                                                <th scope="col" class="text-primary">User Name</th>
                                                <th scope="col" class="text-primary">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table_users">
                                        <?php
                                            include_once "config/db.php";
                                            $query = mysqli_query($conn, "SELECT * FROM user where admin=0");

                                            while($ro = mysqli_fetch_array($query)):
                                        ?>
                                            <tr>          
                                                <td><?= !empty($ro["id"]) ? $ro["id"] : "null"; ?></td>
                                                <th scope="row">
                                                    <img src="php/images/<?= !empty($ro["profilePicture"]) ? $ro["profilePicture"] : "null"; ?>" height = "40px" width = "40px" alt="">
                                                </th>
                                                <td class=" fw-bold"><?= !empty($ro["firstName"]) ? $ro["firstName"] : "null"; ?> <?= !empty($ro["lastName"]) ? $ro["lastName"] : "null"; ?></td>
                                                <td><?= !empty($ro["username"]) ? $ro["username"] : "null"; ?></td>
                                                <td><?= !empty($ro["email"]) ? $ro["email"] : "null"; ?></td>
                                            </tr>
                                        <?php endwhile;
                                            if(mysqli_num_rows($query) < 1){
                                            }
                                        ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Top Selling -->

                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4 recent">


                    <!-- End Recent Activity -->

                    <!-- News & Updates Traffic -->
                    <div class="card ">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                        
                        <div class="card-body pb-0 " >
                            <h5 class="card-title">Recent Posts <span>| This Year</span></h5>
                            <div class="recent-post">
                            <?php
                                    $query = mysqli_query($con, "SELECT * FROM posts ORDER BY user_id DESC LIMIT 3");

                                    while($ro = mysqli_fetch_array($query)):
                                ?>
                                <div class="news">

                                    <div class="post-item clearfix">
                                        <img src="../images/<?= !empty($ro["img"]) ? $ro["img"] : "null"; ?>" alt="">
                                        <h4><a href="../post-details.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>"><?= !empty($ro["topic"]) ? $ro["topic"] : "null"; ?></a></h4>
                                        <p><?= !empty($ro["date"]) ? $ro["date"] : "null"; ?></p>
                                    </div>
                               
                                </div>
                                <?php endwhile;
                                    if(mysqli_num_rows($query) < 1){
                                        echo "You don't have any post !!";
                                    }
                                ?>
                                <!-- End sidebar recent posts-->

                            </div>
                        </div>
                        
                    </div>
                    <!-- End News & Updates -->
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                            <?php
                                include_once "config/db.php";
                                $sql1 = mysqli_query($conn, "SELECT * FROM uploads");
                            ?>
                        <div class="card-body">
                            <h5 class="card-title">Tools <span>| This Year</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bx bxs-download"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?php echo mysqli_num_rows($sql1)?> Items</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>

                    </div>                    



                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
        &copy; Copyright <strong><span>InfoSrc</span></strong>. All Rights Reserved
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="signup.js"></script>

</body>

</html>