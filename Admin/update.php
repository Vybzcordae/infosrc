<?php
    session_start();
    include_once "config/db.php";
    $fname = mysqli_real_escape_string ($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string ($conn, $_POST['lname']);
    $uname = mysqli_real_escape_string ($conn, $_POST['uname']);
    $password = mysqli_real_escape_string ($conn, $_POST['password']);

    $user_id = $_GET["user_id"];//creating random id for user

    if(!empty($fname) && !empty($lname) && !empty($uname) && !empty($password)){
                    if(strlen($password) >= 6){


                        //lets insert all user data inside table
                        $sql2 = mysqli_query($conn, "UPDATE user SET firstName= '{$fname}', lastName= '{$lname}', username ='{$uname}', password='{$password}' WHERE id='{$user_id}'");

                        if($sql2){ //if these data inserted
                            echo "<script>alert('User details updated successfully !!'); window.location='tables-general.php'</script>";
                        }else {
                            echo "<script>alert('Update failed !!'); window.location='tables-general.php'</script>";
                        }
                    }else{
                        echo "<script>alert('Password must be 6 characters or more !!'); window.location='tables-general.php'</script>";
                    }
    }else{
        echo "<script>alert('All inputs are required !!'); window.location='tables-general.php'</script>";
    }
        
    
?>