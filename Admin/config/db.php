<?php
    $conn = mysqli_connect("localhost", "root", "", "chatapplication");
    if(!$conn){
        echo "Database Connected" .mysqli_connect_error();
    }
?>