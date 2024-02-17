<?php
require("../../config/db.php");

session_start();
error_reporting(0);

$registerStatus = array();
if(checkUserSession($db) !== True){
	if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["re_password"])){
		$firstName 		= (string)$_POST["firstName"];
		$lastName 		= (string)$_POST["lastName"];
		$email 		= (string)$_POST["email"];
		$username 		= (string)$_POST["username"];
		$password 		= md5((string)$_POST["password"]);
		$re_password 	= md5((string)$_POST["re_password"]);
		$user = searchUser_bSession($db, $_COOKIE["user_session"]);
		
		$firstName = preg_replace('/\s+/', ' ', $firstName);
		$lastName = preg_replace('/\s+/', ' ', $lastName);
		$blackList = ["admin", "administrator", "gm", "fuck", "nigga", "faggot"];
		
		if(strlen($password) >= 6){
			if(0 < count(array_intersect(array_map('strtolower', explode(' ', $username)), $blackList)) || 
			   0 < count(array_intersect(array_map('strtolower', explode(' ', $firstName)), $blackList)) || 
			   0 < count(array_intersect(array_map('strtolower', explode(' ', $lastName)), $blackList))){
					$registerStatus = array("success" => false, "message" => "Your name or username contains the banned word(s)");	
				} else { 
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
						$sql1 = mysqli_query($db, "SELECT email FROM user WHERE email = '{$email}'");
						if(mysqli_num_rows($sql1) > 0){ 
							$registerStatus = array("success" => false, "message" => "This E-mail already exists. Please try another one!");
						}else{
							if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username))
							{
								if(strpos($username, " ") === False){
									if($password === $re_password){
										$sql = mysqli_query($db, "select * from user where username = '$username'") or die(json_encode(array("success" => false, "message" => "Error sql query")));
									
										if(mysqli_num_rows($sql) < 1){
											$userSession = md5($username.$password.(time() / 2));
											$dateTime = date("Y-m-d H:i:s");
											if(isset($_FILES['image'])) { 
												$img_name = $_FILES['image']['name'];
												$tmp_name = $_FILES['image']['tmp_name']; 
												$img_explode = explode('.', $img_name);
												$img_ext = end($img_explode); 
												$extensions = ['png', 'jpeg', 'jpg']; 
												if(in_array($img_ext, $extensions) === true){ 
													$time = time(); 
													$new_img_name = $time.$img_name;
							
													if(move_uploaded_file($tmp_name, "../../../Admin/php/images/".$new_img_name)){ 
														
																	$random_id = rand(time(), 10000000); 
																	$dateTime = date("Y-m-d H:i:s");
														
																	mysqli_query($db, "INSERT INTO user(unique_id, firstName, lastName, email,profilePicture, username, password, session, admin,verified,joined_time) VALUES ({$random_id}, '{$firstName}', '{$lastName}','{$email}', '{$new_img_name}', '{$username}', '{$password}', 			'{$userSession}', 0, 1, '{$dateTime}')");
														
																	$cookie_name = "user_name";
																	$cookie_value = $username;
																	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400s = 			1 day. 1 * 30 = 30 days
														
																	$cookie_name = "user_session";
																	$cookie_value = $userSession;
																	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400s = 			1 day. 1 * 30 = 30 days
														
																	$registerStatus = array("success" => true, "message" => "Register success");
													}else{
														$registerStatus = array("success" => false, "message" => "Image not moved. Please try again!");
													}
												}else{
													$registerStatus = array("success" => false, "message" => "Temp image not created. Please try again!");
												}
											}else{
												$registerStatus = array("success" => false, "message" => "Account already exists. Please try again!");
											}
										} else {
											$registerStatus = array("success" => false, "message" => "Account already exists. Please try again!");
										}
									
									} else {
										$registerStatus = array("success" => false, "message" => "Re-password doesn't match!");
									}
								} else {
									$registerStatus = array("success" => false, "message" => "Username can't contain spaces!");
								}
							} else {
								$registerStatus = array("success" => false, "message" => "Username doesn't accept special characters");
							}
						}
					}
				}
			} else {
			$registerStatus = array("success" => false, "message" => "Password must be 6 characters or more!");
		}
		
	} else {
		$registerStatus = array("success" => false, "message" => "Empty method");
	}
} else {
	$registerStatus = array("success" => false, "message" => "Require login");
}

echo json_encode($registerStatus);