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
                <a href="chats.php"><li>CHATS</li></a>
                <a href="groups.php"><li style="color: #b8b0b0;">GROUPS</li></a>
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
                <span class="text">Select a User to start Search</span>
                <input type="text" placeholder="Search Username or Name...">
                <button><i class="fas fa-search"></i></button>
            </div>
          <div class="users-list">
                
                

            </div>
        </section>
              
    </main>
    <script src="javascript/users.js"></script>
    
</body>
</html>