








<div class="container">
<form class="" action="" method="POST" autocomplete="off" enctype="multipart/form-data">
    <label for="name"> Name: </label><br>
    <input name="name" type="text" id="name" required value=""><br>
    <label for="image">Image</label><br>
    <input type="file" name="image" value="" id="image" accept=".jpg, .jpeg, .png"><br>
    <button type="submit" name="submit">UPLOAD</button>
</form>
<a href="data.php">Data</a>
</div>

<?php 
    
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    if($_FILES['image']['error'] === 4){
        echo
        "<script> alert('Image does not exist');</script>";
    }else{
        $filename = $_FILES['image']['name'];
        $filesize =$_FILES['image']['size'];
        $tmpName = $_FILES['image']['tmp_name'];

        $validExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $filename);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validExtension)){
            echo 
            "<script> alert('invalid Image Extenstion'); </script>";
        }
        elseif($filesize > 1000000){
            "<script> alert('Image size is too large'); </script>";
        }else{
            $newImageName = uniqid();
            $newImageName .= '.' .$imageExtension;

            move_uploaded_file($tmpName, 'img/'. $newImageName);

            $query = "INSERT INTO `chats`(`img_name`, `img`) VALUES ('$name','$newImageName')";
            $res = mysqli_query($conn, $query);
            if($res == True){
                echo 
                "<script> alert ('Image Added Successfully');
                document.location.href = 'data.php';
                </script>";
            }
        }

    }
}


?>