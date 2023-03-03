<?php
session_start();

echo $_SESSION['unique_id'];?>

<?php


require_once 'vendor/autoload.php';

$ip_address = '102.89.22.14';

$reader = new \GeoIp2\Database\Reader('GeoLite2-City.mmdb');

$record = $reader->city($ip_address);

$city = $record->city->name;

echo 'Your city is ' . $city . ' Congratulations!';




?>