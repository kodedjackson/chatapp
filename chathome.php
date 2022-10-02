<?php include('config.php'); ?>
<?php 
 $sql= "SELECT * FROM `chats` ";
 $query = mysqli_query($conn, $sql);





?>
<?php include('partials/menu.php'); ?>
<body>
    <video id="bgVideo" autoplay muted loop>
        <source src="bgvideo.mp4" type="video/mp4">
    </video>
    <div>
    <div class="container">
        <center><h2>Welcome <span style="color:#dd7ff3;">Jackson !</span></h2>
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
        </div>
        <div class="messages">
            <form method="POST" action="sendmessage.php">
                <textarea placeholder="Type your message here ..."></textarea>
                <button type="submit" name="submit" id="submit">SEND</button>
            </form>
        </div>
    
    </div>
</body>
</html>