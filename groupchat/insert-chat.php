<?php include('../config.php');?>

<?php 
if(isset($_SESSION['unique_id'])){
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $time=date('y-m-d h:ia');
    
    if(!empty ($message)){
                $sql = mysqli_query($conn, "INSERT INTO `lagos`(`sender_id`, `msg`, `time`) VALUES ('$outgoing_id','$message', '$time')") 
                
                or die();
    
    }




}else{
    header('../signin.php');
}

?>