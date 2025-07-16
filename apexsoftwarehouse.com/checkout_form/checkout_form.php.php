
<!DOCTYPE html> 
<html>
	<head>
		<title>Sky Forms</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/sky-forms-purple.css">
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
	<body class="bg-purple" style="background-image: url('images/bg-purple.jpg');">
		<div class="body">
		
			<form action="razorpay/test_1/php" class="sky-form">
				<header>Checkout form</header>
				
				<fieldset>					
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<img src="images/person-icon.png" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">
								<!-- <i class="icon-prepend icon-user"></i> -->
								<input type="text" placeholder="First name">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<img src="images/person-icon.png" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">
								<!-- <i class="icon-prepend icon-user"></i> -->
								<input type="text" placeholder="Last name">
							</label>
						</section>
					</div>
					
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<img src="images/mail-logo.jpg" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">
								<!-- <i class="icon-prepend icon-envelope-alt"></i> -->
								<input type="email" placeholder="E-mail">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<img src="images/call-icon-vector.jpg" alt="" style="height:25px; opacity: 0.3; border-right: 1px solid grey; " class="icon-prepend icon-user">													
								<!-- <i class="icon-prepend icon-phone"></i> -->
								<input type="tel" placeholder="Phone">
							</label>
						</section>
					</div>
				</fieldset>
				
				

				
				<footer>
					<button type="submit" class="button">Continue</button>
				</footer>
			</form>
			
		</div>
	</body>
</html>