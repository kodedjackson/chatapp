<?php require('partials/config.php') ?>
<?php include('partials/menu.php');?>
<?php include('partials/check.php');?>

<?php 
$getid = $_SESSION['id'];
$sql = "SELECT * FROM `users` where id='$getid' ";
$query = mysqli_query($conn, $sql);

$rows = mysqli_fetch_assoc($query);
$username = $rows['username'];
$fullname = $rows['fullname'];
$email = $rows['email'];
$phone_number = $rows['phone_number'];
?>
<div class="container">
    <center><h2>Profile <span style="color:white;"><br><?php echo $_SESSION['name'] ?></span></h2>

    <label for="full_name"><?php echo  $fullname; ?></label><br>
    <label for="username"><?php echo $username; ?></label><br>
    <label for="email"><?php echo $email; ?></label><br>
    <label for="phone_number"><?php echo $phone_number; ?></label><br>








    <a href="logout.php"><button class="btn btn-danger">Logout</button></a><br>
	<a href="chathome.php"><button class="btn btn-default" type="button"><label>Join the chat</label></button>
    
    </center></br>


</div>
