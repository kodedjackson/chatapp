<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signin</title>
</head>
<body>
    <div class="header">
        <nav>
            <!-- <a href="index.html"><img src="images/logo2.svg" width="150px" height="100px"></a>  -->
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="#">CHAT</a></li>
                    <li><a href="#">PROFILE</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="form-container">
        <div class="container">
            <img src="images/logo2.svg" alt="kodedchat" width="150px">
                <h2>SIGN IN</h2>
                <div>
                    <?php 
                    if(isset($_SESSION['login']))
                    {
                       echo $_SESSION['login'];
                       unset($_SESSION['login']);
                    }
                    if(isset($_SESSION['no-login-found'])){
                        echo $_SESSION['no-login-found'];
                        unset($_SESSION['no-user-found']);
                    }
                    ?>
                    <style> 
                    .error{
                        color: red;
                    }
                    .sucess{
                        color: green;
                    }
                </style>
                </div>
                <form method="POST" action="#">

                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Your email"><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" ><br>

                    <button type="submit" name="submit" id="submit">SIGN IN</button>

                </form>
        </div>
    </div>
</body>
</html>

<?php include('config.php'); ?>
<?php 


if(isset($_POST['submit']))
{
    //collect data from the form submitted
    $email = $_POST['email'];
    $password = $_POST['password'];


   //run a query to check if the username and password exist
   $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

   $qry = mysqli_query($conn, $sql);
   //if username and password match, sign in and create a new name session
   if(mysqli_num_rows($qry)>0)
   {
    //echo "LOGIN SUCCESS";
    //fetch associate data and store in the $row variable
    $rows = mysqli_fetch_assoc($qry);
    $name = $rows['fullname'];
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['login'] ="<div class='success text center'>You need to sign in to access this page</div>";
    header('location:'.HOMEPAGE.'chathome.php');

   }
   
   else
   {
    $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
    //REdirect to HOme Page/Dashboard
    echo "Incorrect password";
    //header('location:'.HOMEPAGE.'signin.php');
   }

   


   

}





?>