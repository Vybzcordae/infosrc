<?php
    session_start();
    include_once "config/db.php";
    $fname = mysqli_real_escape_string ($conn, $_POST['filename']);
    $desc = mysqli_real_escape_string ($conn, $_POST['description']);

        if(!empty($fname) && !empty($desc)){
            $sql = mysqli_query($conn, "SELECT name FROM uploads WHERE name = '{$fname}'");
            if(mysqli_num_rows($sql) > 0){ //if email already exists
                echo "$fname - This file already exists!";
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
                        //move the uploaded image to a specific folder
                        $new_img_name = $time.$img_name;

                        if(move_uploaded_file($tmp_name, "uploads/".$new_img_name)){ // if user upload img move to our folder successfully
                            if(isset($_FILES['file'])) { //if file is uploaded
                                $file_name = $_FILES['file']['name']; //getting user uploaded image name
                                $tmp_filename = $_FILES['file']['tmp_name']; //this temporary name is used to save/move file in our folder
            
                                //exploding image and getting the last extension like jpg png
                                $file_explode = explode('.', $file_name);
                                $file_ext = end($file_explode); //here we get the extension of an user uploaded img file
            
                                $extension = ['apk', 'exe', 'rar', 'iso', 'zip']; //valid img extensions stored in the array
                                if(in_array($file_ext, $extension) === true){ //if user uploaded img ext is matched with array ext
                                    $time = time(); //return the current time since in our db we will use time as unique id
        
                                    if(move_uploaded_file($tmp_filename, "uploads/".$file_name)){ // if user upload img move to our folder successfully
                                        $random_id = rand(time(), 10000000); //creating random id for user

                                        //lets insert all user data inside table
                                        $sql2 = mysqli_query($conn, "INSERT INTO uploads(unique_id, name, description, image, type, file) VALUES ({$random_id}, '{$fname}', '{$desc}', '{$new_img_name}', 'Application', '{$file_name}')");
                                        echo "success";
                                    }else{
                                        echo "File not uploaded!";
                                    }
                        
                                }else{
                                    echo "Please select a file = exe, apk, iso, zip!";
                                }
                            }else{
                                echo "Please select a file";
                            }
                            
                        }
                        else{
                            echo "Image not moved!";
                        }
                        
                    }else{
                        echo "Please select an image file = jpeg, jpg, png!";
                    }
                }else{
                    echo "Please select an image";
                }
            }
        }else{
            echo "All inputs are required";
        }
    
?>