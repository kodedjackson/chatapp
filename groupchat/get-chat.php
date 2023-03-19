<?php 
include('../config.php');

$outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$time = date('y-m-d h:ia');

echo $time;

$output = '';
 

$unique_id = $_SESSION['unique_id'];


$sql = "SELECT Lagos.msg_id, Lagos.time, Lagos.sender_id, Lagos.msg, users_tbl.username, users_tbl.img_name 
FROM Lagos 
JOIN users_tbl ON Lagos.sender_id = users_tbl.unique_id 
ORDER BY Lagos.msg_id ASC";

$query = mysqli_query($conn, $sql); 

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_array($query)){
        if($unique_id != $row['sender_id']){

            $sender_id = $row['sender_id'];
            // this is the sender
            $sql = "SELECT username, img_name FROM users_tbl WHERE unique_id = $sender_id";
            $result = mysqli_query($conn, $sql);
            $sender = mysqli_fetch_assoc($result);

            $output .= '<div class="chat incoming">            
                <img src="img/users/' . $sender['img_name'] . '">
                <div class="details">
                    <p><strong>' . $sender['username'] . ':</strong> ' . $row['msg'] . '</p>
                    <em>' . $row['time'] .'</em>

                </div>
            </div>';
        } else { // this is the receiver 
            $output .= '<div class="chat outgoing">
                <div class="details">
                    <p>' . $row['msg'] . '</p>
                    <em>' . $row['time'] .  '</em>
                </div>
            </div>';
        }
    } 
    echo $output;
}

?>