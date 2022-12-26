<?php 
//session_start();
include_once('../config.php');
$sql = mysqli_query($conn, "SELECT * FROM users_tbl");

$output = '';

if(mysqli_num_rows($sql) == 1)/*this means you are the only one logged in and nobody to chat with */{
    $output .= "No Users are online";

}elseif(mysqli_num_rows($sql) >0 ){
    include "data.php";
}
    echo $output;
?>