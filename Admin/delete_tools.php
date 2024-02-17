<?php
    session_start();
    include_once "config/db.php";

    $user_id = $_GET["user_id"];

    $sql2 = mysqli_query($conn, "DELETE FROM uploads WHERE unique_id = '{$user_id}'");
    if($sql2){
        echo "<script>alert('Tool Deleted successfully !!');window.location='tables-general.php'</script>";
    }
?>