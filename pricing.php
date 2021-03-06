<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Alicktish Web Designs">
		<meta name="description" content="NationExpress24 Delivery is a Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria">
		<meta name="keywords" content="NationExpress24, Nation Express 24, Nation Express, NationExpress, NationalExpress, National Express NationalExpress24, Ship, Deliver, Quick Delivery, Fast Delivery, Same day, Next Day, Courier, Express Delivery, National Delivery, Nation Delivery, Nigeria Delivery, Lagos Delivery, Logistics, Ecommerce, Abuja, Ibadan, Port Harcourt, Maiduguri, DHL, UPS, ACE, Courier Service, Delivery Service, Pickup, Delivery, Pickup and Delivery, Fast Delivery, Express Pickup, Pick-up, Ikeja">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/nationexpress24.ico" />
		<title>Pricing - NationExpress24 Delivery</title>
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

		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtcKGRPaOaYySbnowFpTW5N9XSGC2sxFQ&libraries=places&language=en&region=ng"></script> -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNv9dwdn5mvx25sxzHvq8UlLWeUyth2BI&libraries=places&language=en&region=ng"></script>
	</head>

	<body class="js1">
		<div class="tel_header"><i class="fa fa-envelope" aria-hidden="true"></i> <font color="red">info@nationexpress24.com</font>  &nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i> Call our hotline 0805-773-2873 or <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp 0817-033-3258</div>
		<!--start header area-->
		<div id="preloader"></div>
		<section class="about-us">
			<!--   start logo & menu markup    -->
			<div class="logo_menu" id="sticker1">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4 col-sm-8 col-xs-10">
							<div class="logo">
								<a href="index.php"><img src="img/logo_1.png" alt="logo"  height="90px" ></a>
							</div>
						</div>
						<div class="col-md-6 col-xs-10 col-md-offset-1  col-lg-offset-1 col-lg-7 mobMenuCol">
							<nav class="navbar">
								<!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
									<?php
										if (!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "true") {?>
											<li class="menu-item"><a href="adminportal/">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "false"){ ?>
											<li class="menu-item"><a href="members/">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(empty($_SESSION['isAdmin'])){ ?>
											<li><a href="index.php">home</a></li>
									<?php } ?>
                                    <li><a href="service.php">services</a></li>
									<li><a href="track.php">track your parcel</a></li>
                                    <li class="current-menu-item"><a href="pricing.php">pricing</a></li>
                                    <li><a href="contact.php">contact</a></li>
									<?php
										if (!empty($_SESSION['id'])) {?>
											<li class="signup1"><a href="adminportal/logout">logout</a></li>
										<?php }else{ ?>
											<li class="signup1"><a href="login.html">login</a></li>
											<li class="signup2"><a href="signup.html">sign up</a></li>
									<?php } ?>
								</ul>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--   end of logo menu markup     -->

		<!--end of header area-->
		</section>
		<!--    end of about top area-->

		<!--start calculate area-->
		<section class="calculate_area pricing-area version-6" id="tracking">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6">
						<div class="calculate_title">
							<h2>Get an Estimate</h2>
							<p>The success of your business begins here!</p>
						</div>
						<div class="calculate_form">
							<form role="form" id="pricing-form" name="pricing-form" method="post" action="" class="pricing-form" autocomplete="OFF">
								<div class="single_calculate">
									<input type="text" id="pickup_address" autocomplete="on">
									<input type="hidden" id="pickup_address1" name="pickup_address1">
									<input type="hidden" id="pickup_full_address1" name="pickup_full_address1">
									<input type="hidden" id="pickup_lga1" name="pickup_lga1">
									<input type="hidden" id="pickup_town1" name="pickup_town1">
									<input type="hidden" id="pickup_city1" name="pickup_city1">
									<input type="hidden" id="pickup_state1" name="pickup_state1">
									<input type="hidden" id="pickup_country1" name="pickup_country1">
									<label>Pickup Location</label>
								</div>
								<div class="single_calculate">
									<input type="text" id="delivery_address" autocomplete="on">
									<input type="hidden" id="delivery_address1" name="delivery_address1">
									<input type="hidden" id="delivery_full_address1" name="delivery_full_address1">
									<input type="hidden" id="delivery_lga1" name="delivery_lga1">
									<input type="hidden" id="delivery_town1" name="delivery_town1">
									<input type="hidden" id="delivery_city1" name="delivery_city1">
									<input type="hidden" id="delivery_state1" name="delivery_state1">
									<input type="hidden" id="delivery_state1_short" name="delivery_state1_short">
									<input type="hidden" id="delivery_country1" name="delivery_country1">
									<label>Delivery Location</label>
								</div>
								<div class="single_calculate">
									<input type="text" name="weight_kg" id="weight_kg" required="required" placeholder="in KG">
									<label>Weight</label>
								</div>
								<div class="calculat-button">
									<input type="submit" class="calulate" id="pricing_button" value="GET THE ESTIMATE NOW">
									<span id="loading" style="display:none"><img src="img/loading1.gif"></span>
								</div>
								<div class="totla-cost" id="error_slate" style="display:none">
								</div>
							</form>
							<!-- Show error message -->
							<div class="invalid-login" id="errors" style="display:none">
								<p><font color="red"><i class="fa fa-exclamation-triangle"></i> &nbsp; <span id="error-msg"></span></font></p>
							</div>
							<div class="totla-cost" id="price_slate" style="height:200px;display:none">
								<form id="payment-form">
									<h5>Pickup Cost: <input style="border:none;" name="pickup_cost" id="pickup_price" required readonly></h5><br>
									<h5>Delivery Cost: <input style="border:none;" name="delivery_cost" id="delivery_price" required readonly></h5><br>
									<div class="single_calculate">
										<select name="payment_method" id="payment_method" required>
											<option value="" selected="selected">Select Payment Method</option>
											<option value="internet_banking">Internet Banking</option>
											<option value="short_code">Short Code</option>
											<option value="Payment_on_delivery">Payment On Delivery</option>
										</select>
									</div>
									<h5><input type="button" class="calulatea" id="order_button" value="ORDER NOW"></h5>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="calculat-image">
				<img src="img/steps1.png" alt="#" height="627" width="577">
			</div>
		</section>
		<!--    end of calculate area-->

		<section class="footer-area" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
						<div class="single-footer">
							<h2>ABOUT US</h2>
							<p>NationExpress24 Delivery is a Made-in-Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria.</p>
							<p><a href="about.html">Read More...</a></p>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-12 col-lg-2">
						<div class="single-footer">
							<h2>More links</h2>
							<ul class="list">
								<li><a href="schedule-a-pickup.html">Schedule a Pickup</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="terms.html">Terms and Conditions</a></li>
								<li><a href="privacy-policy.html">Privacy Policy</a></li>
								<li><a href="shipping-policy.html">Shipping Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
						<div class="single-footer">
							<h2>We Accept</h2>
							<img src="img/cards_credt_1.png">
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
						<div class="single-footer clearfix">
							<h2>Contact Us</h2>
							<p>Phone numbers: 08170333258 and 08057732873</p>
							<p>WhatsApp: 08057732873</p>
							<p>Email address: info@nationexpress24.com</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--end of footer area-->

		<!--   start copyright text area-->
		<div class="copyright-area">
			<div class="container">
				<div class="col-xs-12 col-sm-6 col-md-6 text-left">
					<div class="footer-text">
						<p>&copy; Copyright 2018, NationExpress24 Delivery ~ All Rights Reserved</p>
					</div>
				</div>
				<div class="col-xs-12  col-sm-6 col-md-6 text-right">
					<div class="footer-text">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-instagram"></a>
						</div>
				</div>
			</div>
		</div>
		<!--    end of copyright text area-->

		<!--  jquery.min.js  -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<!--    bootstrap.min.js-->
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
		<!--Get location-->
		<script src="js/loc.js"></script>
		<script src="js/fare.js"></script>
		<!-- <script src="js/mfare.js"></script> -->
		<script src="js/payment.js"></script>
		<script>
		function alphaOnly(event) {
			var key = event.keyCode;
			return ((key >= 48 && key <= 57 && key <= 190) || key == 8);
		};
		var element = document.querySelector('#weight_kg');
		element.addEventListener('input', (event) => {
		event.target.value = event.target.value
			// Remove anything that isn't valid in a number
			.replace(/[^\d-.]/g, '')
			// Remove all periods unless it is the last one
			.replace(/\.(?=.*\.)/g, '');
		});
		</script>
	</body>

</html>
