<?php
	include("check.php");
	include("update_order_submit.php");	
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
		<link rel="shortcut icon" href="resources/img/nationexpress24.ico" />
		<title>Update Status - NationExpress24 Delivery</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="resources/fonts/stylesheet.css" rel="stylesheet">
		<link href="resources/css/reset.css" rel="stylesheet">
		<link href="resources/css/slick.css" rel="stylesheet">
		<link href="resources/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
		<link rel="stylesheet" href="resources/css/meanmenu.css">
		<link href="resources/css/owl.carousel.css" rel="stylesheet">
		<link href="resources/css/style.css" rel="stylesheet">
		<link href="resources/css/responsive.css" rel="stylesheet">
		
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	
	<body class="js">
		<div class="tel_header"><i class="fa fa-envelope" aria-hidden="true"></i> <font color="red">info@nationexpress24.com</font>  &nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i> Call our hotline 0805-773-2873 or <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp 0817-033-3258</div>
		<div id="preloader"></div>
		
		<section class="about-us">
			<div class="logo_menu" id="sticker1">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4 col-sm-8 col-xs-10">
							<div class="logo">
								<a href="../index.html"><img src="resources/img/logo_1.png" alt="logo"  height="90px" ></a>
							</div>
						</div>
						<div class="col-md-6 col-xs-10 col-md-offset-1  col-lg-offset-1 col-lg-7 mobMenuCol">
							<nav class="navbar">
								<!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
                                    <li class="current-menu-item"><a href="./" title="Go to Admin Portal">Welcome, <? echo $first_name; ?></a>
									</li>
                                    <li><a href="../service.php">services</a></li>
									<li><a href="../track.php">track your parcel</a></li>
                                    <li><a href="../pricing.php">pricing</a></li>
                                    <li><a href="../contact.php">contact</a></li>
									<li class="signup1"><a href="logout">logout</a></li>
								</ul>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!--    start pricing area-->
		<!-- Pricing Area -->
		<section class="calculate_area pricing-area version-16" id="tracking">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6">
						<div class="calculate_title">
							<h2>Update Order Status</h2>
							<p>Here you can update an order status for tracking number <? echo $booking_no; ?>.</p>
							<? if($mycolor){ ?>
								<div class="invalid-login" id="invalid-login">
									<h5><font color="<? echo $mycolor; ?>"><i class="fa fa-<? echo $mylogo; ?>" aria-hidden="true"></i> &nbsp; <span id="error_login"><? echo $statusmessage; ?></span></font></h5>
									
								</div>
							<? } ?>
							<p><font color="#000"><b>Order Information</b></font></p>
						</div>
						<div class="calculate_form">
							<form role="form" id="delivery-form" name="delivery-form" method="post" action="" class="delivery-form" autocomplete="OFF">
								<div class="single_calculate">
										<select name="customer_name" id="customer_name">
											<option value="" selected="selected">Customer Name: <? echo $myid_firstname; ?> <? echo $myid_lastname; ?></option>
										</select>	
									</div>
								<div class="single_calculate">
										<select name="acct_id" id="acct_id" required="required">
											<option value="<? echo $myid_exists; ?>" selected="selected">Customer ID: <? echo $myid_exists; ?></option>
										</select>	
									</div>
								<div class="single_calculate">
									<input type="text" name="last_name" id="last_name" required="required">
									<label>Contact Person</label>
								</div>
								<div class="single_calculate">
									<input type="text" name="phone_no" id="phone_no" required="required" maxlength="11">
									<label>Phone Number</label>
								</div>
								
								<div class="single_calculate">
									<input type="text" name="alt_phone_no" id="alt_phone_no" maxlength="11">
									<label>2nd Phone Number</label>
								</div>
								<div class="single_calculate">
									<input type="text" name="email" id="email">
									<label>Email Address</label>
								</div>
								<div class="single_calculate">
									<input type="text" name="address" id="address" required="required">
									<label>Street Address</label>
								</div>
								<div class="single_calculate">
									<input type="text" name="city" id="city" required="required">
									<label>City</label>
								</div>
								<div class="single_calculate">
									<input type="text" name="bus_stop" id="bus_stop">
									<label>Bus Stop</label>
								</div>
								<div class="single_calculate">
								<select name="state" id="state">
									<option value="" selected="selected">SELECT STATE</option>
													<option value="Abuja FCT">Abuja FCT</option>
													<option value="Abia">Abia</option>
													<option value="Adamawa">Adamawa</option>
													<option value="Akwa Ibom">Akwa Ibom</option>
													<option value="Anambra">Anambra</option>
													<option value="Bauchi">Bauchi</option>
													<option value="Bayelsa">Bayelsa</option>
													<option value="Benue">Benue</option>
													<option value="Borno">Borno</option>
													<option value="Cross River">Cross River</option>
													<option value="Delta">Delta</option>
													<option value="Ebonyi">Ebonyi</option>
													<option value="Edo">Edo</option>
													<option value="Ekiti">Ekiti</option>
													<option value="Enugu">Enugu</option>
													<option value="Gombe">Gombe</option>
													<option value="Imo">Imo</option>
													<option value="Jigawa">Jigawa</option>
													<option value="Kaduna">Kaduna</option>
													<option value="Kano">Kano</option>
													<option value="Katsina">Katsina</option>
													<option value="Kebbi">Kebbi</option>
													<option value="Kogi">Kogi</option>
													<option value="Kwara">Kwara</option>
													<option value="Lagos">Lagos</option>
													<option value="Nassarawa">Nassarawa</option>
													<option value="Niger">Niger</option>
													<option value="Ogun">Ogun</option>
													<option value="Ondo">Ondo</option>
													<option value="Osun">Osun</option>
													<option value="Oyo">Oyo</option>
													<option value="Plateau">Plateau</option>
													<option value="Rivers">Rivers</option>
													<option value="Sokoto">Sokoto</option>
													<option value="Taraba">Taraba</option>
													<option value="Yobe">Yobe</option>
													<option value="Zamfara">Zamfara</option>
												</select>
								</div>
								<div class="single_calculate">
									<input type="text" name="country" id="country">
									<label>Country</label>
								</div>
								<div class="calculat-button">
									<input type="submit" class="calulate" value="NEXT" id="submit_button" name="submit_button">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			
		</section>
		<!-- /.End Of Pricing Area -->
		
		<section class="footer-area" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
						<div class="single-footer">
							<h2>ABOUT US</h2>
							<p>NationExpress24 Delivery is a Made-in-Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria.</p>
							<p><a href="../about.html">Read More...</a></p>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-2">
							<div class="single-footer">
								<h2>More links</h2>
								<ul class="list">
									<li><a href="../schedule-a-pickup.html">Schedule a Pickup</a></li>
									<li><a href="../faq.html">FAQ</a></li>
									<li><a href="../terms.html">Terms and Conditions</a></li>
									<li><a href="../privacy-policy.html">Privacy Policy</a></li>
									<li><a href="../shipping-policy.html">Shipping Policy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
							<div class="single-footer">
								<h2>We Accept</h2>
								<a href=""><img src="resources/img/cards_credt_1.png"></a>
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
								<p>&copy; Copyright 2017, NationExpress24 Delivery ~ All Rights Reserved</p>
							</div>
						</div>
						<div class="col-xs-12  col-sm-6 col-md-6 text-right">
							<div class="footer-text">
								<a href="" class="fa fa-facebook"></a>
								<a href="" class="fa fa-twitter"></a>
								<a href="" class="fa fa-instagram"></a>	
							</div>	
						</div>
					</div>
				</div>
				<!--    end of copyright text area-->
				
				
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
				<script src="resources/js/jquery.counterup.min.js"></script>
				<script src="resources/js/jquery.sticky.js"></script>
				<script src="resources/js/owl.carousel.min.js"></script>
				<script src="resources/js/jquery.meanmenu.js"></script>
				<script src="resources/js/slick.min.js"></script>
				<script src="resources/js/jquery.nav.js"></script>
				<script src="resources/js/jquery.mb.YTPlayer.min.js"></script>
				<script src="resources/js/main.js"></script>
				<!--Start of Live Chat Script-->
				<script src="resources/js/chat.js"></script>
				<!--End of Live Chat Script-->
			</body>
			
		</html>		