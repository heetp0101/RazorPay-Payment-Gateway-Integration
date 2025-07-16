<?php
$host = "localhost";
$dbname = "payment_gateway";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", "root", "", "payment_gateway");
if(isset($_POST['payment_id']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $amount = $_POST['amount']/100;
    $plan = $_POST['plan'];

     $payment_id = $_POST['payment_id'];
//     $added_on = date('Y-m-d h:i:s');
    $sql = "INSERT INTO `plan1`(`fname`, `lname`, `email`, `phoneno`, `amount`, `plan`, `payment_id`, `payment_status`) VALUES ('$fname','$lname', '$email','$phoneno', '$amount', '$plan', '$payment_id','complete')";
    $result = mysqli_query($conn, $sql);
}
if(isset($_POST['payment_failure']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $amount = $_POST['amount']/100;
    $plan = $_POST['plan'];    
     $payment_failure = $_POST['payment_failure'];
     $sql = "INSERT INTO `plan1`(`fname`, `lname`, `email`, `phoneno`, `amount`, `plan`, `payment_id`, `payment_status`) VALUES ('$fname', '$lname', '$email','$phoneno', '$amount', '$plan', '$payment_failure','pending')";
     $result = mysqli_query($conn, $sql);
}

exit;
?>
