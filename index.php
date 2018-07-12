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
		<meta name="keywords" content="NationExpress24, Nation Express 24, Nation Express 24 Delivery, Nation Express24 Delivery, Nation Express, NationExpress, NationalExpress, National Express NationalExpress24, Ship, Deliver, Quick Delivery, Fast Delivery, Same day, Next Day, Courier, Express Delivery, National Delivery, Nation Delivery, Nigeria Delivery, Lagos Delivery, Logistics, Ecommerce, Abuja, Ibadan, Port Harcourt, Maiduguri, DHL, UPS, ACE, Courier Service, Delivery Service, Pickup, Delivery, Pickup and Delivery, Fast Delivery, Express Pickup, Pick-up, Ikeja, Victoria Island, Lagos, Kano, Nigeria Delivery, Courier Service, Courier Company, Courier">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/nationexpress24.ico" />
		<title>Courier Service with instant delivery | NationExpress24 Delivery</title>
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
		<div class="tel_header"><i class="fa fa-envelope" aria-hidden="true"></i> <font color="red">info@nationexpress24.com</font>  &nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i> Call our hotline 0805-773-2873 or <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp 0817-033-3258</div>
		<!--start header area-->
		<div id="preloader"></div>
		<section class="header_area" id="home">
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
											<li class="current-menu-item"><a href="adminportal/">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "false"){ ?>
											<li class="current-menu-item"><a href="members/">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(empty($_SESSION['isAdmin'])){ ?>
											<li><a href="index.php">home</a></li>
									<?php } ?>
                                    <li><a href="service.php">services</a></li>
									<li><a href="track.php">track your parcel</a></li>
                                    <li><a href="pricing.php">pricing</a></li>
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
			<!--  start welcome text marup  -->
			<div class="table">
				<div class="cell">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center">
								<div class="welcome_text">
									<h1>Get the fastest pickup and delivery service </h1>
									<div class="welcome_p">
										<p>NationExpress24 is committed to provide cost effective shipping solutions to individuals and businesses in Nigeria.</p>
										<p><i>When you want the best courier service in Nigeria, call NationExpress24.</i></p>
									</div>
									<div class="welcome_form">
										<form action="#">
											<input class="form-control" type="text" placeholder="Enter your tracking number">
											<input class="submit" type="submit" value="Track your parcel">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end of welcome text markup-->
		</section>
		<!--end of header area-->

		<!--   start about top area-->
		<section class="about_top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="about_single_item">
							<div class="item_icon">
								<img src="img/icon-2.png" alt="item">
							</div>
							<div class="about_single_item_content">
								<h4>Fastest Delivery</h4>
								<p>Our tailored solutions fits every budget and time constraint.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="about_single_item">
							<div class="item_icon">
								<img src="img/icon-3.png" alt="item">
							</div>
							<div class="about_single_item_content">
								<h4>Secured Service</h4>
								<p>Your parcel is in safe hands and you get to know where it is everytime.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="about_single_item">
							<div class="item_icon">
								<img src="img/icon-4.png" alt="item">
							</div>
							<div class="about_single_item_content">
								<h4>Ecommerce Delivery</h4>
								<p>Order today, receive it today - Our Pride.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--    end of about top area-->


		<!--    start about us area-->
		<section class="about_us_area" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="about_us_content">
							<h2>about us</h2>
							<p>NationExpress24 is the solution to your logistics problem of the past. We are a Nigerian company located in the Centre of Excellence - Lagos.</p>

							<p>Call it Shipping, Pickup, Delivery, Logistics or Courier - We will definitely provide the seamless solutions you desire and meet up with your budget, demand, and timing.</p>
							<a href="about.html">read more <span  class="fa fa-long-arrow-right"></span></a>
						</div>
					</div>
					<div class="col-md-offset-1 col-sm-6 col-md-5">
						<div class="about_car">
							<img src="img/pickup.jpg" alt="car">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--   end of about us area-->

		<!--start count up area-->
		<section class="couter_up_area" id="service">
			<div class="table">
				<div class="cell">
					<div class="container">
						<div class="row">
							<div class="col-md-2 col-sm-3 text-center">
								<div class="single_count">
									<h1 class="counter1">Get an Estimate</h1>
									<h5>A quick price quote.</h5>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
								<div class="single_count">
									<h1 class="counter1">Place Order</h1>
									<h5>Pickup, Delivery or Both</h5>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
								<div class="single_count">
									<h1 class="counter1">In-Transit</h1>
									<h5>Get your parcel to us</h5>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-md-offset-1 text-center">
								<div class="single_count">
									<h1 class="counter1">Delivered</h1>
									<h5>We deliver the parcel for you</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--    end of counter up area-->

		<!--start calculate area-->
		<section class="calculate_area" id="tracking">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6">
						<div class="calculate_title">
							<h2>Get an Estimate</h2>
							<p>The success of your business begins here!</p>
						</div>
						<div class="calculate_form">
							<form action="">
								<div class="single_calculate">
									<input type="text">
									<label>Pickup Location</label>
								</div>
								<div class="single_calculate">
									<input type="text" name="parcel_no">
									<label>Delivery Location</label>
								</div>
								<div class="single_calculate">
									<input type="number">
									<label>Quantity</label>
								</div>
								<div class="single_calculate">
									<input type="text">
									<label>Weight</label>
									<div class="calculate_option">
										<select>
											<option value="kg">kg</option>
											<option value="lbs">lbs</option>
										</select>
									</div>
								</div>
								<div class="calculat-button">
									<input type="submit" class="calulate" value="GET THE ESTIMATE NOW">
								</div>
								<div class="totla-cost" style="display:none">
									<h5>Estimated Cost: <span>$ 30</span></h5>
									<h5>Duration: <span>1-3 days</span></h5>
									<h5><input type="button" class="calulatea" value="ORDER NOW"></h5>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="calculat-image">
				<img src="img/truck.png" alt="#" height="627" width="577">
			</div>
		</section>
		<!--    end of calculate area-->


		<!--    start client say area-->
		<section class="client-area" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xs-12 col-sm-8">
						<div class="slients-title">
							<h2>What our customers say</h2>
							<p>NationExpress24 is determined to bolster the E-commerce Industry in Nigeria by providing a cutting-edge customer-centric delivery experience, Meet some of our customers to see what they are saying about us.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-clients">
							<div class="client-img">
								<img src="img/one-test.jpg" alt="customer">
							</div>
							<div class="client-details">
								<p>“Everyone at NationExpress24 is very friendly and professional. They really go out of their way to help you feel supported in the delivery choices you make. I am happy to be their partner and feel that I am in good hands.”</p>
								<h4>- Nancy Agwu</h4>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-clients">
							<div class="client-img">
								<img src="img/two-test.jpg" alt="customer">
							</div>
							<div class="client-details">
								<p>“I have been very pleased with NationExpress24 Delivery's responsiveness. They're really customer service oriented and always on time. Thank you NationExpress24”</p>
								<h4>- Afolabi Audu</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--    end of client area-->

		<!--start contact Area -->

		<section class="contact-wrap pad-120">
			<span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> </span>
			<div class="theme-container container">
				<div class="row">
					<div class="col-md-6 col-sm-8"><font color="black">
						<div class="title-wrap">
							<h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
							<p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easily</p>
						</div>
						<ul class="contact-detail title-2">
							<li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".20s"> <span>phone numbers:</span> <p class="gray-clr"> 0817-0333-258 <br> 0805-7732-873 </p> </li>
							<li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email address:</span> <p class="gray-clr"> info@NationExpress24.com</p> </li>
						</ul></font>
					</div>
				</div>
			</div>
		</section>
		<!-- /.End Of contact Area -->



		<!--   end of slider area-->
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
							<img src="img/cards_credt_1.png" alt="">
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
				<div class="col-xs-12  col-sm-6 col-md-6 text-left">
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
		<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '416461645433400');
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=416461645433400&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	</body>

</html>
