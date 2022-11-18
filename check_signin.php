<?php include "config.php";?>
<?php 

$email = mysqli_real_escape_string($conn,  $_POST['email']);
$password =mysqli_real_escape_string($conn,  $_POST['password']);



if(!empty($email && !empty($password))){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //check if the input data is available

        $query = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE email='$email' AND password='$password'");
        if($query == TRUE){
            if(mysqli_num_rows($query) > 0 ){
                $rows = mysqli_fetch_array($query);
                $username = $rows['username'];
                $_SESSION['name'] = $username;
                echo "success";

            }else{
                echo "Incorrect password or email";
            }
        }

    }else{
        echo "This is not a valid email";
    }





}else{
    echo "All input field required!";
}



?>