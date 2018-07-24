<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
	// get current date and time
	$date = date("j M Y");
	$time = date("g:i A");

	// Get delivery_details for $booking_no
	$contact_person = filter($connect,$_POST['contact_person']);
	$phone_no = filter($connect,$_POST['phone_no']);
	$alt_phone_no = filter($connect,$_POST['alt_phone_no']);
	$email = filter($connect,$_POST['email']);
	$delivery_address = filter($connect,$_POST['address']);
	$city = filter($connect,$_POST['city']);
	$bus_stop = filter($connect,$_POST['bus_stop']);
	$country = filter($connect,$_POST['country']);
	$state = filter($connect,$_POST['state']);
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

	// Get parcel_details details for $booking_no
	$product = filter($connect,$_POST['product']);
	$quantity = filter($connect,$_POST['quantity']);
	$price = filter($connect,$_POST['price']);
	$weight = filter($connect,$_POST['weight']);

	// Get pickup_details details for $booking_no
	$pickup_toggle = filter($connect,$_POST['toggle_pickup']);
	$pickup_person = filter($connect,$_POST['pickup_person']);
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
	$custom_status = filter($connect,$_POST['custom_status']);
	$delivery_cost = filter($connect,$_POST['delivery_cost']);
	$insurance_fee = filter($connect,$_POST['insurance_fee']);
	$pickup_cost = filter($connect,$_POST['pickup_cost']);
	$total_cost = filter($connect,$_POST['total_cost']);

	// Update delivery_details
	function update_delivery($connect,$booking_no,$contact_person,$phone_no,$alt_phone_no,$email,$delivery_address,$city,$bus_stop,$state,$country,$service,$category,$delivery_type,$est_delivery_date,$est_delivery_time){

		// Update delivery_details
		$update_delivery = "UPDATE delivery_details 
			SET full_name='$contact_person', `address`='$delivery_address', bus_stop='$bus_stop', city='$city', `state`='$state', country='$country', phone='$phone_no', alt_phone='$alt_phone_no', email='$email' ,`service`='$service' ,category='$category' ,delivery_type='$delivery_type' ,est_delivery_date='$est_delivery_date' ,est_delivery_time='$est_delivery_time'
			WHERE booking_no='$booking_no'";

		if (mysqli_query($connect, $update_delivery)) { 
			return true;
		} else {
			return false;
		}
	}

	// Update parcel_details
	function update_parcel($connect,$booking_no,$product,$quantity,$price,$weight,$date,$time){

		// Update parcel_details
		$update_parcel = "UPDATE parcel_details 
		SET goods_description='$product', no_of_parcel='$quantity', value_of_contents='$price', weight_kg='$weight', update_date='$date', update_time='$time'
		WHERE booking_no='$booking_no'";

		if (mysqli_query($connect, $update_parcel)) {
			return true;
		} else {
			return false;
		}

	}

	// Update pickup_details
	function update_pickup($connect,$booking_no,$pickup_person,$pickup_address,$pickup_bus_stop,$pickup_city,$pickup_state,$pickup_phone_no,$pickup_alt_phone_no,$pickup_email,$pickup_date,$pickup_toggle,$pickup_toggle){


		// Decide if create_pickup should run
		if ($pickup_toggle == 'no') {
			return true;
		} else {
			// Update parcel_details
			$update_pickup = "UPDATE pickup_details 
			SET full_name='$pickup_person', `address`='$pickup_address', bus_stop='$pickup_bus_stop', city='$pickup_city', `state`='$pickup_state', phone='$pickup_phone_no', alt_phone='$pickup_alt_phone_no', email='$pickup_email', scheduled_date='$pickup_date'
			WHERE booking_no='$booking_no'";
	
			if (mysqli_query($connect, $update_pickup)) { 
				return true;
			} else {
				return false;
			}
		}
	}

	// Update payment_details
	function update_payment($connect,$booking_no,$payment_method,$custom_status,$payment_status,$delivery_cost,$insurance_fee,$pickup_cost,$total_cost,$date,$time){

		if (!empty($custom_status)) {
			// Update parcel_details
			$update_payment = "UPDATE payment_details 
			SET payment_method='$payment_method', payment_status='$custom_status', delivery_cost='$delivery_cost', insurance_fee='$insurance_fee', pickup_cost='$pickup_cost', total_cost='$total_cost', update_date='$date', update_time='$time'
			WHERE booking_no='$booking_no'";
		} else {
			// Update parcel_details
			$update_payment = "UPDATE payment_details 
			SET payment_method='$payment_method', payment_status='$payment_status', delivery_cost='$delivery_cost', insurance_fee='$insurance_fee', pickup_cost='$pickup_cost', total_cost='$total_cost', update_date='$date', update_time='$time'
			WHERE booking_no='$booking_no'";
		}

		if (mysqli_query($connect, $update_payment)) {
			return true;
		} else {
			return false;
		}
	}

	$update_delivery = update_delivery($connect,$booking_no,$contact_person,$phone_no,$alt_phone_no,$email,$delivery_address,$city,$bus_stop,$state,$country,$service,$category,$delivery_type,$est_delivery_date,$est_delivery_time);
	$update_parcel = update_parcel($connect,$booking_no,$product,$quantity,$price,$weight,$date,$time);
	$update_pickup = update_pickup($connect,$booking_no,$pickup_person,$pickup_address,$pickup_bus_stop,$pickup_city,$pickup_state,$pickup_phone_no,$pickup_alt_phone_no,$pickup_email,$pickup_date,$pickup_toggle);
	$update_payment = update_payment($connect,$booking_no,$payment_method,$custom_status,$payment_status,$delivery_cost,$insurance_fee,$pickup_cost,$total_cost,$date,$time);

	if (!$update_delivery) {
		$error = "Error: Could not update delivery details.";
		// $error = mysqli_error($connect);
	} elseif (!$update_parcel) {
		$error = "Error: Could not update parcel details.";
		// $error = mysqli_error($connect);
	} elseif (!$update_pickup) {
		$error = "Error: Could not update pickup details.";
		// $error = mysqli_error($connect);
	} elseif (!$update_payment) {
		// $error = "Error: Could not update payment details.";
		$error = mysqli_error($connect);
	} else { 
		?>
		<script>
			window.location.href = 'update_order?booking_no=<?php echo $booking_no ?>';
		</script>
	<?php 
	}
	
}
?>