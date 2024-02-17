<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string ($con, $_POST['firstname']);
    $lname = mysqli_real_escape_string ($con, $_POST['lastname']);
    $email = mysqli_real_escape_string ($con, $_POST['email']);
    $random_id = mysqli_real_escape_string ($con, $_POST['user_id']);
    $comment = mysqli_real_escape_string ($con, $_POST['comment']);

    if(!empty($fname) || !empty($lname) || !empty($email) || !empty($comment)){

        
        $dateTime = date("Y-m-d");

        
        $sql2 = mysqli_query($con, "INSERT INTO comment (unique_id, fname, lname, email, comment, date) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$comment}', '{$dateTime}')");

        $sql3 = mysqli_query($con, "UPDATE posts SET views =views+1 WHERE user_id='{$random_id}'");
        
        if($sql2){ //if these data inserted
            echo "success";    
        }else {
            echo "Something went wrong";
        }
                       
    }else{
        echo "All input field are required";
    }
?>
