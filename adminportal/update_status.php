<!DOCTYPE html>
<?php
	include("check.php");
	include("update_status_check.php");
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Alicktish Web Designs">
		<meta name="description" content="NationExpress24 Delivery is a Made-in-Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria">
		<meta name="keywords" content="NationExpress24, Nation Express 24, Nation Express, NationExpress, NationalExpress, National Express NationalExpress24, Ship, Deliver, Quick Delivery, Fast Delivery, Same day, Next Day, Courier, Express Delivery, National Delivery, Nation Delivery, Nigeria Delivery, Lagos Delivery, Logistics, Ecommerce, Abuja, Ibadan, Port Harcourt, Maiduguri, DHL, UPS, ACE, Courier Service, Delivery Service, Pickup, Delivery, Pickup and Delivery, Fast Delivery, Express Pickup, Pick-up, Ikeja">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="resources/img/nationexpress24.ico" />
		<title>Update Order Status - NationExpress24 Delivery</title>
		<!--  bootstrap css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!--  font Awesome Css  -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<!--    stylesheet for fonts-->
		<link href="resources/fonts/stylesheet.css" rel="stylesheet">
		<!-- Reset css-->
		<link href="resources/css/reset.css" rel="stylesheet">
		
		<!--slick css-->
		<link href="resources/css/slick.css" rel="stylesheet">
		<!--  owl-carousel css -->
		<link href="resources/css/owl.carousel.css" rel="stylesheet">
		<!--  YTPlayer css For Background Video -->
		<link href="resources/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
		<!--  style css  -->
		<link rel="stylesheet" href="resources/css/meanmenu.css">
		<link href="resources/css/style.css" rel="stylesheet">
		<!--  Responsive Css  -->
		<link href="resources/css/responsive.css" rel="stylesheet">
		
		<!--  browser campatibel css files-->
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
								<a href="../index.php"><img src="resources/img/logo_1.png" alt="logo"  height="90px" ></a>
							</div>
						</div>
						<div class="col-md-6 col-xs-10 col-md-offset-1  col-lg-offset-1 col-lg-7 mobMenuCol">
							<nav class="navbar">
								<!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
                                    <li class="current-menu-item">
										<a href="./" title="Go to Admin Portal" >Welcome, <?php echo $first_name; ?></a>
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
							<h2>Update Order Status</h2>
							<p>You can update the order status for <?php echo $booking_no ?></p>
							<?php
                                if(!empty($error)){
									echo '<span style="margin-bottom: 10px; padding: 5px; color: #fff; background: #ff471a;">' . $error . '</span>';
								}
                            ?>
						</div>
						<div class="calculate_form">
							<form method="post" autocomplete="off">
								<div style="background: #e0e0d1; color: #000;" class="single_calculate">
									<input style="background: #e0e0d1; color: #000;" type="text" id="description" name="description" value="<?php echo $good_description ?>" readonly>
									<label>Product</label>
								</div>
								<div style="background: #e0e0d1; color: #000;" class="single_calculate">
									<input style="background: #e0e0d1; color: #000;" type="text" id="quantity" name="quantity" value="<?php echo $quantity ?>" readonly>
									<label>Quantity</label>
								</div>
								<div style="background: #e0e0d1; color: #000;" class="single_calculate">
									<input style="background: #e0e0d1; color: #000;" type="text" id="value_of_contents" name="value_of_contents" value="<?php echo $value_of_contents ?>" readonly>
									<label>Price (₦)</label>
								</div>
								<div class="single_calculate">
									<input type="text" id="description" name="description" value="<?php echo $description ?>">
									<label>Description</label>
								</div>
								<div class="single_calculate">
									<input type="text" id="activity" name="activity" value="<?php echo $activity ?>">
									<label>Activity</label>
								</div>
								<div class="single_calculate">
									<input type="text" id="comment" name="comment" value="<?php echo $comment ?>">
									<label>Comment</label>
								</div>
								<div class="single_calculate">
									<input type="text" id="city" name="city" value="<?php echo ucfirst(strtolower($city)) ?>">
									<label>City</label>
								</div>
								<!-- Delivery State -->
								<div style="background: #22313f; color: #fff;" class="single_calculate">
									<input style="background: #22313f; color: #fff;" type="text" value="<?php echo ucfirst(strtolower($state)); ?>" readonly>
									<label style="background: #22313f; color: #fff;">Current State :</label>
								</div>
								<div class="single_calculate">
									<select name="state" id="state" required>
									<option value="<?php echo $state ?>" selected="selected">Change State</option>
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
								<!-- Delivery Status -->
								<div style="background: #22313f; color: #fff;"  class="single_calculate">
									<input style="background: #22313f; color: #fff;"  type="text" id="status" name="status" value="<?php echo ucwords(str_replace('_', ' ', $tstatus)); ?>" readonly>
									<label style="background: #22313f; color: #fff;" >Status :</label>
								</div>
								<div class="single_calculate">
									<select id="select_status" name="new_status" required>
    									<option value="<?php echo $tstatus; ?>" disabled selected>Change Status...</option>
										<option value="order_booked">Order Booked</option>
										<option value="in_transit">In Transit</option>
										<option value="delivered">Delivered</option>
										<option value="out_for_delivery">Out for Delivery</option>
										<option value="undelivered">Undelivered</option>
										<option value="order_cancelled">Order Cancelled</option>
										<option value="toggle_custom">Custom Status</option>
									</select>
								</div>
								<div id="custom_status" class="single_calculate">
									<input type="text" name="custom_status">
									<label>Custom Status</label>
								</div>
								<div class="calculate-button">
									<input type="submit" class="calulate" id="submit" name="submit" value="UPDATE">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="calculat-image">
				<img src="resources/img/boxes.png" height="347" width="537" style="padding-right:100px;padding-bottom:40px;">
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
							<a href=""><img src="resources/img/cards_credt_1.png" alt="#"></a>
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
		
		<!--  jquery.min.js  -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<!--    bootstrap.min.js-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!--    jquery.sticky.js-->
		<script src="resources/js/jquery.sticky.js"></script>
		<!--  owl.carousel.min.js  -->
		<script src="resources/js/jquery.meanmenu.js"></script>
		<script src="resources/js/owl.carousel.min.js"></script>
		<!--  jquery.mb.YTPlayer.min.js   -->
		<script src="resources/js/jquery.mb.YTPlayer.min.js"></script>
		<!--    slick.min.js-->
		<script src="resources/js/slick.min.js"></script>
		<!--    jquery.nav.js-->
		<script src="resources/js/jquery.nav.js"></script>
		<!--jquery waypoints js-->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!--    jquery counterup js-->
		<script src="resources/js/jquery.counterup.min.js"></script>
		<!--    main.js-->
		<script src="resources/js/main.js"></script>
		<!--Start of Live Chat Script-->
		<script src="resources/js/chat.js"></script>
		<!--End of Live Chat Script-->
		<script src="resources/js/toggle_custom.js"></script>
	</body>
	
</html>