<?php include('config.php'); ?>

<?php

session_start();
$name = $_SESSION['name'];
$message = mysqli_real_escape_string($conn, $_POST['message']);

if($message != ''){
    
    $sql = "INSERT INTO `chats`(`name`, `message`) VALUES ('$name','$message')";

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