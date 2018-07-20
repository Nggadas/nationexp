<!DOCTYPE html>
<?php
	include("check.php");
	include("update_order_check.php");
	include("update_order_submit.php");
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
		<title>Edit Order - NationExpress24 Delivery</title>
		
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
		<link href="resources/css/form_wizard.css" rel="stylesheet">
		
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
								<a href="../index.php"><img src="resources/img/logo_1.png" alt="logo"  height="90px" ></a>
							</div>
						</div>
						<div class="col-md-6 col-xs-10 col-md-offset-1  col-lg-offset-1 col-lg-7 mobMenuCol">
							<nav class="navbar">
								<!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
                                    <li class="current-menu-item"><a href="./" title="Go to Admin Portal">Welcome, <?php echo $first_name; ?></a>
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
							<h2>Edit Order</h2>
							<p>Here you can edit an order status for tracking number <?php echo $booking_no; ?>.</p>
							<p><font color="#000"><b>Order Information</b></font></p>
						</div>
							<?php 
                                if(!empty($error)){
									echo '<span style="margin-bottom: 10px; padding: 5px; color: #fff; background: #ff471a;">' . $error . '</span>';
									echo '<br>';
									echo '<br>';
								} elseif (!empty($_SESSION['success'])){
									echo '<span style="margin-bottom: 10px; padding: 5px; color: #fff; background: #329954;">' . $_SESSION['success'] . '</span>';
									echo '<br>';
									echo '<br>';
								}
                            ?>
						<div class="calculate_form">
							<form role="form" id="submit-form" name="delivery-form" method="post" action="" class="delivery-form" autocomplete="OFF">
								
								<!-- User Details -->
								<div class="single_calculate">
										<select name="customer_name" id="customer_name">
											<option value="" selected="selected">Customer Name: <?php echo $customer_name ?></option>
										</select>	
								</div>
								<div class="single_calculate">
										<select name="acct_id" id="acct_id" required="required">
											<option value="<?php echo $customer_id; ?>" selected="selected">Customer ID: <?php echo $customer_id; ?></option>
										</select>	
								</div>

								<!-- Delivery Details -->
								<div class="tab">
									<div class="single_calculate">
										<select name="acct_id" id="acct_id" required="required">
											<option selected="selected">Delivery Details</option>
										</select>	
									</div>
									<div class="single_calculate">
										<input type="text" name="contact_person" id="last_name" required="required" value="<?php echo $contact_person ?>">
										<label>Contact Person</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="phone_no" id="phone_no" required="required" value="<?php echo $phone_no ?>" maxlength="11">
										<label>Phone Number</label>
									</div>
									
									<div class="single_calculate">
										<input type="text" name="alt_phone_no" id="alt_phone_no" class="optional" maxlength="11" value="<?php echo $alt_phone_no ?>">
										<label>2nd Phone Number</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="email" id="email" value="<?php echo $email ?>">
										<label>Email Address</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="address" id="address" required="required" value="<?php echo $delivery_address ?>">
										<label>Street Address</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="city" id="city" required="required"  value="<?php echo $city ?>">
										<label>City</label>									
									</div>
									<div class="single_calculate">
										<input type="text" name="bus_stop" id="bus_stop" class="optional" value="<?php echo $bus_stop ?>">
										<label>Bus Stop</label>
									</div>
									<div class="single_calculate">
										<select name="state" id="state" required>
										<option value="<?php echo $state ?>" selected="selected"><?php echo strtoupper($state) ?> : CHANGE STATE</option>
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
										<input type="text" name="country" id="country" value="<?php echo $country ?>">
										<label>Country</label>
									</div>
								</div>
								
								<!-- Parcel Details -->
								<div class="tab">
									<div class="single_calculate">
										<select name="acct_id" id="acct_id" required="required">
											<option selected="selected">Parcel Details</option>
										</select>	
									</div>
									<div class="single_calculate">
										<input type="text" name="product" id="product" required="required" value="<?php echo $product ?>">
										<label>Product</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="quantity" id="quantity" required="required" value="<?php echo $quantity ?>">
										<label>Quantity</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="price" id="price" required="required" value="<?php echo $price ?>">
										<label>Price (₦)</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="weight" id="weight" required="required" value="<?php echo $weight ?>">
										<label>Weight (kg)</label>
									</div>
								</div>
								
								<!-- Pickup Details -->
								<div class="tab">
									<div class="single_calculate">
										<select name="acct_id" id="acct_id" required="required">
											<option selected="selected">Pickup Details</option>
										</select>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_person" id="pickup_person" required="required" value="<?php echo $pickup_person ?>">
										<label>Contact Person</label>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_address" id="pickup_address" required="required" value="<?php echo $pickup_address ?>">
										<label>Pickup address</label>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_bus_stop" id="pickup_bus_stop" class="optional" required="required" value="<?php echo $pickup_bus_stop ?>">
										<label>Bus Stop</label>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_city" id="pickup_city" required="required" value="<?php echo $pickup_city ?>">
										<label>City</label>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_phone_no" id="pickup_phone_no" required="required" maxlength="11" value="<?php echo $pickup_phone_no ?>">
										<label>Phone Number</label>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_alt_phone_no" id="pickup_alt_phone_no" class="optional" required="required" maxlength="11" value="<?php echo $pickup_alt_phone_no ?>">
										<label>2nd Phone Number</label>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_email" id="pickup_email" required="required" value="<?php echo $pickup_email ?>">
										<label>Email</label>
									</div>
									<div class="single_calculate">
										<input type="text" class="optional" name="pickup_date" id="pickup_date" required="required" value="<?php echo $pickup_date ?>">
										<label>Date</label>
									</div>
									<div class="single_calculate">
										<select name="pickup_state" id="pickup_state" required>
										<option value="<?php echo $pickup_state ?>" selected="selected"><?php echo strtoupper($pickup_state) ?> : CHANGE STATE</option>
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
								</div>
								
								<!-- Payment Details -->
								<div class="tab">
									<div class="single_calculate">
										<select name="acct_id" id="acct_id" required="required">
											<option selected="selected">Payment Details</option>
										</select>	
									</div>
									<div class="single_calculate">
										<input type="text" name="delivery_cost" id="delivery_cost" required="required" value="<?php echo $delivery_cost ?>">
										<label>Delivery Cost (₦)</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="insurance_fee" id="insurance_fee" required="required" value="<?php echo $insurance_fee ?>">
										<label>Insurance Fee (₦)</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="pickup_cost" id="pickup_cost" required="required" value="<?php echo $pickup_cost ?>">
										<label>Pickup Cost (₦)</label>
									</div>
									<div class="single_calculate">
										<input type="text" name="total_cost" id="total_cost" required="required" value="<?php echo $total_cost ?>" readonly>
										<label>Total Cost (₦)</label>
									</div>
									<!-- Payment method -->
									<div style="background: #f9bf3b; color: #fff;" class="single_calculate">
										<input style="background: #f9bf3b; color: #fff;" type="text" value="<?php echo ucwords(str_replace('_', ' ', $payment_method)); ?>" readonly>
										<label style="background: #f9bf3b; color: #fff;">Payment Method :</label>
									</div>
									<div class="single_calculate">
										<select name="payment_method" id="payment_method" required>
											<option value="<?php echo $payment_method ?>" selected="selected">Change Payment Method</option>
											<option value="internet_banking">Internet Banking</option>
											<option value="short_code">Short Code</option>
											<option value="Payment_on_delivery">Payment On Delivery</option>
										</select>	
									</div>
									<!-- Payment status -->
									<div style="background: #f9bf3b; color: #fff;" class="single_calculate">
										<input style="background: #f9bf3b; color: #fff;" type="text" value="<?php echo $payment_status ?>" readonly>
										<label style="background: #f9bf3b; color: #fff;">Payment Status :</label>
									</div>
									<div class="single_calculate">
										<select name="payment_status" id="payment_status" required>
											<option value="<?php echo $payment_status ?>" selected="selected">Change Payment Status</option>
											<option value="unpaid">Unpaid</option>
											<option value="paid">Paid</option>
											<option value="toggle_custom">Custom Status</option>
										</select>	
									</div>
									<div id="custom_status" class="single_calculate">
										<input type="text" class="optional" name="custom_status">
										<label>Custom Status</label>
									</div>
								</div>

								<div style="overflow:auto;">
									<div style="float:right;">
										<button type="button" class="btn btn-default" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
										<button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
									</div>
								</div>

								<!-- Circles which indicates the steps of the form: -->
								<div style="text-align:center;margin-top:40px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
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
				<script src="resources/js/toggle_custom.js"></script>
				<script src="resources/js/form_wizard.js"></script>
				<script src="resources/js/calculate_total.js"></script>
			</body>
			
		</html>		