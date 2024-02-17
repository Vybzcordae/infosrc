<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($con, "SELECT * FROM posts ORDER BY user_id DESC LIMIT 3");
    $output = "";

    if(mysqli_num_rows($sql) < 1){
        $output.= "<h1>No Posts are available !!!</h1>";
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '
';
                        
                        
        }
    }
    echo $output;
?>