<?php include "../config.php";?>
<?php 

$email = mysqli_real_escape_string($conn,  $_POST['email']);
$password =mysqli_real_escape_string($conn,  $_POST['password']);

if(!empty($email) && !empty($password)){
    //filter the email for wrong formate
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //run a query to check if the email and password exist
        $query = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE password='$password' && email='$email'");
        if(mysqli_num_rows($query) > 0 ){
            //get the associate data
            $rows = mysqli_fetch_assoc($query);
            $username = $rows['username'];
            //this means that the email was found
            $_SESSION['username'] = $username;
            echo "sucess";
        }else{
            echo "Incorrect password or email";
        }


    }else{
        echo "That's not an email address";
    }








}else{
    echo "All field required";
}











?>