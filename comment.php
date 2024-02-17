<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($con, "SELECT * FROM comment ORDER BY Date DESC LIMIT 6");
    $output = "";

    if(mysqli_num_rows($sql) < 1){
        $output.= '<div class="comment">
                        <div class="d-flex">
                            <h6>No comments for this post</h6>
                        </div>
                    </div>';
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<div class="comment" >
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/2.png" alt=""></div>
                                <div>
                                    <h5><a href="">'. $row['fname'] . " " . $row['lname'] .'</a> <a href="#" class="reply"><i class="bi-hand-thumbs-up"></i></a> <a href="#" class="reply"><i class="bi-hand-thumbs-down"></i></a></h5>
                                    <time datetime="2020-01-01"><em>'. $row['date'] .'</em></time>
                                    <p>
                                    '. $row['comment'] .'
                                    </p>
                                </div>
                            </div>
                        </div>';
                        
                        
        }
    }
    echo $output;
?>