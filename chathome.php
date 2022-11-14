<?php include('partials/config.php'); ?>
<?php include('partials/menu.php') ?>
<?php include('partials/check.php');?>
<?php 
 $sql= "SELECT * FROM `messages` ";
 $query = mysqli_query($conn, $sql);

?>

<title>Welcome</title>
    <video id="bgVideo" autoplay muted loop>
        <source src="bgvideo.mp4" type="video/mp4">
    </video>
    <div class="container">
        <center><h2>Welcome <span style="color:white;"><br><?php echo $_SESSION['username'] ?></span></h2>
        <a href="logout.php"><button class="btn btn-danger">Logout</button></a><br>
	    <label>Join the chat</label>
        
        </center></br>
        <div class="display-chat" id="display-chat">
            <?php 
                if(mysqli_num_rows($query)>0)
                {
                    while($rows = mysqli_fetch_assoc($query))
                    {
                        $timestamp = $rows['time'];
            ?>
                        <div class="messages">
                                <p>
                                <p class="chatlists" id="liName"><span><?php echo $rows['name']."<span class='givespace'></span>".$timestamp; ?></span><br> <?php echo $rows['message'] ?>
                            </p>
                        </div>
            <?php
                    }
                }


            ?>
            
        </div>
        <div class="messages">
            <div class="form-wrapper">
                <form class="form" method="POST" action="sendmessage.php">
                
                <input class="form-control"  id="val" name="message" class="input-msg" maxlength="280" placeholder="Type your message here" autocomplete="off" autofocus></input>
                <button><i class="fa fa-paper-plane"></i></button>
            </form>              
            </div>  
        </div>        
    
    </div>
<!--  <script>
<    //document.getElementById('display-chat').scrollIntoView({behavior: 'smooth', block: 'end'});
<    var dis = document.getElementById('display-chat');
<    dis.scrollTop = scroll.scrollTop;
<    scroll.animate({scrollTop: scroll.scrollTop});
<    //alert('Hello world');
<</script> -->