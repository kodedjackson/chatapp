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

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="fontawesome\css\fontawesome.css">
<link rel="stylesheet" href="fontawesome\css\all.css">   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">