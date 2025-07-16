<html>
<head>
<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

</style>
</head>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DbConnect.php';
include("connection.php");
	//mysqli_select_db($con,"consumerdb");
	if(isset($_POST["signin"]))
	{
		$query = "SELECT * FROM `registration`"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($conn,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc($is_query_run)) 
    { 
        // these four line is for four column 
        echo $query_executed['cid'].' '; 
        echo $query_executed['Fname'].' '; 
        echo $query_executed['Email'].' '; 
        echo $query_executed['newpass'].'<br>'; 
    } 
} 
else
{ 
    echo "Records not found";
}
$conn = new mysqli($servername, $username, $password, $database);

		if (strlen($_POST['Address']) < 12)
		{
			echo '<script>alert("Input is too short, minimum is 12 characters (20 max). !!!")</script>';
		}
		if (strlen($_POST['mobile']) < 10)
		{
			echo '<script>alert("Input is too short, Must be is 10 letters (10 max). !!!")</script>';
		}
		if (!$_POST['Fname'] | !$_POST['Lname'] | !$_POST['Address'] | !$_POST['mobile'] | !$_POST['Email']| !$_POST['newpass']| !$_POST['conpass'] )
	{
		echo ("Data are not Inserted !!!");
 		die('You did not complete all of the required fields') ;

 	}
		$Firstname = $_POST['Fname'];
		$Lastname = $_POST['Lname'];
		$Address = $_POST['Address'];
		$mobile=$_POST['mobile'];
		$Email = $_POST['Email'];
		$newpass = $_POST['newpass'];
		$conpass= $_POST['conpass'];
		
		extract($_POST);
		$qry="INSERT INTO registration (Fname,Lname,Address,mobile,Email,newpass,conpass)VALUES('$Firstname','$Lastname','$Address',$mobile,'$Email','$newpass','$conpass')";
		
		if(mysqli_query($conn,$qry))
			echo "<br>Data Are Submitted...";
		else
			echo "<br>Data Are not Submitted...";		
	}
	if(isset($_POST["reset"]))
	{	
		$newpassword = $_POST['newpassword'];
		$confpassword = $_POST['confpassword'];
		
		extract($_POST);
		$qry1="UPDATE registration SET newpass = '".$newpassword."' , conpass = '".$confpassword."'";

		if(mysqli_query($conn,$qry1))
		{
			echo "data are inserted ...";
		}
		else
		{
			echo "data are not inserted...";
		}
	}

}	
?>