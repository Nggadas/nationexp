<!DOCTYPE html>
<?php
	include("check.php");
	include("print_invoice_check.php");
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

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="resources/fonts/stylesheet.css" rel="stylesheet">
		<link href="resources/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
		<link rel="stylesheet" href="resources/css/meanmenu.css">
		<link href="resources/css/owl.carousel.css" rel="stylesheet">
		<link href="resources/css/style.css" rel="stylesheet">
		<link href="resources/css/reset.css" rel="stylesheet">
		<link href="resources/css/responsive.css" rel="stylesheet">
		<link href="resources/css/custom.css" rel="stylesheet">
		<!-- TABLE STYLES-->
		<link href="resources/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="js" onload="window.print()">
	<!-- <body class="js"> -->
		<div id="preloader"></div>
		<section class="about-us">
			<div class="logo_menu" id="sticker1">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4 col-sm-8 col-xs-10">
							<div class="logo">
								<a><img src="resources/img/logo_1.png" alt="logo"  height="90px" ></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- start pricing area -->
		<!-- Pricing Area -->
		<section class="pricing-area version-6" id="pricing">
			<div class="container">
				<div class="row page-title">
					<div class="col-md-5 col-sm-6">
						<div class="pricing-desc section-padding-two">
							<div class="pricing-desc-title">
								<div class="title">
                                    <p>Customer ID: <?php echo $customer_id ?></p>
                                    <p>Customer Name: <?php echo $full_name ?></p>
                                    <p>Email: <?php echo $u_email ?></p>
                                    <p>Phone Number: <?php echo $u_phone_no ?></p>
								</div>
							</div>
						</div>
					</div>
					<div style="float: right; text-align: right;" class="col-md-5 col-sm-6">
						<div class="pricing-desc section-padding-two">
							<div class="pricing-desc-title">
								<div class="title">
                                    <p>Invoice Number: <?php echo $invoice_no ?></p>
                                    <p>Date: <?php echo $date ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-12 col-sm-4 col-xs-12 text-center">
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane fade active in" id="recent">
									<p id="statusnotice">&nbsp;</p>
									<div class="table-responsive">
										<table class="display table table-hover" id="recent_orders_table" >
											<thead>
												<tr>
													<th>Product</th>
													<th>Booking Number</th>
													<th>Quantity</th>
													<th>Weight (kg)</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
                                                <?php

                                                    foreach ($booking_no as $key => $value) { 
                                                        if (!empty($value)) {
                                                            // Get orders placed by user
                                                            $sql = mysqli_query($connect,"SELECT * FROM `parcel_details` WHERE `booking_no`='$value' ORDER BY id DESC LIMIT 1");
                                                            $row_data = mysqli_fetch_assoc($sql);
															
															$product = $row_data['goods_description'];
															$price = (int)$row_data['value_of_contents'];
															$quantity = $row_data['no_of_parcel'];
															$weight = $row_data['weight_kg'];
                                                            $booking_no = $row_data['booking_no'];
                                                            $total += $price;
                                                            
                                                            ?> 
                                                            <tr>
                                                                <td><?php echo $product ?></td>
                                                                <td><?php echo $booking_no ?></td>
                                                                <td><?php echo $quantity ?></td>
                                                                <td><?php echo $weight ?></td>
                                                                <td><?php echo $price ?></td>
                                                            </tr>
                                                    <?php }
                                                    } ?>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Total Price: </strong></td>
                                                    <td><?php echo $total ?></td>
											</tbody>
										</table>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>

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
	</body>
	</html>
