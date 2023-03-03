<?php include 'config.php'; ?>
<?php
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if(!empty ($first_name && !empty ($last_name) && !empty ($username) && !empty($email) && !empty ($password))){
    //check if the email is in the datase
    //filter the email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $checkEmail = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE email='$email' ");
        if(mysqli_num_rows($checkEmail) > 0){
            

            echo "Email alreadly exist, signin instead"; 
        }else{
            //means the email is not signed up yet
            //check for username
            $checkUsername = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE username='$username' ");
            if(mysqli_num_rows($checkUsername) == 1){
                $suggested_name = $username.date("h");
                echo "$username already exist, $suggested_name is available";
            }else{
                //username is not availabe
                //check if image is set
                /* print_r($_FILES['profile_pics']['name']);
                die(); */
                if(isset($_FILES['profile_pics']['name']) && !empty($_FILES['profile_pics']['name'])){
                    //everything is set, time to update database
                    //first upload the pictures and set it name
                    $image_name = $_FILES['profile_pics']['name'];
                    $image_types = $_FILES['profile_pics']['type'];
                    $tmp_name = $_FILES['profile_pics']['tmp_name'];

                    //lets seperate the name using the explode method
                    $explode = explode('.', $image_name);
                    //get the end, which is the extension
                    $end = end($explode);

                    /* echo $end."<br>"; */
                    /* print_r( $explode."<br>");
                    $image_name."<br>";
                    die(); */

                    $new_image_name = $username.'.'.$end;
                    //move the image to a new folder
                    $source_path = $tmp_name;
                    $destination_path = "img/users/".$new_image_name;
                    $status = "Online";

                    move_uploaded_file($source_path, $destination_path);
                    $unique_id = time();
                    $insertData = mysqli_query($conn, "INSERT INTO `users_tbl`(`unique_id`, `first_name`, 
                                                                    `last_name`, `username`, `email`, `img_name`, `password`, `status`) 
                                                                    VALUES ('$unique_id','$first_name','$last_name',
                                                                    '$username','$email','$new_image_name','$password', '$status')");

                    if($insertData==True){
                        $saveSession = mysqli_query($conn, "SELECT * FROM users_tbl WHERE username='$username'");
                        if(mysqli_num_rows($saveSession) > 0){
                            $rows = mysqli_fetch_assoc($saveSession);
                            $usernameid = $rows['username'];
                            $getMyId = $rows['user_id'];
                            $uniqueID = $rows['unique_id'];
                            $_SESSION['id'] = $getMyId;
                            $_SESSION['unique_id'] = $uniqueID;
                            $_SESSION['username'] = $usernameid;

                            if(isset($_SESSION['username'])){
                                echo "success";

                            }
                            
                        }

                        
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