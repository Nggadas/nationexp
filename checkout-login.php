<?php
	include("members/config.php");
	session_start();
		$booking_no= $_SESSION['booking_no'];
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Alicktish Web Designs">
		<meta name="description" content="NationExpress24 Delivery is a Made-in-Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria">
		<meta name="keywords" content="NationExpress24, Nation Express 24, Nation Express, NationExpress, NationalExpress, National Express NationalExpress24, Ship, Deliver, Quick Delivery, Fast Delivery, Same day, Next Day, Courier, Express Delivery, National Delivery, Nation Delivery, Nigeria Delivery, Lagos Delivery, Logistics, Ecommerce, Abuja, Ibadan, Port Harcourt, Maiduguri, DHL, UPS, ACE, Courier Service, Delivery Service, Pickup, Delivery, Pickup and Delivery, Fast Delivery, Express Pickup, Pick-up, Ikeja">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/nationexpress24.ico" />
		<title>Place your order - NationExpress24 Delivery</title>
		<!--  bootstrap css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!--  font Awesome Css  -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<!--    stylesheet for fonts-->
		<link href="fonts/stylesheet.css" rel="stylesheet">
		<!-- Reset css-->
		<link href="css/reset.css" rel="stylesheet">

		<!--slick css-->
		<link href="css/slick.css" rel="stylesheet">
		<!--  owl-carousel css -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<!--  YTPlayer css For Background Video -->
		<link href="css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
		<!--  style css  -->
		<link rel="stylesheet" href="css/meanmenu.css">
		<link href="style.css" rel="stylesheet">
		<!--  Responsive Css  -->
		<link href="css/responsive.css" rel="stylesheet">

		<!--  browser campatibel css files-->
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="js1">

		<!--start calculate area-->
		<section class="calculate_area pricing-area version-16" id="tracking" style="margin-top:-100px;">
			<div class="container">
				<div class="row">
						<div class="col-md-5 col-sm-6">
						<div class="calculate_title">
							<h2 style="text-align:center"><a href="index.html"><img src="img/logo1.png"  width="100px" height="100px"></a></h2>
						<h2 style="text-align:center">Login</h2>
							<p>Sign in to your NationExpress24 account to place your order</p>
						<div class="invalid-login" id="invalid-login" style="display:none">
						<h5><font color="red"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp; <span id="error_login">Invalid Login Details</span></font></h5>
								</div>
						</div>

						<div class="calculate_form">
							<form role="form" id="login-form" name="login-form" method="post" action="" class="login-form" autocomplete="OFF">
							<input type="hidden" id="sesbook" name="sesbook" value="<? echo $booking_no; ?>">
								<div class="single_calculate">
									<input type="email" id="email" name="email" required>
									<label>Email Address</label>
								</div>
								<div class="single_calculate">
									<input type="password" id="pass" name="pass" required>
									<label>Password</label>
								</div>
								<input type="hidden" id="access" name="access">
								<div class="calculat-button" style="text-align:center">
									<input type="submit" class="calulate" value="CONTINUE" id="calulate_btn" name="calulate_btn">
									<span id="loading" style="display:none"><img src="img/loading1.gif"></span>
								</div>
								<p></p>
								<div class="calculat-button" style="text-align:center">
									<p>Don't have an account? <a href="signup.php">Sign Up</a></p>
									<p><a href="password-recovery.html">Forgot Password</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!--    end of calculate area-->





		<!--  jquery.min.js  -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<!--    bootstrap.min.js-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!--    jquery.sticky.js-->
		<script src="js/jquery.sticky.js"></script>
		<!--  owl.carousel.min.js  -->
		<script src="js/jquery.meanmenu.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<!--  jquery.mb.YTPlayer.min.js   -->
		<script src="js/jquery.mb.YTPlayer.min.js"></script>
		<!--    slick.min.js-->
		<script src="js/slick.min.js"></script>
		<!--    jquery.nav.js-->
		<script src="js/jquery.nav.js"></script>
		<!--jquery waypoints js-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!--    jquery counterup js-->
		<script src="js/jquery.counterup.min.js"></script>
		<!--    main.js-->
		<script src="js/main.js"></script>
		<!--Start of Live Chat Script-->
		<script src="js/chat.js"></script>
		<!--End of Live Chat Script-->
		<!--    login.js-->
		<script src="js/chklogin.js"></script>
	</body>

</html>
