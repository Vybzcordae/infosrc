<?php
    session_start();
    include_once "../config.php";

    $user_id = $_GET["user_id"];

    $sql2 = mysqli_query($con, "DELETE FROM posts WHERE user_id = '{$user_id}'");
    if($sql2){
        echo "<script>alert('Post Deleted successfully !!');window.location='tables-general.php'</script>";
    }
?>