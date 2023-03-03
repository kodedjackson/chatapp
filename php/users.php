<?php 
//session_start();
include_once('../config.php');
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users_tbl WHERE NOT unique_id = {$outgoing_id}");

$output = '';

if(mysqli_num_rows($sql) == 1)/*this means you are the only one logged in and nobody to chat with */{
    $output .= "No Users are online";

}elseif(mysqli_num_rows($sql) >0 ){
    include "data.php";
}
    echo $output;
?>