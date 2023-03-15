<?php 
include 'config.php';
include('partials/check.php');

$username = $_SESSION['username'];

//Get Users Details

$get_user_details = mysqli_query($conn, "SELECT * FROM users_tbl WHERE username='$username'");
if(mysqli_num_rows($get_user_details) > 0){
    $rows = mysqli_fetch_assoc($get_user_details);
    $usernameid = $rows['username'];
    $new_image_name = $rows['img_name'];

    $getid = $rows['user_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome\css\fontawesome.css">
    <link rel="stylesheet" href="fontawesome\css\all.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>PlayMate</title>
</head>
<body>
    <main class="wrapper">
        <header>
            <nav class="nav">
                <a href="chats.php"><li style="color: #b8b0b0;">CHAT</li></a>
                <a href="groups.php"><li style="color: #b8b0b0;">GROUPS</li></a>
                <a href="profile.php"><li>PROFILE</li></a>   
                <img src="<?php echo HOMEPAGE?>img/users/<?php echo $new_image_name?>" alt="">    
            </nav>
        </header>
        <div class="error-txt">ERROR</div>
        <section class="chat-area">
            <header>
                <div class="content">
                    <i class="fas fa-arrow-left"></i>
                    <!-- <img src="img/users/Kodedjackson.jpeg">
                    <div class="details"> -->
                        <!-- <span>Kodedjackson</span>
                        <p>Online</p> -->
                    </div>
                </div>
                

            
                <a href="<?php echo HOMEPAGE?>logout.php" class="logout">Logout</a>
            </header>
            <div class="profile-area up">
                <img src="img/users/kodedjackson.jpg">
                <span class="location">Lagos</span>
            </div>
            <div class="profile-area body">
                <label>Full name</label>
                <span>Jackson Jackson</span>
                <label>Username</label>
                <span>Kodedjackson</span>
                <!--<label>About</label>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam qui et perferendis aperiam cumque perspiciatis necessitatibus magni blanditiis dignissimos earum facilis repudiandae, iusto enim dolorem saepe ullam! Architecto, ea cupiditate.</p> -->
                <label>Email</label>
                <span>kodedjackson@gmail.com</span>
            </div>

        </section>
    </main>
    <script src="javascript/signup.js"></script>
    
</body>
</html>