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
include 'DatabaseConfig.php';

	
	if(isset($_POST["login"]))
	{		
		$username = $_POST['uname'];
		$password = $_POST['password'];
		extract($_POST);
		$qry = "SELECT Email ,mobile , newpass FROM registration WHERE Email = '". $username ."' OR mobile='".$username."' AND newpass = '". $password ."'" ;
		//$str="INSERT INTO login (Ema,pasword)VALUES('$Ema','$pasword')";
		$result = mysqli_query($con,$qry);
		//$res = mysqli_query($con,$str);
		if ($result) 
		{
			echo "Log in Successfully";
		} 	
		else 
		{
			
			echo "Log in Failed";
		}	
	}
?>