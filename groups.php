<?php include 'config.php';


$username = $_SESSION['username'];

//check for the username data
$select =mysqli_query($conn, "SELECT * FROM users_tbl WHERE username='$username'");

$rows = mysqli_fetch_assoc($select);
$email =$rows['email'];
$status = $rows['status'];
$image_name = $rows['img_name']
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
                <a href="groups.php"><li>GROUPS</li></a> 
                <a href="profile.php"><li style="color: #b8b0b0;">PROFILE</li></a>   
            </nav>
        </header>
        <div class="error-txt">ERROR</div>
        <section class="users">
            <header>
                <div class="content">
                    <img src="img/users/<?php echo $image_name?>" >
                    <div class="details">
                        <span><?php echo $username; ?></span>
                        <p><?php echo $status;?></p>
                    </div>
                </div>
                <a href="logout.php?user_id=<?php echo $rows['unique_id']; ?> " class="logout">Logout</a>
                <!-- <?php echo $_SESSION['unique_id'];?> -->
            
            </header>
            <div class="search">
                <span class="text">Select a Group or start Search</span>
                <input type="text" placeholder="Search group name or location...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="<?php echo HOMEPAGE . 'lagos.php' ;?>">
                    <div class="content">
                        <img src="images/lagos.jpg" alt="">
                        <div class="details">
                            <span>Lagos</span>
                            <p>Available for lagos residents only</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-unlock"></i></div>
                </a> 
                <a href="error.php">
                    <div class="content">
                        <img src="images/woman.webp" alt="">
                        <div class="details">
                            <span>Queens Only</span>
                            <p>To the ones who rule the world</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-lock"></i></div>
                </a>
                <a href="error.php">
                    <div class="content">
                        <img src="images/men.jpg" alt="">
                        <div class="details">
                            <span>Kings Only</span>
                            <p>The protectors and providers</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-lock"></i></div>
                </a>
                <a href="error.php">
                    <div class="content">
                        <img src="images/global.jpg" alt="">
                        <div class="details">
                            <span>International</span>
                            <p>For the International community</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-lock"></i></div>
                </a>
                

            </div>
        </section>
              
    </main>
    <script src="javascript/show-search.js"></script>
    
</body>
</html>