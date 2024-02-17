<?php
    session_start();
    include_once "../config/db.php";
    $uname = mysqli_real_escape_string ($conn, $_POST['uname']);
    $password = mysqli_real_escape_string ($conn, $_POST['password']);

    if (!empty($uname) && !empty($password)){// checking if email and password match those from the database
        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username ='{$uname}' AND password = '{$password}' AND admin = 1");
        if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id']; //using unique id in other php file
            echo "success";
        }else{
            echo "Username or Password is incorrect";
        }

    }else{
        echo "All input fields are required";
    }
?>