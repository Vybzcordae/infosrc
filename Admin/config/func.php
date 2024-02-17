<?php
/**
 * Return user info by username.
 *
 * @param mysqli	 	$db
 * @param string 		$usrename
 *
 * @return array
 **/
function searchUser_bUsername($db, $username){
	if(!empty($username) && !mysqli_error($db)){
		$sql = mysqli_query($db, "select id,firstName,lastName,profilePicture from user where username = '$username'");
		if(mysqli_num_rows($sql) > 0){
			$result = mysqli_fetch_array($sql);
			
			return $result;
		} else {
			return;
		}
	} else {
		return;
	}
}

/**
 * Return user info by user id.
 *
 * @param mysqli	 	$db
 * @param int 			$usrename
 *
 * @return array
 **/


/**
 * Return user info by user session.
 *
 * @param mysqli	 	$db
 * @param string 		$usrename
 *
 * @return array
 **/
function searchUser_bSession($conn, $session){
	if(!empty($session) && !mysqli_error($conn)){
		$sql = mysqli_query($conn, "select id,username,password,firstName,lastName,profilePicture,admin from admin where session = '$session'");
		if(mysqli_num_rows($sql) > 0){
			$result = mysqli_fetch_array($sql);
			
			return $result;
		} else {
			return;
		}
	} else {
		return;
	}
}

/**
 * Check user session alive or not.
 *
 * @param 	mysqli	 	$db
 *
 * @return 	bool
 * @global 	$inLogin 			login status (true or false)
 * @global 	$inAdmin 			admin account (true or false)
 * @global 	$profilePicture 	profile picture (picture/image url)
 **/

/**
 * Convert DateTime to time ago.
 *
 * @param strtotime $time_ago
 *
 * @example format_time_ago(strtotime($time_ago))
 **/
function format_time_ago($time_ago){
  $cur_time 	= time();
  $time_elapsed = $cur_time - $time_ago;
  $seconds 		= $time_elapsed ;
  $minutes 		= round($time_elapsed / 60 );
  $hours 		= round($time_elapsed / 3600);
  $days 		= round($time_elapsed / 86400 );
  $weeks 		= round($time_elapsed / 604800);
  $months 		= round($time_elapsed / 2600640 );
  $years 		= round($time_elapsed / 31207680 );
  // Seconds
  if($seconds <= 60){
	return "seconds ago...";
  }
  //Minutes
  else if($minutes <=60){
	if($minutes==1){
	  return "A minute ago... ";
	}
	else{
	  return "$minutes minutes ago...";
	}
  }
  //Hours
  else if($hours <=24){
	if($hours==1){
	  return "An hour ago...";
	}else{
	  return "$hours hours ago...";
	}
  }
  //Days
  else if($days <= 7){
	if($days==1){
	  return "A day ago...";
	}else{
	  return "$days days ago...";
	}
  }
  //Weeks
  else if($weeks <= 4.3){
	if($weeks==1){
	  return "A week ago...";
	}else{
	  return "$weeks weeks ago...";
	}
  }
  //Months
  else if($months <=12){
	if($months==1){
	  return "A month ago...";
	}else{
	  return "$months months ago...";
	}
  }
  //Years
  else{
	if($years==1){
	  return "A year ago...";
	}else{
	  return "$years years ago...";
	}
  }
}