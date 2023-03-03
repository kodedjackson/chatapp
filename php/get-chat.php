<?php 
include('../config.php');

$outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
$incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
$output = '';


$sql = "SELECT * FROM messages LEFT JOIN users_tbl ON users_tbl.unique_id = messages.incoming_msg_id 
        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
         OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id ={$outgoing_id}) ORDER BY msg_id ASC";

$query = mysqli_query($conn, $sql);


if(mysqli_num_rows($query) > 0){
    while($rows = mysqli_fetch_assoc($query)){
        if($rows['outgoing_msg_id'] === $outgoing_id){//this is the sender
           
            $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>'. $rows['msg'] . '</p>
                            </div>
                        </div>  
            ';
        }else{ //this is receiver 
            $output .= '
                        <div class="chat incoming">
                        <img src="img/users/' . $rows['img_name'] . ' ">
                            <div class="details">
                                <p>' . $rows['msg'] . '</p>
                            </div>
                        </div>
            
            ';
        }
    } echo $output;
           
}




?>