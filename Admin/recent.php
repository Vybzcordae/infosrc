<?php
    session_start();
    include_once "../config.php";
    $sql = mysqli_query($con, "SELECT * FROM posts");
    $output = "";

    if(mysqli_num_rows($sql) < 1){
        $output.= "<h1>No Posts are available !!!</h1>";
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '

            

            <div class="news">
                <div class="post-item clearfix">
                    <img src="../images/'. $row['img'] .'" alt="">
                    <h4><a href="#">'. $row['topic'] .'</a></h4>
                    <p>'. $row['date'] .'</p>
                </div>

                
            </div>
            <!-- End sidebar recent posts-->
            ';
                        
                        
        }
    }
    echo $output;
?>