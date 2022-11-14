<?php include('config.php');?>
<?php include('partials/menu.php') ?>    

<table border='1' cellspacing='0' cellpadding='10'>
    <tr>
        <td>#</td>
        <td>Name:</td>
        <td>Image:</td>
    </tr>
</table>
 
<?php 

$i = 1;
$query = "SELECT * FROM `chats` ORDER BY id DESC";
$rows = mysqli_query($conn, $query);

?>


<div class="display-chat">
            <?php 
                if(mysqli_num_rows($rows)>0)
                {
                    while($row = mysqli_fetch_assoc($rows))
                    {
                        $image_name = $row['img_name'];
                        $image =$row['img'];
            ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['img_name'] ?></td>
                            <td><img src="img/<?php echo $row['img'];  ?>" width="50px" height="50px"></td>
                           </tr>
            <?php
                    }
                }


            ?>
            
        </div>