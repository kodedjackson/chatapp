<?php

include('config.php');
include 'location.php';
$_SESSION['saved_city'] = $saved_city;


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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>PlayMate</title>
    
</head>
<body>
<style>
.error-txt{
    background-color: red;
    align-items: center;
    color: red;
    justify-content: center;
    text-align: center;
    color: red;
    font-size: 32px;
    transition: all 0.3 ease;
    z-index: 200;
    
}
        .confetti {
            width: 20px;
            height: 20px;
            position: absolute;
            animation: confetti 2s ease-out forwards;
            transform: rotate(45deg);
            background-color: #f44336;
        }

        @keyframes confetti {
            0% {
                transform: rotate(45deg) translateY(0);
                opacity: 1;
            }
            100% {
                transform: rotate(45deg) translateY(100vh);
                opacity: 0;
            }
        }
    </style>


    <main class="wrapper">
        <header>
            <nav class="nav">
                <a href="chats.php"><li>CHAT</li></a>
                <a href="groups.php"><li>GROUPS</li></a>
                <a href="profile.php"><li>PROFILE</li></a>   
                <img src="img/users/<?php echo $rows['img_name'] ;?>" alt="">    
            </nav>
        </header>
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
            <div id="confetti-container">
            <div style="
    align-items: center;
    color: red;
    justify-content: center;
    text-align: center;
    color: white;
    font-size: 22px;
    background-color: red;
    border-radius: 20px;
    margin: 20px 0;
    transition: all 0.3 ease;
    z-index: 200;">LOCKED! <br>COMING SOON</div>
            </div>
            
    
</div>
    </main>


</body>
</html>









    <script>
        function createConfetti() {
            // Create a confetti element
            const confetti = document.createElement("div");
            confetti.classList.add("confetti");

            // Randomly position the confetti element on the screen
            const x = Math.random() * window.innerWidth;
            const y = Math.random() * window.innerHeight;
            confetti.style.top = y + "px";
            confetti.style.left = x + "px";

            // Add the confetti element to the container
            const container = document.getElementById("confetti-container");
            container.appendChild(confetti);

            // Remove the confetti element from the container after the animation is finished
            setTimeout(() => {
                confetti.remove();
            }, 2000);
        }

        // Create confetti elements every 100 milliseconds
        setInterval(createConfetti, 20);
    </script>


