<?php include('config') ?>

<?php 
$message = $_POST['message'];

$sql = "INSERT INTO `chats`(`name`, `message`) VALUES ('[value-2]','$message')";

$sql = mysqli_query($conn, $)



?>