<?php
    session_start();
    include_once "../config/db.php";
    $fname = mysqli_real_escape_string ($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string ($conn, $_POST['lname']);
    $uname = mysqli_real_escape_string ($conn, $_POST['uname']);
    $about = mysqli_real_escape_string ($conn, $_POST['about']);
    $company = mysqli_real_escape_string ($conn, $_POST['company']);
    $job = mysqli_real_escape_string ($conn, $_POST['job']);
    $country = mysqli_real_escape_string ($conn, $_POST['country']);
    $address = mysqli_real_escape_string ($conn, $_POST['address']);
    $phone = mysqli_real_escape_string ($conn, $_POST['phone']);
    $email = mysqli_real_escape_string ($conn, $_POST['email']);
    $twitter = mysqli_real_escape_string ($conn, $_POST['twitter']);
    $facebook = mysqli_real_escape_string ($conn, $_POST['facebook']);
    $instagram = mysqli_real_escape_string ($conn, $_POST['instagram']);
    $linkedin = mysqli_real_escape_string ($conn, $_POST['linkedin']);
    
    //lets insert all user data inside table
    if(!empty($fname)){
        $sql = mysqli_query($conn, "UPDATE admin SET firstName ='{$fname}' WHERE admin=1");
        $sql1 = mysqli_query($conn, "UPDATE user SET firstName ='{$fname}' WHERE admin=1");
    }else {
        echo "first name not updated";
    }
    if(!empty($lname)){
        $sql = mysqli_query($conn, "UPDATE admin SET lastName ='{$lname}' WHERE admin=1");
        $sql1 = mysqli_query($conn, "UPDATE user SET lastName ='{$lname}' WHERE admin=1");
    }else {
        echo "last name not updated";
    }
    if(!empty($uname)){
        $sql = mysqli_query($conn, "UPDATE admin SET username ='{$uname}' WHERE admin=1");
        $sql1 = mysqli_query($conn, "UPDATE user SET username ='{$uname}' WHERE admin=1");
    }else {
        echo "user name not updated";
    }
    if(!empty($about)){
        $sql = mysqli_query($conn, "UPDATE admin SET about ='{$about}' WHERE admin=1");
    }else {
        echo "about not updated";    
    }
    if(!empty($company)){
        $sql = mysqli_query($conn, "UPDATE admin SET company ='{$company}' WHERE admin=1");
    }else {
        echo "company not updated";    
    } 
    if(!empty($job)){
        $sql = mysqli_query($conn, "UPDATE admin SET job ='{$job}' WHERE admin=1");
    }else {
        echo "job not updated";    
    }    
    if(!empty($country)){
        $sql = mysqli_query($conn, "UPDATE admin SET country ='{$country}' WHERE admin=1");
    }else {
        echo "country not updated";    
    } 
    if(!empty($address)){
        $sql = mysqli_query($conn, "UPDATE admin SET address ='{$address}' WHERE admin=1");
    }else {
        echo "address not updated";    
    } 
    if(!empty($phone)){
        $sql = mysqli_query($conn, "UPDATE admin SET phone ='{$phone}' WHERE admin=1");
    }else {
        echo "phone not updated";    
    } 
    if(!empty($email)){
        $sql = mysqli_query($conn, "UPDATE admin SET email ='{$email}' WHERE admin=1");
    }else {
        echo "email not updated";    
    }
    if(!empty($twitter)){
        $sql = mysqli_query($conn, "UPDATE admin SET twitter ='{$twitter}' WHERE admin=1");
    }else {
        echo "twitter not updated";    
    }  
    if(!empty($facebook)){
        $sql = mysqli_query($conn, "UPDATE admin SET facebook ='{$facebook}' WHERE admin=1");
    }else {
        echo "facebook not updated";    
    } 
    if(!empty($instagram)){
        $sql = mysqli_query($conn, "UPDATE admin SET instagram ='{$instagram}' WHERE admin=1");
    }else {
        echo "instagram not updated";    
    } 
    if(!empty($linkedin)){
        $sql = mysqli_query($conn, "UPDATE admin SET linkedin ='{$linkedin}' WHERE admin=1");
    }else {
        echo "linkedin not updated";    
    } 
    if(isset($_FILES['image'])) { //if file is uploaded
        $img_name = $_FILES['image']['name']; //getting user uploaded image name
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode); 
        $extensions = ['png', 'jpeg', 'jpg']; //valid img extensions stored in the array
        if(in_array($img_ext, $extensions) === true){ 
            $time = time();
            $new_img_name = $time.$img_name;

            if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ 
                $random_id = rand(time(), 10000000); //creating random id for user
                $sql = mysqli_query($conn, "UPDATE admin SET profilePicture ='{$new_img_name}' WHERE admin=1");
                $sql1 = mysqli_query($conn, "UPDATE user SET profilePicture ='{$new_img_name}' WHERE admin=1");
            }else {
                echo "Please select an image file = jpeg, jpg, png!";
            }             
        }else{
                echo "Please select an image file = jpeg, jpg, png!";
            }
    }else{
        echo "Please select an image";
    }



?>