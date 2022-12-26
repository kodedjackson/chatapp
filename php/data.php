<?php 
while($rows = mysqli_fetch_assoc($sql)){
    $output .= '<a href="index.php?unique_id='.$rows['unique_id'].'">
                    <div class="content">
                        <img src="img/users/'. $rows['img_name'] . '" alt="">
                        <div class="details">
                            <span>' . $rows['username'] . '</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                 <div class="status"><i class="fas fa-circle"></i></div>
                </a>'; 
}



?>