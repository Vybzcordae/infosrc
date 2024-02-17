<?php 
session_start();
include_once "../config/db.php";
	if(isset($_POST['re_password'])){
		$username=mysqli_real_escape_string ($conn, $_POST['username']);
		$old_pass=mysqli_real_escape_string ($conn, $_POST['old_pass']);
		$new_pass=mysqli_real_escape_string ($conn, $_POST['new_pass']);
		$re_pass=mysqli_real_escape_string ($conn, $_POST['re_pass']);

		if(!empty($old_pass) && !empty($new_pass) && !empty($re_pass)){
			$sql=mysqli_query($conn, "select * from admin where username='{$username}' AND password='{$old_pass}'");
			if(mysqli_num_rows($sql) === 1){
				if($new_pass == $re_pass) {
					if(strlen($new_pass) >=6){
						$sql1=mysqli_query($conn, "UPDATE user SET password='{$new_pass}' WHERE username='{$username}'");
						$sql2=mysqli_query($conn, "UPDATE admin SET password='{$new_pass}' WHERE username='{$username}'");
						echo "<script>alert('Update Successfully'); window.location='../users-profile.php'</script>";
					} else {
						echo "<script>alert('Password should have 6 characters'); window.location='../users-profile.php'</script>";
					}
				} else {
					echo "<script>alert('Your new and Retype Password is not match'); window.location='../users-profile.php'</script>";
				}
			}else {
				echo "<script>alert('Check if your username or current password is correct'); window.location='../users-profile.php'</script>";
			}
		}else {
			echo "<script>alert('All inputs are required'); window.location='../users-profile.php'</script>";
		}
	}
?>
