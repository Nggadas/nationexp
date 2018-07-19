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

		// get current date and time
		$date = date("j F Y");
		$time = date("g:i A");

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
		$service = 'E commerce';
		$category = 'Parcel';
		$delivery_type = 'Next Day';
		$est_delivery_date = $date;
		$est_delivery_time = $time;

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

		// Get payment_details details for $booking_no
		$payment_method = filter($connect,$_POST['payment_method']);
		$payment_status = filter($connect,$_POST['payment_status']);
		$delivery_cost = filter($connect,$_POST['delivery_cost']);
		$insurance_fee = filter($connect,$_POST['insurance_fee']);
		$pickup_cost = filter($connect,$_POST['pickup_cost']);
		$total_cost = filter($connect,$_POST['total_cost']);

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

		// Create parcel_details
		$create_parcel = "INSERT INTO `parcel_details` (`goods_description`,'value_of_contents','no_of_parcel','weight_kg','booking_no','email','account_id','date','time') 
						VALUES ('$product','$price','$quantity','$weight','$booking_no','$u_email','$customer_id','$date','$time')";

		// Create delivery_details
		$create_delivery =  "INSERT INTO `delivery_details` (`full_name`,`address`,`bus_stop`,`city`,`state`,`country`,`phone`,`alt_phone`,`email`,`account_id`,`service`,`category`,`delivery_type`,`est_delivery_date`,`est_delivery_time`,`booking_no`) 
						VALUES ('$contact_person','$delivery_address','$bus_stop','$city','$state','$country','$phone_no','$alt_phone_no','$del_email','$customer_id','$service','$category','$delivery_type','$est_delivery_date','$est_delivery_time','$booking_no')";
	
		// Create pickup_details
		$create_pickup =  "INSERT INTO `pickup_details` (`full_name`,`address`,`bus_stop`,`city`,`state`,`phone`,`alt_phone`,`email`,`account_id`,`booking_no`,`scheduled_date`,`date`,`time`) 
						VALUES ('$pickup_contact','$pickup_address','$pickup_bus_stop','$pickup_city','$pickup_state','$pickup_phone_no','$pickup_alt_phone_no','$pickup_email','$customer_id','$booking_no','$pickup_date','$date','$time')";

		// Create payment_details
		$create_payment =  "INSERT INTO `payment_details` (`payment_method`,`payment_status`,`delivery_cost`,`insurance_fee`,`pickup_cost`,`booking_no`,`email`,`account_id`,`total_cost`,`date`,`time`) 
						VALUES ('$payment_method','$payment_status','$delivery_cost','$insurance_fee','$pickup_cost','$booking_no','$u_email','$customer_id','$total_cost','$date','$time')";


		// Set conditions for sql statements to run
		if (!$parcel_created) {
			if (mysqli_query($connect, $update_delivery)) { 
				$parcel_created = true;
			} else {
				$error = "Error: Could not create delivery details.";
				// $error = mysqli_error($connect);
			}

		} elseif (!$delivery_created && $parcel_created) {
			if (!empty($state)) {
				if (mysqli_query($connect, $update_delivery)) { 
					$delivery_created = true;
				} else {
					$error = "Error: Could not create parcel details.";
					// $error = mysqli_error($connect);
				}
			} else {
				$error = "Delivery Details: State required";
			}

		} elseif (!$pickup_created && $delivery_created) {
			if (!empty($pickup_state)) {
				if ($pickup_toggle == yes) {
					if (mysqli_query($connect, $update_delivery)) {
						$pickup_created = true;
					} else {
						$error = "Error: Could not create pickup details.";
						// $error = mysqli_error($connect);
					}
				} else {
					$pickup_created = true;
				}
			} else {
				$error = "Pickup Details: State required";
			}

		} elseif (!$payment_created && $pickup_created) {
			if (!empty($payment_status)) {
				if (mysqli_query($connect, $update_delivery)) {
					// Update user status to old if still new
					if ($old != 'yes') {
						$update = "UPDATE register SET old='yes' WHERE account_id='$customer_id'";
					}?>
					<script>
						window.location.href = 'customers';
					</script> <?php
				} else {
					$error = "Error: Could not create payment details.";
					// $error = mysqli_error($connect);
				}
			} else {
				$error = "Payment Details: Payment method required";
			}
		}
		
	}

?>
