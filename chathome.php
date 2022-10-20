<?php include('config.php'); ?>
<?php 
 $sql= "SELECT * FROM `chats` ";
 $query = mysqli_query($conn, $sql);

?>
<?php include('partials/menu.php'); 

?>

<?php 

session_start();
if(isset($_SESSION['name']))
{
    //unset($_SESSION['login']);
}
else
{
    //echo "You need to login to access this page";
    header('location:'.HOMEPAGE.'signin.php');
}

?>
<title>Signup</title>
<body>
    <video id="bgVideo" autoplay muted loop>
        <source src="bgvideo.mp4" type="video/mp4">
    </video>
    <div class="container">
        <center><h2>Welcome <span style="color:#dd7ff3;"><br><?php echo $_SESSION['name'] ?></span></h2>
        <button class='success'><a href="logout.php">LOGOUT</a></button><br>
	    <label>Join the chat</label>
        
        </center></br>
        <div class="display-chat">
            <?php 
                if(mysqli_num_rows($query)>0)
                {
                    while($rows = mysqli_fetch_assoc($query))
                    {
            ?>
                        <div class="messages">
                                <p>
                                <p class="chatlists" id="liName"><span><?php echo $rows['name']; ?></span><br> <?php echo $rows['message'] ?>
                               <!--  <p class="chatlists" id="liMessage"> ?></p> -->
                            </p>
                        </div>
            <?php
                    }
                }


            ?>
            
        </div>
        <div class="messages">
            <style>
                textarea{
                    width: 100%;
                    height: 100px;
                    padding: 12px 20px;
                    box-sizing: border-box;
                    border: 2px solid, #ccc;
                    border-radius: 16px;
                    resize: none;
                }
                
                button{
                    background-color: var(--color-red);
                    color: whitesmoke;
                    padding: 10px;
                    border-radius: 8px;
                    border: none;
                    margin-top: 10px;
                    padding: 0px;
                }
            </style>
            <form method="POST" action="sendmessage.php">
                <textarea maxlength='280' placeholder="Type your message heres ..." id="inputTextArea" name="message"></textarea>
                <button type="submit" name="submit">SEND</button>
            </form>
        </div>
        </div>
        
    
    </div>
</body>                     
</html>