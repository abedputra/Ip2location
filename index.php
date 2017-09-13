<html>
<head>
<title>Ip Location</title>
</head>

<body>
<?php
// Preset PHP settings
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(0);

require_once('ip2location.class.php'); //add class
$loc = new IP2Location('IP-COUNTRY-SAMPLE.BIN', IP2Location::FILE_IO);
$ip = ''.$_SERVER['REMOTE_ADDR'].''; //get ip user
?>
Your City : <?php echo $loc->lookup($ip, IP2Location::CITY_NAME); ?>
<br>
Your Region : <?php echo $loc->lookup($ip, IP2Location::REGION_NAME); ?>
<br>
Your Country : <?php echo $loc->lookup($ip, IP2Location::COUNTRY_NAME); ?>
<body>
</html>
