<?php error_reporting(0);

$parts = explode('/', __FILE__);
$filename = $parts[count($parts) - 1];

if (strpos($_SERVER["SCRIPT_URI"], $filename) !== false) {
	exit("illegal method");
}
$user = searchUser_bSession($db, $_COOKIE["user_session"]);
?>
<div class="row border-bottom">
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
	<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
	<form role="search" class="navbar-form-custom" action="<?= $_CHAT_FILE ?>">
		<div class="form-group">
			<input type="text" placeholder="Search for room chat now..." class="form-control" name="room_id">
		</div>
	</form>
</div>
	<ul class="nav navbar-top-links navbar-right">
		<li>
			<span class="m-r-sm text-muted welcome-message">Welcome <b><?= $userName ?></b></span>
		</li>
		<?php
            include_once "../config/db.php";
            $sql = mysqli_query($db, "SELECT * FROM request_join JOIN chat_room ON request_join.room_id=chat_room.room_id WHERE owner = {$user["id"]}");
			

        ?>



		<li class="dropdown">
			<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
				<i class="fa fa-bell"></i>  <span class="label label-primary"><?php echo mysqli_num_rows($sql)?></span>
			</a>
			<ul class="dropdown-menu dropdown-alerts">
				<?php
					$query = mysqli_query($db, "SELECT * FROM request_join JOIN chat_room ON request_join.room_id=chat_room.room_id WHERE owner = {$user["id"]}") or error("Can't get room data", $_HOME_FILE);

					while($room = mysqli_fetch_array($query)):
				?>
				<li>
                    <a href="my_room.php">
                        <div>
                            <i class="fa fa-inbox fa-fw"></i> You have a new request on your room
                            <span class="pull-right text-muted small"><?= !empty($room["time"]) ? $room["time"] : "null"; ?></span>
                        </div>
                    </a>
                </li>
            	<li class="divider"></li>
				<?php endwhile;
					if(mysqli_num_rows($query) < 1){
						echo "You don't have any room request!";
					}
				?>
			</ul>
		</li>  



		<li>
			<a href="logout.php">
				<i class="fa fa-sign-out"></i> Log out
			</a>
		</li>
	</ul>

</nav>
</div>

