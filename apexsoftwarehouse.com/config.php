<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Dhaka');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'kilonmehta_police';

// Database Username
$dbuser = 'BHAV_POLICE';

// Database Password
$dbpass = 'Y1xdCln6Kltz6$hn';

// Defining base url
// define("BASE_URL", "http://localhost/shopping/ecommerce_website/Files/cms/cms/");

// Getting Admin url
// define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}