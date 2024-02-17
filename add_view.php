<?php
    session_start();
    include_once "config.php";

    $sql = mysqli_query($con, "UPDATE posts SET views =views+1");
?>