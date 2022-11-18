<?php

session_start();
//constants to avoid repeating variables
define('dbHost', 'localhost');
define('dbUsername','root');
define('dbPassword','');
define('dbDatabase','kodedchat');
define('HOMEPAGE', 'http://localhost/chatapp/');


$conn=mysqli_connect(dbHost, dbUsername, dbPassword, dbDatabase);
?>
