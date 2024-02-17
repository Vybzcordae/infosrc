<?php
    session_start();
    include_once "config/db.php";
    $OTP = mysqli_real_escape_string ($conn, $_POST['OTP']);
    
    if(!empty($OTP)){    
        $dateTime = date("Y-m-d");
        $time = time();
        $sql = mysqli_query($conn, "SELECT password FROM admin WHERE password = '{$OTP}'");
        if(mysqli_num_rows($sql) > 0){ //if email already exists
            echo "$OTP - This username already exists!";
        }else{

            $sql4 = mysqli_query($conn, "INSERT INTO admin(unique_id, firstName, lastName, profilePicture, username, password, session, admin,verified,joined_time, about, company, job, country, address, phone, email, twitter, facebook, instagram, linkedin) VALUES (1, 'Not set', 'Not set', 'Not set', 'Not set', '{$OTP}', 'Not set', 1, 1, '{$time}', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set', 'Not set')");
            
            if($sql4){ //if these data inserted
                echo "success";    
            }else {
                echo "Something went wrong";
            }
        }
    }else{
        echo "Please select an image file = jpeg, jpg, png!";
    }
?>
