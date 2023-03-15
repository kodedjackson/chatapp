<?php
session_start();

echo $_SESSION['unique_id'];?>

<?php


require_once 'vendor/autoload.php';

$ip_address = '102.89.22.14';

$reader = new \GeoIp2\Database\Reader('GeoLite2-City.mmdb');

$record = $reader->city($ip_address);

$city = $record->city->name;

echo 'Your city is ' . $city . ' Congratulations!';




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
                <img src="<?php echo HOMEPAGE?>img/users/<?php echo $image_name?>" >
                    <div class="details">
                        <span>Kodedjackson</span>
                        <p>Online</p>
                    </div>
                </div>
            
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a Group or start Search</span>
                <input type="text" placeholder="Search group name or location...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Lagos</span>
                            <p>Available for lagos residents only</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-unlock"></i></div>
                </a> 
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Queens Only</span>
                            <p>To the ones who rule the world</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-lock"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
                        <div class="details">
                            <span>Kings Only</span>
                            <p>The protectors and providers</p>
                        </div>
                    </div>
                    <div class="status"><i class="fas fa-lock"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/users/Kodedjackson.jpeg" alt="">
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
    
</body>
</html>