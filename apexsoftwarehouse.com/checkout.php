








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
</head>
<body>
<?php
            if(isset($_POST['plan1']))
            {     $amount = 4000; $plan = "E-Commerce Website"; }
            if(isset($_POST['plan2']))
            {   $amount = 2000; $plan = "Dynamic Website";}
            if(isset($_POST['plan3']))
            { $amount = 1100; $plan= "Static Website";}
            ?>
    <h3>You have selected Plan for <span><?php echo $plan; ?></span>. The Price of this Plan is <span><?php echo $amount;?> ₹</span></h3>
    <form action="test_1.php" method="post">
        <label ><b>Name</b></label> 
        &nbsp;&nbsp;<input type="text" name="name" id="name" placeholder="Enter Name Here" onkeyup="validateName()" required > &nbsp;&nbsp;
         <span id="nameerror"></span> <br>
        <br><label ><b>E-mail</b></label> 
        &nbsp;&nbsp;<input type="email" name="email" id="email" placeholder="Enter Email Here" onkeyup="validateEmail()" required>&nbsp;&nbsp;
        <span id="emailerror"></span> <br>
        <br><label><b>Phone Number</b></label>
        &nbsp;&nbsp;<input type="tel" name="phoneno"  placeholder="Enter Phoneno Here" id="phoneno" onkeyup="validatePhoneno()" required>&nbsp;&nbsp;
        <span id="phnoerror"></span> <br>
        <input type="hidden" name="amount" value="<?php echo $amount;?>">
        <input type="hidden" name="plan" value="<?php echo $plan;?>">
        <br><input type="submit" id="PayNow" value="Pay Now">
    </form>
    </body>
</html>
<style>
    h3{
        color:blue;
    }
    span{
        color: green;
    }
    #nameerror, #emailerror, #phnoerror{
        color: red;
    }

</style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script>
    function validateEmail() {
    var email = document.getElementById("email");
    var error = document.getElementById("emailerror");
    var value = email.value;
    
    email.oninput = function() {
    var pattern = new RegExp(/^([a-zA-Z0-9]+)([\._][a-zA-Z0-9]+)*@gmail\.com$/);
    var value = email.value;

    // Check if the email address is valid
    if (!pattern.test(value)) {
      error.innerHTML = "please enter valid gmail address";
    } else {
      error.innerHTML = "";
    }
  };
    }   

    function validateName()
    {
        var name = document.getElementById("name");
        var error = document.getElementById("nameerror");
        var value = name.value;

        // Check if the name is valid
        if (!/^[a-zA-Z\s]+$/.test(value)) {
            error.innerHTML = "Please enter a valid name.";
        } else {
            error.innerHTML = "";
        }
    }

    function validatePhoneno()
    {
        var phone = document.getElementById("phoneno");
        var error = document.getElementById("phnoerror");
        var value = phone.value;

        phone.oninput = function() {
        var pattern = new RegExp(/^[1-9]\d{9}$/);
        var value = phone.value;

        // Check if the phone number is valid
        if (!pattern.test(value)) {
        error.innerHTML = "Please enter a valid 10-digit phone number ";
        } else {
        error.innerHTML = "";
        }
     };
    }
</script>



    <!-- <script>
    const myField = document.getElementById('#name');

    // add an event listener to detect when the field loses focus
    myField.addEventListener('blur', function() {
    // check if the field is empty or not
    if (myField.value.trim() === '') {
        // show an error message to the user
        alert('This field is required!');
    }
    });


 


