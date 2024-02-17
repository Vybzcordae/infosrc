<?php
    $con = mysqli_connect("localhost", "root", "", "chat");
    if(!$con){
        echo "Database Not Connected" .mysqli_connect_error();
    }
?>