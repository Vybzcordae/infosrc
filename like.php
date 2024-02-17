<?php
    session_start();
    include_once "config.php";

    $user_id = $_GET["user_id"];

    $sql2 = mysqli_query($con, "UPDATE comment SET likes=likes+1 WHERE id=$user_id");
    if($sql2){
        echo "<script>history.go(-1)</script>";
    }
?>
