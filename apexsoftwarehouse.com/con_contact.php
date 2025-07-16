<?php


if(isset($_POST['btnsub']))
{
include "DbConnect.php";
include 'phpmailercontact.php';

session_start();

$potpgen=0;
$potpcheck=0;
$eotpgen=0;
$eotpcheck=0;
$otpverified=0;


$name=$_POST['name'];
$email=$_POST['cemail'];
$sub=$_POST['subject'];
$msg=$_POST['message'];

$cmd="insert into contact(id,name,email,subject,message) values('','$name','$email','$sub','$msg')";

$result=mysqli_query($conn,$cmd) or die(mysqli_error($conn));


if($result)
{
	echo "<script>alert('Data Inserted Successfully');</script>";
//this msg send to user
	$emsg = "thank you for contact us... ";
	$subject="Thanking message from apex software house";
//this msg send to admin	
	$adminMsg="<b>BDCA contact us - User Detailing:</b>"."<br/>".
				"<b>User name:</b>".$name."<br/>".
				"<b>User email ID:</b>".$email."<br/>".
				"<b>User subject:</b>".$sub."<br/>".
				"<b>User message:</b>".$msg."<br/>";
	$adminSubject="Contact us Detailing of BDCA website";
				
	$eotpgen=sendmail($_POST['cemail'],$emsg,$subject);
	//$eotpgen=sendmail('omni.soni9@gmail.com',$adminMsg,$adminSubject);
}
else
{
	echo "<script>alert('Data not Inserted'); </script>";

}
}
?>



