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
	
	include("DbConnect.php");
	include("DatabaseConfig.php");
	$conn = new mysqli($servername, $username, $password, $database);
	if(isset($_POST["sendmsg"]))
	{	
		$query = "SELECT * FROM `contact`"; 
// mysql_query will execute the query to fetch data 

if ($is_query_run = mysqli_query($conn,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc($is_query_run)) 
    { 
        // these four line is for four column 
        echo $query_executed['fname'].' '; 
        echo $query_executed['lname'].' '; 
        echo $query_executed['cemail'].' '; 
        echo $query_executed['msg'].'<br>'; 
    } 
} 
else
{ 
    echo "Error in execution"; 
}
	if (!$_POST['fname'] | !$_POST['lname'] | !$_POST['cemail'] | !$_POST['msg'])
	{
		echo "data are not inserted...";
 		die('You did not complete all of the required fields') ;

 	}

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$cemail = $_POST['cemail'];
		$msg=$_POST['msg'];
		
		extract($_POST);
		$str="INSERT INTO contact(fname,lname,cemail,msg)VALUES('$fname','$lname','$cemail','$msg')";
		
		if(mysqli_query($conn,$str))
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