<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	
	include 'DatabaseConfig.php';
	include("connection.php");
	

$conn = new mysqli($servername, $username, $password, $database);
	if(isset($_POST["sub"]))
	{
			$query = "SELECT * FROM `complain`"; 
// mysql_query will execute the query to fetch data 

if ($is_query_run = mysqli_query($conn,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc($is_query_run)) 
    { 
        // these four line is for four column 
        echo $query_executed['RegistrationID'].' '; 
        echo $query_executed['company_name'].' '; 
        echo $query_executed['category'].' '; 
        echo $query_executed['state'].'<br>'; 
    } 
} 
else
{ 
    echo "Error in execution"; 
}

		if (!$_POST['company_type'] | !$_POST['state'] | !$_POST['city'] | !$_POST['category'] | !$_POST['company_name']| 
		!$_POST['ntu_of_griv'] | !$_POST['product_value'] | !$_POST['dealer_name'] | !$_POST['grie_detail'] )
		{
			echo ("Data are not Inserted !!!");
			die('You did not complete all of the required fields') ;
		}
		
		$RegistrationID = FLOOR(RAND() * 999999);
		$company_type = $_POST['company_type'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$category = $_POST['category'];
		$company_name= $_POST['company_name'];
		$ntu_of_griv = $_POST['ntu_of_griv'];
		$product_value = $_POST['product_value'];
		$dealer_name = $_POST['dealer_name'];
		$grie_detail = $_POST['grie_detail'];	
		
		extract($_POST);
		$str="SELECT RegistrationID FROM complain where RegistrationID = $RegistrationID";
		$qry="INSERT INTO complain (company_type,state,city,category,company_name,ntu_of_griv,product_value,dealer_name,grie_detail)VALUES('$company_type','$state','$city ','$category','$company_name','$ntu_of_griv','$product_value','$dealer_name','$grie_detail')";
		
		if (strlen($_POST['city']) < 3)
	{
		echo '<script>alert("Input is too short, minimum is 3 characters (20 max). !!!")</script>';
	}
	if (strlen($_POST['company_name']) < 5)
	{
		echo '<script>alert("Input is too short, Must be is 10 letters (10 max). !!!")</script>';
	}
	
		if(mysqli_query($conn,$qry))
		{
			echo 'Date Submitted Successfully';
		}
		else
		{
			echo '<br>Data not Submitted.. Unsuccessfully';
		}
	
	}
}
?>