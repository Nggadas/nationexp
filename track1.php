<!DOCTYPE html>
<?php
	session_start();
	include("config.php");

     $trackingNo = $_GET['id'];

     $query_tracking = mysqli_query($connect, "SELECT * FROM `tracking_details` WHERE booking_no = '$trackingNo' ORDER BY timestamp DESC LIMIT 1");
     $row_tracking = mysqli_num_rows($query_tracking);
     $val_tracking = mysqli_fetch_assoc($query_tracking);
     $bookingNum = $val_tracking['booking_no'];
     //redirects back to the tracking page
     if ($trackingNo != $bookingNum) {
       header("Location: track.php");
     }
     $shipdate = $val_tracking['ship_date'];
     $tdate = $val_tracking['tdate'];
     $ttime = $val_tracking['ttime'];
     $city = $val_tracking['current_city'];
     $comment = $val_tracking['tcomment'];
     $activity = $val_tracking['activity'];
     $days = $val_tracking['daysOfWeek'];
     $status = str_replace('_', ' ', $val_tracking['tstatus']);

     $query_parcel = mysqli_query($connect, "SELECT * FROM `parcel_details` WHERE `booking_no` = '$trackingNo' ORDER BY ID DESC LIMIT 1");
     $row_parcel = mysqli_num_rows($query_parcel);
     $val_parcel = mysqli_fetch_assoc($query_parcel);
     $parcel = $val_parcel['booking_no'];
     $weight = $val_parcel['weight_kg'];


     $query_delivery = mysqli_query($connect, "SELECT * FROM `delivery_details` WHERE `booking_no` = '$trackingNo' ORDER BY ID DESC LIMIT 1");
     $row_delivery = mysqli_num_rows($query_delivery);
     $val_delivery = mysqli_fetch_assoc($query_delivery);
     $category = $val_delivery['category'];
     $service = $val_delivery['service'];
     $est_date = $val_delivery['est_delivery_date'];
     $est_time = $val_delivery['est_delivery_time'];
     $ddate = $val_delivery['ddate'];
     $dtime = $val_delivery['dtime'];

?>
<!-- saved from url=(0064)https://www.nationexpress24.com/adminportal/trackingresults.html -->
<html lang="en" class="gr__nationexpress24_com">
<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Alicktish Web Designs">
		<meta name="description" content="NationExpress24 Delivery is a Made-in-Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria">
		<meta name="keywords" content="NationExpress24, Nation Express 24, Nation Express, NationExpress, NationalExpress, National Express NationalExpress24, Ship, Deliver, Quick Delivery, Fast Delivery, Same day, Next Day, Courier, Express Delivery, National Delivery, Nation Delivery, Nigeria Delivery, Lagos Delivery, Logistics, Ecommerce, Abuja, Ibadan, Port Harcourt, Maiduguri, DHL, UPS, ACE, Courier Service, Delivery Service, Pickup, Delivery, Pickup and Delivery, Fast Delivery, Express Pickup, Pick-up, Ikeja">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.nationexpress24.com/adminportal/resources/img/nationexpress24.ico">
		<title>Tracking, Track Parcels, Packages, Shipments with NationExpress24 Tracking</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="source/fonts/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet" media="all">
		<link href="tracking/all.css" rel="stylesheet">
		<link href="tracking/stylesheet.css" rel="stylesheet">
		<link href="tracking/reset.css" rel="stylesheet">
		<link href="tracking/slick.css" rel="stylesheet">
		<link href="tracking/jquery.mb.YTPlayer.min.css" rel="stylesheet">
		<link rel="stylesheet" href="tracking/meanmenu.css">
		<link href="tracking/owl.carousel.css" rel="stylesheet">
		<link href="tracking/style.css" rel="stylesheet">
		<link href="tracking/responsive.css" rel="stylesheet">


		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="js" data-gr-c-s-loaded="true">
		<!--<div class="tel_header"><i class="fa fa-envelope" aria-hidden="true"></i> <font color="red">info@nationexpress24.com</font>  &nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i> Call our hotline 0805-773-2873 or <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp 0817-033-3258</div> -->


		<section class="about-us">
			<div class="logo_menu" id="sticker1">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4 col-sm-8 col-xs-12">
							<div class="logo">
								<a href="index.php"><img src="tracking/logo_1.png" alt="logo" height="90px"></a>
							</div>
						</div>
						<div class="col-md-6 col-xs-10 col-md-offset-1  col-lg-offset-1 col-lg-7 mobMenuCol">
							<nav class="navbar" style="display: block;">
								<!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
									<?php
										if (!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "true") {?>
											<li><a href="adminportal/">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "false"){ ?>
											<li class="current-menu-item"><a href="members/">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(empty($_SESSION['isAdmin'])){ ?>
											<li><a href="index.php">home</a></li>
									<?php } ?>
                                    <li><a href="service.php">services</a></li>
									<li class="current-menu-item"><a href="track.php">track your parcel</a></li>
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
		</section>


		<!--    start pricing area-->
		<!-- Pricing Area -->
		<section class="pricing-area version-6" id="pricing">
			<div class="container">
				<div class="row page-title">
					<div class="col-md-5 col-sm-6">
						<div class="pricing-desc section-padding-two">
							<div class="pricing-desc-title">
								<div class="title">
									<h2>Track Shipments</h2>
									<p>Now, you can track your parcels, packages or shipments.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 text-center">
						<div class="single-pricing-table">

							<ul class="price-list">
								<li>Shipment Category: <span style="margin-left:10px;"><font color="#6495ed"><?php echo $category; ?></font></span></li>
								<li>Weight: <span style="margin-left:10px;"><font color="#6495ed"><?php echo $weight.'kg'?></font></span></li>
								<li>Tracking Number: <span style="margin-left:10px;"><font color="#6495ed"><?php echo $parcel; ?></font></span></li>
								<li>Service: <span style="margin-left:10px;"><font color="#6495ed"><?php echo $service; ?></font></span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-8 col-lg-8 col-sm-4 col-xs-12">
						<div class="single-pricing-table">
							<div class="pricing-title">
								<div class="row">
								<div class="col-md-4" style="padding-bottom: 50px">
								<h5>Ship Date: <i class="fas fa-question-circle" title="Ship date reflects date and time of origin time zone"></i></h5><br>
								<h6><?php echo $shipdate; ?></h6>
								<h5><?php echo $city; ?></h5>
							</div>
							<div class="col-md-4" class="single-pricing-table" style="padding-bottom: 50px">

								<?php
									if ($comment == "delivered") {
										echo '<h1 id="status_chevron"><i class="fas fa-clipboard-check fa-2x" style="color:black; padding-bottom: 20px"></i></h1>';
									}
								?>

								<h6 id="status_id"><?php echo $status; ?></h6>
                <?php
								if ($comment == "delivered") {
                   echo "<h5 id='status_signedby'><i>Signed for by: ".$comment."</i></h5>";
								 } else {
									 echo "<h5 id='status_signedby'>".$comment."</h5>";
								 }
								 ?>
							</div>
								<div class="col-md-4">
									<?php
								if ($comment == "delivered") {
								echo "<h5>Actual Delivery: </h5><br>";
								echo "<h6 style='padding-left: 10px'>".$ddate." ".$dtime."</h6>";
								echo "<h5>".$city."</h5>";
							} else {
								echo "<h5>Estimated Delivery: </h5><br>";
								echo "<h6 style='padding-left: 10px'>".$est_date." ".$est_time."</h6>";
								echo "<h5>".$city."</h5>";
							}
                ?>

							</div>
						</div>
							</div>
							<div class="pull-left"><h4><b><font color="black" style="padding-left: 10px" id="status_progress">Shipment Progress</font></b></h4></div>
							<ul class="price-list">
								<li>&nbsp;</li></ul>
							<div class="table-responsive">
							<table class="table table-striped1">
								<thead>
								<tr>
									<th scope="col">Date/Time</th>
									<th scope="col">Activity</th>
									<th scope="col">Location</th>
								</tr>
								</thead>
								<tbody>
									<?php
										$connect = mysqli_connect("127.0.0.1","root","","nationex_smartzip") or die("Connection Not Set Up");


										  $query_tracking2 = mysqli_query($connect, "SELECT * FROM `tracking_details` WHERE `booking_no` = '$trackingNo' GROUP BY tdate,ttime ORDER BY timestamp DESC");
										  $row_tracking2 = mysqli_num_rows($query_tracking2);
										  $row2 = mysqli_fetch_assoc($query_tracking2);

										  $rowdate = $row2['old'];

									?>
										<?php do {?>

										<?php if($row2['old']=="yes"){ ?>

										<tr>
											<td><?php echo $row2['ttime']; ?></td>
											<td><span class="pull-left"><?php echo $row2['activity']; ?></span></td>
											<td><span class="pull-left"><?php echo $row2['current_city']; ?></span></td>
										</tr>
									<?php }else{?>
										<tr class="active">
											<td><?php echo $row2['tdate']; ?><span class="pull-right">-</span></td>
											<td><span class="pull-left"><?php echo $row2['daysOfWeek']; ?></span></td>
											<td></td>
										</tr>
										<tr>
											<td><?php echo $row2['ttime']; ?></td>
											<td><span class="pull-left"><?php echo $row2['activity']; ?></span></td>
											<td><span class="pull-left"><?php echo $row2['current_city']; ?></span></td>
										</tr>
									<?php }?>
								<?php }while ($row2 = mysqli_fetch_array($query_tracking2)); ?>
								</tbody>
							</table>
							</div>
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
							<p><a href="https://www.nationexpress24.com/about.html">Read More...</a></p>
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
							<a href="https://www.nationexpress24.com/adminportal/trackingresults.html"><img src="tracking/cards_credt_1.png"></a>
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
						<p>© Copyright 2018, NationExpress24 Delivery ~ All Rights Reserved</p>
					</div>
				</div>
				<div class="col-xs-12  col-sm-6 col-md-6 text-right">
					<div class="footer-text text-left">
						<a href="https://www.nationexpress24.com/adminportal/trackingresults.html" class="fab fa-facebook-f"></a>
						<a href="https://www.nationexpress24.com/adminportal/trackingresults.html" class="fab fa-twitter"></a>
						<a href="https://www.nationexpress24.com/adminportal/trackingresults.html" class="fab fa-instagram"></a>
					</div>
				</div>
			</div>
		</div>
		<!--    end of copyright text area-->


<script async="" src="https://embed.tawk.to/599561581b1bed47ceb05162/default" charset="UTF-8" crossorigin="*"></script>
		<!-- <script async="" src="tracking/default" charset="UTF-8" crossorigin="*"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="tracking/waypoints.min.js.download"></script>
		<script src="tracking/jquery.counterup.min.js.download"></script>
		<script src="tracking/jquery.sticky.js.download"></script>
		<script src="tracking/owl.carousel.min.js.download"></script>
		<script src="tracking/jquery.meanmenu.js.download"></script>
		<script src="tracking/slick.min.js.download"></script>
		<script src="tracking/jquery.nav.js.download"></script>
		<script src="tracking/jquery.mb.YTPlayer.min.js.download"></script>
		<script src="tracking/main.js.download"></script>
		<script src="tracking/jquery.min.js(1).download"></script>
		<script src="tracking/bootstrap.min.js(1).download"></script>
		<!--Start of Live Chat Script-->
		<script src="tracking/chat.js.download"></script>
		<!--End of Live Chat Script-->


<div id="uRDdE6f-1527265458354" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; position: fixed !important; border: 0px !important; min-height: 0px !important; min-width: 0px !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: auto !important; z-index: 2000000000 !important; cursor: auto !important; float: none !important; bottom: 0px !important; right: 0px !important; left: auto !important; display: block;">
	<iframe id="u8glY0P-1527265458355" src="tracking/saved_resource.html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 320px !important; height: 400px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; display: none !important;">
</iframe>
<iframe id="G60qLOa-1527265458357" src="tracking/saved_resource(1).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; height: 40px !important; min-height: 40px !important; max-height: 40px !important; width: 260px !important; min-width: 260px !important; max-width: 260px !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; top: auto !important; bottom: 0px !important; right: 10px !important; left: auto !important; display: block !important;">
</iframe>
<iframe id="IpZjBKL-1527265458357" src="tracking/saved_resource(2).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; display: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; top: auto !important; bottom: 40px !important; right: 10px !important; left: auto !important; width: 260px !important; max-width: 260px !important; min-width: 260px !important; height: 37px !important; max-height: 37px !important; min-height: 37px !important;">
</iframe>
<iframe id="iDj0GVT-1527265458357" src="tracking/saved_resource(3).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; cursor: auto !important; float: none !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; bottom: 30px !important; top: auto !important; right: 10px !important; left: auto !important; width: 244px !important; max-width: 244px !important; min-width: 244px !important; height: 149px !important; max-height: 149px !important; min-height: 149px !important; z-index: 1000002 !important; margin: 0px !important; display: none !important;">
</iframe>
<div id="sZ4jT6c-1527265458352" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none rgb(255, 255, 255) !important; opacity: 0 !important; top: 1px !important; bottom: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: 45px !important; display: block !important; z-index: 999997 !important; cursor: move !important; float: none !important; left: 0px !important; right: 96px !important;">
</div>
<div id="Gy7nAnV-1527265458354" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 96px !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important;">
</div>
<div id="zXIgldG-1527265458354" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: e-resize !important; float: none !important;">
</div>
<div id="tCzQ0wt-1527265458354" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important;">
</div>
<div id="s92Y8nb-1527265458354" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: s-resize !important; float: none !important;">
</div>
<div id="FDhe7pX-1527265458354" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important;">
</div>
<div id="xl3NSfo-1527265458354" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: ne-resize !important; float: none !important;">
</div>
<div id="VeiDZFS-1527265458355" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: 0px !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: sw-resize !important; float: none !important;">
</div>
<div id="EPF2yae-1527265458355" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999999 !important; cursor: se-resize !important; float: none !important;">
</div>
<div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important;">
</div>
</div>
<iframe src="tracking/saved_resource(4).html" title="chat widget logging" style="display: none !important;"></iframe>
</body>
</html>
