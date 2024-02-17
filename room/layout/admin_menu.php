<?php error_reporting(0);

$parts = explode('/', __FILE__);
$filename = $parts[count($parts) - 1];

if (strpos($_SERVER["SCRIPT_URI"], $filename) !== false) {
	exit("illegal method");
}
?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
            <?php
                $sql1 = mysqli_query($db, "SELECT * FROM user WHERE session = '{$user["session"]}'");
                if(mysqli_num_rows($sql1) > 0){
                    $row1 = mysqli_fetch_assoc($sql1);
                }
                        
            ?>
                <div class="dropdown profile-element"> 
				<span><img alt="image" class="img-circle" src="../Admin/php/images/<?= $profilePicture ?>" width="50px" height="50px"></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> 
							<span class="block m-t-xs"> 
								<strong class="font-bold"><?= $userName ?></strong>
                             </span> 
								<!-- <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> -->
							 </span> 
					</a>
                    <!-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul> -->
                </div>
                <div class="logo-element">
                    <a href="../index.php">InfoSrc</a>
                    
                </div>
            </li>
			<li class="<?= $homeChatMenu ?>">
                <a href="<?= $_HOME_FILE ?>"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
            </li>
			
			<?php if($inLogin): ?>
			<li class="<?= $accountMenu ?>">
                <a href="account.php"><i class="fa fa-user-o"></i> <span class="nav-label">Account</span></a>
            </li>
			<?php endif; ?>
			
			<li class="<?= $createRoomMenu ?>">
                <a href="create_room.php"><i class="fa fa-plus"></i> <span class="nav-label">Create room</span></a>
            </li>
			
            <li class="<?= $myRoomMenu ?>">
				<a href="my_room.php"><i class="fa fa-th-large"></i> <span class="nav-label">My room</span></a>
            </li>
			
			<?php if($inLogin): if($isAdmin): if($adminArea !== "active"):?>
			
			<li class="">
                <a href="secret_admin.php"><i class="fa fa-cogs"></i> <span class="nav-label">Admin Area</span></a>
            </li>
			<?php else: ?>
			<li class="active">
                <a href="secret_admin.php"><i class="fa fa-cogs"></i> <span class="nav-label">Admin Area</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="">
                    <li><a href="#room_control">Group Control</a></li>
                    <li><a href="#user_control">User Control</a></li>
                </ul>
            </li>


			<?php endif;endif; ?>
 			<li>
                <a href="logout.php"><span class="nav-label"><i class="fa fa-sign-out"></i> Logout</span></a>
            </li>
			<?php endif; ?>
        </ul>
    </div>
</nav>
