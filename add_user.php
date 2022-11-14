<?php session_start(); ?>
<?php include 'config.php'; ?>
<?php 
$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$image_name = $_FILES['profile_pics'];

if(!empty($fullname) && !empty($username) && !empty($email) && !empty($phone_number) && !empty($password)){
    //check if the email is in the datase
    //filter the email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $checkEmail = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE email='$email' ");
        if(mysqli_num_rows($checkEmail) > 0){
            echo "Email alreadly exist, login up instead"; 
        }else{
            //means the email is not signed up yet
            //check for username
            $checkUsername = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE username='$username' ");
            if(mysqli_num_rows($checkUsername) > 0){
                echo "username already exist";
            }else{
                //username is not availabe
                //check if image is set
                /* print_r($_FILES['profile_pics']['name']);
                die(); */
                if(isset($_FILES['profile_pics'])){
                    //everything is set, time to update database
                    //first upload the pictures and set it name
                    $image_name = $_FILES['profile_pics']['name'];
                    $image_types = $_FILES['profile_pics']['type'];
                    $tmp_name = $_FILES['profile_pics']['tmp_name'];

                    //lets seperate the name using the explode method
                    $explode = explode('.', $image_name);
                    //get the end, which is the extension
                    $end = end($explode);

                    $new_image_name = $username.'.'.$end;
                    //move the image to a new folder
                    $source_path = $tmp_name;
                    $destination_path = "img/users/".$new_image_name;

                    move_uploaded_file($source_path, $destination_path);
                    $unique_id = time().$username;
                    $insertData = mysqli_query($conn, "INSERT INTO `users_tbl`(`unique_id`, `fullname`,  `username`,    `email`, `phone_number`, `img_name`, `password`) VALUES ('$unique_id','$fullname','$username','$email','$phone_number',' $new_image_name','$password')");

                    if($insertData==True){
                        $_SESSION['username'] = $username;
                        echo "success";
                    }else{
                        echo "Failed to sign you up";
                    } 


                }else{
                    echo "Please select a profile picture";
                }

            }

        }
    }


}else{
    echo "All input field required";
}



?>