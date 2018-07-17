<?php
	$get_data =trim($_GET['booking_no']);
	$get_data  = htmlentities($get_data);
	$booking_no = $get_data;

	if(!$booking_no){ ?>
		<script>
			window.location.href = "orders?status=order_booked";
		</script>
	<?php }else{
		$sql= mysqli_query($connect,"SELECT * FROM `parcel_details` WHERE `booking_no`='$booking_no' ORDER BY id DESC LIMIT 1");
		$row_count = mysqli_num_rows($sql);
		$parcel = mysqli_fetch_assoc($sql);

		$sql= mysqli_query($connect,"SELECT * FROM `delivery_details` WHERE `booking_no`='$booking_no' ORDER BY id DESC LIMIT 1");
		$delivery = mysqli_fetch_assoc($sql);

		$sql= mysqli_query($connect,"SELECT * FROM `pickup_details` WHERE `booking_no`='$booking_no' ORDER BY id DESC LIMIT 1");
		$pickup = mysqli_fetch_assoc($sql);

		$sql= mysqli_query($connect,"SELECT * FROM `payment_details` WHERE `booking_no`='$booking_no' ORDER BY id DESC LIMIT 1");
		$payment = mysqli_fetch_assoc($sql);

		if ($row_count > 0) {
			// Get delivery_details for $booking_no
			$customer_id = $delivery['account_id'];
			$contact_person = $delivery['full_name'];
			$phone_no = $delivery['phone'];
			$second_phone_no = $delivery['alt_phone'];
			$email = $delivery['email'];
			$delivery_address = $delivery['address'];
			$city = $delivery['city'];
			$bus_stop = $delivery['bus_stop'];
			$state = $delivery['state'];
			$country = $delivery['country'];
			
			// Get parcel_details details for $booking_no
			$product = $parcel['goods_description'];
			$quantity = $parcel['no_of_parcel'];
			$price = $parcel['value_of_contents'];
			$weight = $parcel['weight_kg'];
			
			// Get pickup_details details for $booking_no
			$pickup_person = $pickup['full_name'];
			$pickup_address = $pickup['address'];
			$pickup_bus_stop = $pickup['bus_stop'];
			$pickup_city = $pickup['city'];
			$pickup_state = $pickup['state'];
			$pickup_phone_no = $pickup['phone'];
			$pickup_alt_phone_no = $pickup['alt_phone'];
			$pickup_email = $pickup['email'];
			$pickup_date = $pickup['scheduled_date'];
			
			// Get payment_details details for $booking_no
			$payment_method = $payment['payment_method'];
			$payment_status = $payment['payment_status'];
			$delivery_cost = $payment['delivery_cost'];
			$insurance_fee = $payment['insurance_fee'];
			$pickup_cost = $payment['pickup_cost'];
			$total_cost = $payment['total_cost'];
			
			$sql= mysqli_query($connect,"SELECT * FROM `register` WHERE `account_id`='$customer_id' ORDER BY id DESC LIMIT 1");
			$user = mysqli_fetch_assoc($sql);

			$customer_name = $user['first_name'] . ' ' . $user['sur_name'];
			$email = $delivery['email'];
		} else { ?>
			<script>
				window.location.href = "orders?status=order_booked";
			</script>
		<?php }
	}
?>