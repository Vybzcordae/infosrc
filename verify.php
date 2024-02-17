<?php
    session_start();
    error_reporting(0);
    include_once "config.php";
    $fname = mysqli_real_escape_string ($con, $_POST['firstname']);
    $lname = mysqli_real_escape_string ($con, $_POST['lastname']);
    $topic = mysqli_real_escape_string ($con, $_POST['topic']);
    $field = mysqli_real_escape_string ($con, $_POST['Field']);
    $message = mysqli_real_escape_string ($con, $_POST['message']);

    if(!empty($fname) && !empty($lname) && !empty($topic) && !empty($message)){
            $blackList = ["admin", "administrator", "gm", "fuck", "nigga", "faggot"];
			if(0 < count(array_intersect(array_map('strtolower', explode(' ', $fname)), $blackList)) || 
			   0 < count(array_intersect(array_map('strtolower', explode(' ', $lname)), $blackList)) || 
			   0 < count(array_intersect(array_map('strtolower', explode(' ', $topic)), $blackList)) ||
               0 < count(array_intersect(array_map('strtolower', explode(' ', $field)), $blackList)) || 
			   0 < count(array_intersect(array_map('strtolower', explode(' ', $message)), $blackList))){
             echo "You entered an inappropriate word !!";
			}else {
                    //lets check user upload file or not
                if(isset($_FILES['image'])) { //if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting user uploaded image name
                    $tmp_name = $_FILES['image']['tmp_name']; 
                    //exploding image and getting the last extension like jpg png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); //here we get the extension of an user uploaded img file
                    $dateTime = date("Y-m-d");

                    $extensions = ['png', 'jpeg', 'jpg']; //valid img extensions stored in the array
                    if(in_array($img_ext, $extensions) === true){ //if user uploaded img ext is matched with array 
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                            $random_id = rand(time(), 10000000);
                            $sql2 = mysqli_query($con, "INSERT INTO posts (unique_id, fname, lname, topic, Field,  message, img, date)
                                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$topic}', '{$field}', '{$message}', '{$new_img_name}', '{$dateTime}')");
                            if($sql2){ //if these data inserted
                                 echo "success";    
                            }else {
                                echo "Something went wrong";
                            }
                        }    
                    }else{
                        echo "Please select an image file = jpeg, jpg, png!";
                    }
                }else{
                    echo "Please select an image file";
                }
            }
    }else{
        echo "Please fill all the inputs !!";
    }
?>
