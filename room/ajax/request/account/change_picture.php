<?php
require("../../../config/db.php");

session_start();
error_reporting(0);

$changeStatus = array();

if(checkUserSession($db) !== False){
	if(isset($_FILES['image'])) { 
		$img_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name']; 
		$img_explode = explode('.', $img_name);
		$img_ext = end($img_explode); 
		$extensions = ['png', 'jpeg', 'jpg']; 
		if(in_array($img_ext, $extensions) === true){ 
			$time = time(); 
			$new_img_name = $time.$img_name;
			if(move_uploaded_file($tmp_name, "../../../../Admin/php/images/".$new_img_name)){ 
				$user = searchUser_bSession($db, $_COOKIE["user_session"]);
				mysqli_query($db, "UPDATE user SET profilePicture = '$new_img_name' WHERE username = '{$user["username"]}'") or die(json_encode(array("success" => false, "message" => "Error update sql query")));
				mysqli_query($db, "UPDATE admin SET profilePicture = '$new_img_name' WHERE username = '{$user["username"]}'") or die(json_encode(array("success" => false, "message" => "Error update sql query")));
				
				$changeStatus = array("success" => true, "message" => "Profile picture changed, please reload page to see new change.");
			} else {
				$changeStatus = array("success" => false, "message" => "Invalid Image/Picture URL!");
			}
		} else {
			$changeStatus = array("success" => false, "message" => "Empty data");
		}
	} else {
		$changeStatus = array("success" => false, "message" => "Require login");
	}
}
echo json_encode($changeStatus);