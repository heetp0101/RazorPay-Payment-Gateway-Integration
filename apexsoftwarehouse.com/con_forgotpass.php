<?php
	include 'DatabaseConfig.php';
	if(isset($_POST["check"]))
	{		
		$chnum = $_POST['chnum'];
		extract($_POST);
		$qry = "SELECT Email , mobile FROM registration WHERE Email = '". $chnum ."'" ;
		$result = mysqli_query($con,$qry);
		if (mysqli_num_rows($result) == 1) 
		{
			echo '<html><body><div id="snackbar">Password are Reset...</div></body></html>';echo "pass"; //Pass, do something
		} 	
		
		else 
		{
			echo '<html><body><div id="snackbar">Oops.. Something Wrong...</div></body></html>';echo "pass"; //Pass, do something
		}		
	}
?>
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
