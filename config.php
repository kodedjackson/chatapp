<?php

use GeoIp2\Record\Location;

session_start();
//constants to avoid repeating variables
define('dbHost', 'localhost');
define('dbUsername','vibrxxrt_playmate');
define('dbPassword','toyiN080 .');
define('dbDatabase','kodedchat');
define('HOMEPAGE', 'http://playmate.kodedjackson.com');


$conn=mysqli_connect(dbHost, dbUsername, dbPassword, dbDatabase);



/* if(!isset($_SESSION['id'])){
    header('signin.php/');
} */
?>
