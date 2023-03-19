<?php

use GeoIp2\Record\Location;

session_start();
//constants to avoid repeating variables
define('dbHost', 'localhost');
define('dbUsername','vibrxxrt_kodedjackson');
define('dbPassword','');
define('dbDatabase','vibrxxrt_playmate');
define('HOMEPAGE', 'http://playmate.kodedjackson.com');


$conn=mysqli_connect(dbHost, dbUsername, dbPassword, dbDatabase);



/* if(!isset($_SESSION['id'])){
    header('signin.php/');
} */
?>
