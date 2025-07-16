<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="consumer";
	
	$dsn = "mysql:host=$host;dbname=$database";
	try {
$conn = new PDO( $dsn, $username, $password );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$conn = null;
}
catch (PDOException $e) {
$conn = null;
exit("Connection failed: " . $e->getMessage());
}
	
	$conn=new mysqli($servername,$username,$password,$database);
	if($conn->connect_error)
	{
		die("Connection Failed.. ",$conn->connect_error);
	}
	
?>