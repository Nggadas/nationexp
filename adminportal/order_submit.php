<?php

	foreach($_GET as $key => $value) {
		$data1[$key] = filter($connect,$value); // GET variables are filtered
	}

	$customer_id = $data1['id'];

	if(!empty($customer_id)) {
		//Check if account id is valid
		$sql_register= mysqli_query($connect,"SELECT * FROM `register` WHERE `account_id`='$customer_id' ORDER BY id DESC LIMIT 1");
		$row_register = mysqli_num_rows($sql_register);
		$reg_data = mysqli_fetch_assoc($sql_register);

		$u_first_name = $reg_data['first_name'];
		$u_last_name = $reg_data['sur_name'];
		$full_name = $u_first_name.' '.$u_last_name;
		$old = $reg_data['old'];
		$u_email = $reg_data['email'];

		if($row_register < 1){ ?>
			<script>
				window.location.href = "customers";
			</script>
		<?php }

	} else { ?>
		<script>
			window.location.href = "customers";
		</script>
	<?php }

	if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

		// get date and time
		$date = date("j M Y");
		$time = date("g:i A");
		$newdate = date("Y-m-j");
		$dayofweek = date("l");

		// Get parcel_details details for $booking_no
		$product = filter($connect,$_POST['product']);
		$price = filter($connect,$_POST['price']);
		$quantity = filter($connect,$_POST['quantity']);
		$weight = filter($connect,$_POST['weight']);

		// Get delivery_details for $booking_no
		$contact_person = filter($connect,$_POST['contact_person']);
		$delivery_address = filter($connect,$_POST['address']);
		$bus_stop = filter($connect,$_POST['bus_stop']);
		$city = filter($connect,$_POST['city']);
		$state = filter($connect,$_POST['state']);
		$country = filter($connect,$_POST['country']);
		$phone_no = filter($connect,$_POST['phone_no']);
		$alt_phone_no = filter($connect,$_POST['alt_phone_no']);
		$del_email = filter($connect,$_POST['del_email']);
		$service = filter($connect,$_POST['service']);
		$category = filter($connect,$_POST['category']);
		$delivery_type = filter($connect,$_POST['delivery_type']);

		if ($delivery_type == 'Early Morning') {
			// Get current date
			$current_date=date_create();
			// Add working days to current date
			date_add($current_date,date_interval_create_from_date_string("1 weekdays"));
			// Save the new date in format of choice
			$est_delivery_date = date_format($current_date,"d M Y");

			$est_delivery_time = '11:00 AM';
		} elseif ($delivery_type == 'Same Day') {
			// Get current date
			$current_date=date_create();
			$est_delivery_date = date_format($current_date,"d M Y");

			$est_delivery_time = '6:00 PM';
		} elseif ($delivery_type == 'Next Day') {
			// Get current date
			$current_date=date_create();
			// Add working days to current date
			date_add($current_date,date_interval_create_from_date_string("1 weekdays"));
			// Save the new date in format of choice
			$est_delivery_date = date_format($current_date,"d M Y");

			$est_delivery_time = '6:00 PM';
		} elseif ($delivery_type == 'Outside Lagos') {
			// Get current date
			$current_date=date_create();
			// Add working days to current date
			date_add($current_date,date_interval_create_from_date_string("3 weekdays"));
			// Save the new date in format of choice
			$est_delivery_date = date_format($current_date,"d M Y");

			$est_delivery_time = '6:00 PM';
		}

		// Get pickup_details details for $booking_no
		$pickup_toggle = filter($connect,$_POST['toggle_pickup']);
		$pickup_contact = filter($connect,$_POST['pickup_person']);
		$pickup_address = filter($connect,$_POST['pickup_address']);
		$pickup_bus_stop = filter($connect,$_POST['pickup_bus_stop']);
		$pickup_city = filter($connect,$_POST['pickup_city']);
		$pickup_state = filter($connect,$_POST['pickup_state']);
		$pickup_phone_no = filter($connect,$_POST['pickup_phone_no']);
		$pickup_alt_phone_no = filter($connect,$_POST['pickup_alt_phone_no']);
		$pickup_email = filter($connect,$_POST['pickup_email']);
		$pickup_date = filter($connect,$_POST['pickup_date']);
		// Change date format from the default html date input '2018-05-12' to something like '12 May 2018'
		$pickup_date = changeFormat($pickup_date);

		// Get payment_details details for $booking_no
		$payment_method = filter($connect,$_POST['payment_method']);
		$payment_status = 'unpaid';
		$delivery_cost = filter($connect,$_POST['delivery_cost']);
		$insurance_fee = filter($connect,$_POST['insurance_fee']);
		$pickup_cost = filter($connect,$_POST['pickup_cost']);
		$total_cost = filter($connect,$_POST['total_cost']);

		// Get payment_details details for $booking_no
		$current_city = $city .', '. $state;
		$activity = "Pricing details collected.";

		// Get booking_no
		$booking_no = filter($connect,$_POST['booking_no']);
		if (empty($booking_no)){
			$booking_no = GenBookingNo($connect);
		}

		// Booleans to check if order has been created
		$parcel_created = filter($connect,$_POST['parcel_created']);
		$delivery_created = filter($connect,$_POST['delivery_created']);
		$pickup_created = filter($connect,$_POST['pickup_created']);
		$payment_created = filter($connect,$_POST['payment_created']);

		// Decide if create_pickup should run
		if ($pickup_toggle == 'no') {
			$pickup_created = true;
		} else {
			$pickup_created = false;
		}

		// Create parcel_details
		$create_parcel = "INSERT INTO `parcel_details` (`goods_description`,`value_of_contents`,`no_of_parcel`,`weight_kg`,`booking_no`,`email`,`account_id`,`date`,`time`) 
							VALUES ('".$product."','".$price."','".$quantity."','".$weight."','".$booking_no."','".$u_email."','".$customer_id."','".$date."','".$time."')";

		// Create delivery_details
		$create_delivery =  "INSERT INTO `delivery_details` (`full_name`,`address`,`bus_stop`,`city`,`state`,`country`,`phone`,`alt_phone`,`email`,`account_id`,`service`,`category`,`delivery_type`,`est_delivery_date`,`est_delivery_time`,`booking_no`) 
							VALUES ('".$contact_person."','".$delivery_address."','".$bus_stop."','".$city."','".$state."','".$country."','".$phone_no."','".$alt_phone_no."','".$del_email."','".$customer_id."','".$service."','".$category."','".$delivery_type."','".$est_delivery_date."','".$est_delivery_time."','".$booking_no."')";
	
		// Create pickup_details
		$create_pickup =  "INSERT INTO `pickup_details` (`full_name`,`address`,`bus_stop`,`city`,`state`,`phone`,`alt_phone`,`email`,`account_id`,`booking_no`,`scheduled_date`,`date`,`time`) 
							VALUES ('".$pickup_contact."','".$pickup_address."','".$pickup_bus_stop."','".$pickup_city."','".$pickup_state."','".$pickup_phone_no."','".$pickup_alt_phone_no."','".$pickup_email."','".$customer_id."','".$booking_no."','".$pickup_date."','".$date."','".$time."')";

		// Create payment_details
		$create_payment =  "INSERT INTO `payment_details` (`payment_method`,`payment_status`,`delivery_cost`,`insurance_fee`,`pickup_cost`,`booking_no`,`email`,`account_id`,`total_cost`,`date`,`time`) 
							VALUES ('".$payment_method."','".$payment_status."','".$delivery_cost."','".$insurance_fee."','".$pickup_cost."','".$booking_no."','".$u_email."','".$customer_id."','".$total_cost."','".$date."','".$time."')";
		
		// Create tracking_details
		$create_tracking =  "INSERT INTO `tracking_details` (`current_city`,`old`,`tstatus`,`activity`,`tcomment`,`booking_no`,`email`,`account_id`,`ship_date`,`newdate`,`tdate`,`ttime`,`daysOfWeek`) 
							VALUES ('".$current_city."','','order_booked','".$activity."','Processing','".$booking_no."','".$u_email."','".$customer_id."','".$date."','".$newdate."','".$date."','".$time."','".$dayofweek."')";


		// Set conditions for sql statements to run
		if (!$parcel_created) {
			if (mysqli_query($connect, $create_parcel)) {
				$parcel_created = true;
			} else {
				$error = "Error: Could not create parcel details.";
				// $error = mysqli_error($connect);
			}

		}
		
		if (!$delivery_created && $parcel_created) {
			if (!empty($state) || !empty($delivery_type) || !empty($category) || !empty($service)) {
				if (mysqli_query($connect, $create_delivery)) {
					$delivery_created = true;
				} else {
					$error = "Error: Could not create delivery details.";
					// $error = mysqli_error($connect);
				}
			} else {
				$error = "Delivery Details: All fields required";
			}

		}
		
		if (!$pickup_created && $delivery_created) {
			if (!empty($pickup_state)) {
				if (mysqli_query($connect, $create_pickup)) {
					$pickup_created = true;
				} else {
					$error = "Error: Could not create pickup details.";
					// $error = mysqli_error($connect);
				}
			} else {
				$error = "Pickup Details: State required";
			}

		}
		
		if (!$payment_created && $pickup_created) {
			if (!empty($payment_method)) {
				if (mysqli_query($connect, $create_payment)) {
					$payment_created = true;
				} else {
					$error = "Error: Could not create payment details.";
					// $error = mysqli_error($connect);
				}
			} else {
				$error = "Payment Details: Payment details required";
			}
		}

		if ($payment_created) {
			if (mysqli_query($connect, $create_tracking)) {
				// Update user status to old if still new
				if ($old != 'yes') {
					$update_user = mysqli_query($connect,"UPDATE register SET old='yes' WHERE account_id='$customer_id'");
				} ?>
				<script>
					window.location.href = 'orders?status=order_booked';
				</script> <?php
			} else {
				$error = "Error: Could not create tracking details.";
				// $error = mysqli_error($connect);
			}
		}
		
	}

?>
