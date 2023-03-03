<?php
 include_once 'config.php';
if(isset($_SESSION['unique_id'])){
   
    $logout_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    
    if(isset($logout_id)){
        $status = "Offline now";
        $sql = mysqli_query($conn, "UPDATE users_tbl SET status='{$status}' WHERE unique_id = {$logout_id}");
        if($sql == TRUE){
            session_unset();
            session_destroy();
            header('location: signin.php');
        }
    }else{
        header("location: index.php");
    }
}else{
    header(("location: signin.php"));
}



?>