
<!DOCTYPE html> 
<html>
	<head>
		<title>Sky Forms</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="demo.css">
		<link rel="stylesheet" href="sky-forms.css">
		<link rel="stylesheet" href="sky-forms-purple.css">

		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	</head>
	<body class="bg-purple" style="background-image: url('bg-purple.jpg');">
		<div class="body">
		
			<form action="payment.php" class="sky-form" method="post" onsubmit="return validateForm()">
				<header>Checkout form</header>
				<?php
				if(isset($_POST['plan1']))
				{
					$amount = 40000; $plan = "E-Commerce Website";
				}
				if(isset($_POST['plan2']))
				{
					$amount = 2000; $plan = "Dynamic Website";
				}
				if(isset($_POST['plan3']))
				{
					$amount = 1100; $plan = "Static Website";
				}

				?>
				<header>
					<?php echo "<h3>".$plan."</h3>"; ?>
					<?php echo "price = ".$amount." ₹";?>
				</header>
				<fieldset>					
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<img src="person-icon.png" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">
								<!-- <i class="icon-prepend icon-user"></i> -->
								<input type="text" placeholder="First name" name="fname" id="firstName" >
								<span id = "firstName-error" style="color:red;"></span>
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<img src="person-icon.png" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">
								<!-- <i class="icon-prepend icon-user"></i> -->
								<input type="text" placeholder="Last name" name="lname" id="lastName"  >
								<span id="lastName-error" style="color:red;"></span>
							</label>
						</section>
					</div>
					
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<img src="mail-logo.jpg" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">
								<!-- <i class="icon-prepend icon-envelope-alt"></i> -->
								<input type="email" placeholder="E-mail" name="email" id="email" >
								<span id="email-error" style="color: red;"></span>
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<img src="call-icon-vector.jpg" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">													
								<!-- <i class="icon-prepend icon-phone"></i> -->
								<input type="tel" placeholder="Phone" name="phoneno" id="phone" >
								<span id="phone-error" style="color: red;"></span>
							</label>
						</section>
					</div>
				</fieldset>


	

				<input type="hidden" name="amount" value="<?php echo $amount ?>">
				<input type="hidden" name="plan" value="<?php echo $plan ?>">

				<footer>
					<input type="submit"  class="button" value="Pay Now">
				</footer>
			</form>
			
		</div>
	</body>
</html>



<script>

    // First Name Validation
    document.getElementById('firstName').addEventListener('input', function() {
      var firstName = this.value;
      var nameRegex = /^[a-zA-Z]+$/;

      if (firstName === '') {
        document.getElementById('firstName-error').innerHTML = 'First name field cannot be blank.';
      } else if (!nameRegex.test(firstName)) {
        document.getElementById('firstName-error').innerHTML = 'Invalid first name format.';
      } else {
        document.getElementById('firstName-error').innerHTML = '';
      }
    });

    // Last Name Validation
    document.getElementById('lastName').addEventListener('input', function() {
      var lastName = this.value;
      var nameRegex = /^[a-zA-Z]+$/;

      if (lastName === '') {
        document.getElementById('lastName-error').innerHTML = 'Last name field cannot be blank.';
      } else if (!nameRegex.test(lastName)) {
        document.getElementById('lastName-error').innerHTML = 'Invalid last name format.';
      } else {
        document.getElementById('lastName-error').innerHTML = '';
      }
    });

    // Email Validation
    document.getElementById('email').addEventListener('input', function() {
      var email = this.value;
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (email === '') {
        document.getElementById('email-error').innerHTML = 'Email field cannot be blank.';
      } else if (!emailRegex.test(email)) {
        document.getElementById('email-error').innerHTML = 'Invalid email format.';
      } else {
        document.getElementById('email-error').innerHTML = '';
      }
    });

    // Phone Number Validation
    document.getElementById('phone').addEventListener('input', function() {
      var phone = this.value;
      var phoneRegex = /^\d{10}$/;

      if (phone === '') {
        document.getElementById('phone-error').innerHTML = 'Phone number field cannot be blank.';
      } else if (!phoneRegex.test(phone)) {
        document.getElementById('phone-error').innerHTML = 'Invalid phone number format.';
      } else {
        document.getElementById('phone-error').innerHTML = '';
      }
    });

    // Form Submission Validation
    function validateForm() {
      var firstName = document.getElementById('firstName').value;
      var lastName = document.getElementById('lastName').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;

      if (firstName === '' || lastName === '' || email === '' || phone === '') {
        return false; // Prevent form submission if any field is blank
      }

      var nameRegex = /^[a-zA-Z]+$/;
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var phoneRegex = /^\d{10}$/;

      if (!nameRegex.test(firstName) || !nameRegex.test(lastName) || !emailRegex.test(email) || !phoneRegex.test(phone)) {
        return false; // Prevent form submission if any field has an invalid format
      }

      return true; // Allow form submission
    }
</script>
<!-- <script>
var options = {
    "key": "rzp_test_1Gz6aLm6CN3kjh", // Enter the Key ID generated from the Dashboard
    "amount": "", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script> -->