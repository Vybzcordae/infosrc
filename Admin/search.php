<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Contact - NiceAdmin Bootstrap Template</title>
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


<?php
include_once "config/db.php";
$name_search = mysqli_real_escape_string ($conn, $_POST['name_search']);
if(!empty($name_search)){
	
	$query = mysqli_query($conn, "select * from user WHERE username='{$name_search}' AND admin='0'"); //$_HOME_FILE --> /config/value.php
	if(mysqli_num_rows($query) > 0){
		$name_data = mysqli_fetch_array($query);
					
	} else {
		echo "<script>alert('No User with this name !!'); window.location='index.php'</script>";
	}
}else {
	echo "<script>alert('Please enter User name !!'); window.location='index.php'</script>";
}
?>
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
            <h1>Search results (<?php echo mysqli_num_rows($query) ?>)</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Search results</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
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
                                    <h5 class="card-title">Users <span>| Today</span></h5>

                                    <table class="table table-borderless ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-primary">Profile</th>
                                                <th scope="col" class="text-primary">Full Name</th>
                                                <th scope="col" class="text-primary">User Name</th>
                                                <th scope="col" class="text-primary">Password</th>
                                                <th scope="col" class="text-primary">User ID</th>
                                                <th scope="col" class="text-primary">Delete</th>
                                                <th scope="col" class="text-primary">Update</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table_users">
                                        <tr>
                                            <th scope="row">
                                                <img src="php/images/<?= !empty($name_data["profilePicture"]) ? $name_data["profilePicture"] : "0"; ?>" height = "40px" width = "40px" alt="">
                                            </th>
                                            <td class=" fw-bold"><?= !empty($name_data["firstName"]) ? $name_data["firstName"] : "0"; ?> <?= !empty($name_data["lastName"]) ? $name_data["lastName"] : "0"; ?></td>
                                            <td><?= !empty($name_data["username"]) ? $name_data["username"] : "0"; ?></td>
                                            <td class="fw-bold"><?= !empty($name_data["password"]) ? $name_data["password"] : "0"; ?></td>
                                            <td><?= !empty($name_data["id"]) ? $name_data["id"] : "0"; ?></td>
                                            <td>
                                                <div>
                                                    <a href="delete.php?user_id=<?= !empty($name_data["id"]) ? $name_data["id"] : "0"; ?>"><button type="submit" class="btn btn-danger btn-sm submit"><i class="bi-basket"></i></button></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="pages-update.php?user_id=<?= !empty($name_data["id"]) ? $name_data["id"] : "0"; ?>"><button type="submit" class="btn btn-primary btn-sm submit"><i class="bi-pencil"></i></button></a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Top Selling -->

                    </div>
                </div>

            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
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

</body>

</html>