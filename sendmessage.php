<?php include('partials/config.php'); ?>

<?php
$timestamp = date('h:i:a'); 
$name = $_SESSION['name'];
$message =$_POST['message'];


if($message != ''){
    
    $sql = "INSERT INTO `chats`(`name`, `message`, `time`) VALUES ('$name','$message', '$timestamp')";

    $qry = mysqli_query($conn, $sql);
    if($qry == True)
    {
        //echo "message submitted";
                 header('location:'.HOMEPAGE.'chathome.php');

    }
    else
    {
        echo "message error";
    }

}
else{
    echo "Please type a message";
}
?>