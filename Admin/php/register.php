<?php
    session_start();
    include_once "../config/db.php";
    $fname = mysqli_real_escape_string ($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string ($conn, $_POST['lname']);
    $email = mysqli_real_escape_string ($conn, $_POST['email']);
    $uname = mysqli_real_escape_string ($conn, $_POST['uname']);
    $password = mysqli_real_escape_string ($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($uname) && !empty($password)){
        if(isset($_POST['terms'])){
            $sql = mysqli_query($conn, "SELECT username FROM user WHERE username = '{$uname}'");
            if(mysqli_num_rows($sql) > 0){ //if email already exists
                echo "$uname - This username already exists!";
            }else{
                //lets check user upload file or not
                if(isset($_FILES['image'])) { //if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting user uploaded image name
                    $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder

                    //exploding image and getting the last extension like jpg png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); //here we get the extension of an user uploaded img file

                    $extensions = ['png', 'jpeg', 'jpg']; //valid img extensions stored in the array
                    if(in_array($img_ext, $extensions) === true){ //if user uploaded img ext is matched with array ext
                        $time = time(); //return the current time since in our db we will use time as unique id

						$userSession = md5($uname.$password.(time() / 2));

                        //move the uploaded image to a specific folder
                        $new_img_name = $time.$img_name;

                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ // if user upload img move to our folder successfully
                            $sqli = mysqli_query($conn, "SELECT password FROM admin where password='{$password}'");
                            if($sqli){
                                $random_id = rand(time(), 10000000); //creating random id for user

                                //lets insert all user data inside table
                                $sql2 = mysqli_query($conn, "INSERT INTO user(unique_id, firstName, lastName, email, profilePicture, username, password, session, admin,verified,joined_time) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$new_img_name}', '{$uname}', '{$password}', '{$userSession}', 1, 1, '{$time}')");
                                $sql4 = mysqli_query($conn, "UPDATE admin SET unique_id={$random_id}, firstName='{$fname}', lastName='{$lname}', profilePicture='{$new_img_name}', username='{$uname}', password='{$password}', session='{$userSession}', admin=1,verified=1,joined_time='{$time}', email='{$email}' WHERE password='{$password}'");
                                echo "success";

                                $cookie_name = "user_name";
                                $cookie_value = $uname;
                                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400s = 			1 day. 1 * 30 = 30 days

                                $cookie_name = "user_session";
                                $cookie_value = $userSession;
                                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400s = 			1 day. 1 * 30 = 30 days
                                if($sql2){ //if these data inserted
                                    $sql3 = mysqli_query($conn, "SELECT * FROM user WHERE username = '{uname}'");
                                    if(mysqli_num_rows($sql3) > 0) {
                                        $row = mysqli_fetch_assoc($sql3);
                                        $_SESSION['unique_id'] = $row['unique_id']; //we used unique id from another php file
                                        echo "success";
                                        
                                     }
                                }else {
                                    echo "Something went wrong";
                                }
                                if($sql4){ //if these data inserted
                                    $sql5 = mysqli_query($conn, "SELECT * FROM user WHERE username = '{uname}'");
                                    if(mysqli_num_rows($sql3) > 0) {
                                        $ro = mysqli_fetch_assoc($sql5);
                                        $_SESSION['unique_id'] = $ro['unique_id']; //we used unique id from another php file
                                        echo "success";
                                        
                                     }
                                }else {
                                    echo "Something went wrong";
                                }
                            }else{
                                echo "OTP Code is wrong";
                            }
                            
                        }
                        
                    }else{
                        echo "Please select an image file = jpeg, jpg, png!";
                    }
                }else{
                    echo "Please select an image";
                }
            }
        }else{
            echo "Please agree to our terms and conditions";
        }
    }else{
        echo "All inputs are required";
    }
        
    
?>