<?php 
while($rows = mysqli_fetch_assoc($sql)){
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$rows['unique_id']}
            OR outgoing_msg_id = {$rows['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}) 
            OR incoming_msg_id = {$outgoing_id} ORDER BY msg_id DESC LIMIT 1";

            $query2 = mysqli_query($conn, $sql2);

            $row2 = mysqli_fetch_assoc($query2);
            if(mysqli_num_rows($query2) > 0){
                $showmessage = $row2['msg'];
            }else{
                $showmessage = "Start a Chat!";
            }


        //shorten the lenght of message shown on preview to 28    
        (strlen($showmessage) > 28)  ? $msg = substr($showmessage, 0, 28 ). '...' : $msg = $showmessage;

        //add a YOU, if you are the one that sends last
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = ""; 

        //check online and offline status
        ($rows['status'] == 'Offline')  ? $offline = "offine" : $offline = '';
    

    $output .= '<a href="temp.php?unique_id='.$rows['unique_id'].'">
                    <div class="content">
                        <img src="img/users/'. $rows['img_name'] . '" alt="">
                        <div class="details">
                            <span>' . $rows['username'] . '</span>
                            <p>'. $you.  $msg .'</p>
                        </div>
                    </div>
                 <div class="status '.$offline. ' " ><i class="fas fa-circle"></i></div>
                </a>'; 
}



?>