<?php
$host = "localhost";
$dbname = "payment_gateway";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", "root", "", "payment_gateway");
if(isset($_POST['payment_id']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $amount = $_POST['amount']/100;
    $plan = $_POST['plan'];

     $payment_id = $_POST['payment_id'];
//     $added_on = date('Y-m-d h:i:s');
    $sql = "INSERT INTO `plan1`(`name`, `email`, `phoneno`, `amount`, `plan`, `payment_id`, `payment_status`) VALUES ('$name','$email','$phoneno', '$amount', '$plan', '$payment_id','complete')";
    $result = mysqli_query($conn, $sql);
}
if(isset($_POST['payment_failure']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $amount = $_POST['amount']/100;
    $plan = $_POST['plan'];    
     $payment_failure = $_POST['payment_failure'];
     $sql = "INSERT INTO `plan1`(`name`, `email`, `phoneno`, `amount`, `plan`, `payment_id`, `payment_status`) VALUES ('$name','$email','$phoneno', '$amount', '$plan', '$payment_failure','pending')";
     $result = mysqli_query($conn, $sql);
}

exit;
?>












