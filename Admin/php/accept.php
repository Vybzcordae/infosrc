<?php
    session_start();
    include_once "../config/db.php";
    
    $query = mysqli_query($conn, "INSERT INTO request_join SELECT * FROM request_join_admin");
    echo "success";
    if($query){
        $query1 = mysqli_query($conn, "DELETE FROM request_join_admin");
    }
?>