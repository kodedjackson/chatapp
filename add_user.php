<?php include('config.php')?>
<?php 
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];



$sql = "INSERT INTO `users`(`fullname`, `username`, `email`, `phone_number`, `password`) VALUES ('$fullname','$username','$email','$phone_number','$password')";

$query = mysqli_query($conn, $sql);

if($query==TRUE)
{
echo 'data submitted';


}
else
{

    echo "could not connect to database";
}
?>