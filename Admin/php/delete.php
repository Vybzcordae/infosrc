<?php
    session_start();
    include_once "../config/db.php";

    $sql = mysqli_query($conn, "UPDATE admin SET profilePicture ='2.png'");
    $sql1 = mysqli_query($conn, "UPDATE user SET profilePicture ='2.png'");
?>