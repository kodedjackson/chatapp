<?php include 'config.php';


$username = $_SESSION['name'];

;?>
<?php

//check for the username data

$sql = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE 'username'='$username'");

if(mysqli_num_rows($sql) > 0){
    $rows = mysqli_fetch_assoc($sql);
    echo $email = $rows['email'];
    
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
                <a href="chats.php"><li>HOME</li></a>
                <a href="chats.php"><li>CHAT</li></a>
                <a href="groups.php"><li>GROUPS</li></a>
                <a href="profile.php"><li>PROFILE</li></a>   
            </nav>
        </header>
        <div class="error-txt">ERROR</div>
        <section class="users">
            <header>
                <div class="content">
                    <img src="img/users/Kodedjackson.jpeg">
                    <div class="details">
                        <span><?php echo $username; ?></span>
                        <p>Online</p>
                    </div>
                </div>
            
                <a href="logout.php" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a User to start Search</span>
                <input type="text" placeholder="Search Username or Name...">
                <button><i class="fas fa-search"></i></button>
            </div>
          <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a> 
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a>

                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kodedjackson</span>
                            <p>This is a test Message</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-circle"></i></div>
                </a>
                

            </div>
        </section>
              
    </main>
    <script src="javascript/show-search.js"></script>
    
</body>
</html>