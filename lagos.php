<?php 
include('config.php');

$username = $_SESSION['username'];

//check for the username data
$select =mysqli_query($conn, "SELECT * FROM users_tbl WHERE username='$username'");

$rows = mysqli_fetch_assoc($select);

$sender_id = $rows['unique_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
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
                <a href="chats.php"><li>CHAT</li></a>
                <a href="groups.php"><li>GROUPS</li></a>
                <a href="profile.php"><li>PROFILE</li></a>   
                <img src="img/users/<?php echo $rows['img_name'] ;?>" alt="">    
            </nav>
        </header>
        <div class="error-txt">ERROR</div>
        <section class="chat-area" id="scroll">
            <header>
                <div class="content">
                    <a href="chats.php"><i class="fas fa-arrow-left"></i></a>
                    <img src="img/users/<?php echo $rows['img_name']; ?>">
                    <div class="details">
                        <span><?php echo $rows['username'] ;?></span>
                        <p><?php echo $rows['status'];?></p>
                    </div>
                </div>
            
                <a href="logout.php?user_id=<?php echo $rows['unique_id']; ?> " class="logout">Logout</a>
            </header>
            <div class="chat-box" id="chat-box">
            </div>
            <form action="#" class="typing-area">
                <input type="text" name="outgoing_id" hidden value="<?php echo $sender_id;?>">
                <input type="text" autofocus class="inputField" name="message" placeholder="Type a message here...">

                <button class="sendBtn"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </main>
    <script src="javascriptLagos/chat.js"></script>
    
</body>
</html>