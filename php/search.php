<?php

include_once('../config.php');
$outgoing_id = $_SESSION['unique_id'];

$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']) ;
$output = "";

$sql = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE NOT unique_id = {$outgoing_id} AND WHERE username LIKE '%$searchTerm%' OR first_name LIKE '%$searchTerm%';");
if(mysqli_num_rows($sql) > 0){
    include "data.php";    
       
}else{
    $output .= "No User Found";
}


echo $output;



?>