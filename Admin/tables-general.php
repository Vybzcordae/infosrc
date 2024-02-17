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

  <title>Tables / General - NiceAdmin Bootstrap Template</title>
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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

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
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.php" class="active">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

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
      </li><!-- End Icons Nav --><br>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../room/home.php">
          <i class="bi bi-card-list"></i>
          <span>Chat Room</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.php">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.php">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users Table</h5>

              <!-- Default Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody class="table1">
                  <?php
                    include_once "config/db.php";
                    $query = mysqli_query($conn, "SELECT * FROM user where admin=0");

                    while($ro = mysqli_fetch_array($query)):
                  ?>
                  <tr>
                      <th scope="row"><?= !empty($ro["id"]) ? $ro["id"] : "null"; ?></th>
                      <td><?= !empty($ro["firstName"]) ? $ro["firstName"] : "null"; ?> <?= !empty($ro["lastName"]) ? $ro["lastName"] : "null"; ?></td>
                      <td><?= !empty($ro["username"]) ? $ro["username"] : "null"; ?></td>
                      <td><?= !empty($ro["joined_time"]) ? $ro["joined_time"] : "null"; ?></td>
                      <td>
                        <div class="text-center">
                          <button type="submit" class="btn btn-danger btn-sm submit"><a href="delete.php?user_id=<?= !empty($ro["id"]) ? $ro["id"] : "null"; ?>">Delete</a></button>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-sm submit"><a href="pages-update.php?user_id=<?= !empty($ro["id"]) ? $ro["id"] : "null"; ?>">Update</a></button>
                        </div>
                      </td>
                  </tr>
                  <?php endwhile;
                    if(mysqli_num_rows($query) < 1){
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tools Table</h5>

              <!-- Default Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                  </tr>
                </thead>
                <tbody class="table11">
                <?php
                    include_once "config/db.php";
                    $query = mysqli_query($conn, "SELECT * FROM uploads");
                    while($ro = mysqli_fetch_array($query)):
                ?>
                <tr>
                    <td><?= !empty($ro["name"]) ? $ro["name"] : "null"; ?></td>
                    <td><?= !empty($ro["description"]) ? $ro["description"] : "null"; ?></td>
                    <td><?= !empty($ro["type"]) ? $ro["type"] : "null"; ?></td>
                    <td>
                      <div class="text-center">
                        <button type="submit" class="btn btn-danger btn-sm submit"><a href="delete_tools.php?user_id=<?= !empty($ro["unique_id"]) ? $ro["unique_id"] : "null"; ?>">Delete</a></button>
                      </div>
                    </td>
                </tr>
                <?php endwhile;
                  if(mysqli_num_rows($query) < 1){
                  }
                ?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
          </div>
        <div class="col-lg-6">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Posts Table</h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody class="posts">
                <?php
                    include_once "../config.php";
                    $query = mysqli_query($con, "SELECT * FROM posts");
                    while($ro = mysqli_fetch_array($query)):
                ?>
                <tr>
                  <th scope="row"><?= !empty($ro["fname"]) ? $ro["fname"] : "null"; ?> <?= !empty($ro["lname"]) ? $ro["lname"] : "null"; ?></th>
                  <td><?= !empty($ro["topic"]) ? $ro["topic"] : "null"; ?></td>
                  <td><?= !empty($ro["date"]) ? $ro["date"] : "null"; ?></td>
                  <td>
                    <div class="text-center">
                      <button type="submit" class="btn btn-danger btn-sm submit"><a href="delete_post.php?user_id=<?= !empty($ro["user_id"]) ? $ro["user_id"] : "null"; ?>">Delete</a></button>
                    </div>
                  </td>
                </tr>
                <?php endwhile;
                  if(mysqli_num_rows($query) < 1){
                  }
                ?>
                </tbody>
              </table>
              <!-- End Bordered Table -->


            </div>

        </div>
      

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
    &copy; Copyright <strong><span>InfoSrc</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

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