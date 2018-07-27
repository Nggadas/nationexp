<?php
session_start();
include('config.php');
include('dbc.php');
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
	
	// Get user account details	
	$customer_id = $_SESSION['account_id'];
	$u_first_name = $_SESSION['first'];
	$u_last_name = $_SESSION['last'];
	$full_name = $u_first_name.' '.$u_last_name;
	$old = $_SESSION['old'];
	$u_email = $_SESSION['email'];
	$bookingNo = "";
	
	// Get payment_details details for $bookingNo
	$payment_method = filter($connect,$_POST['payment_method']);
	$delivery_cost = filter($connect,$_POST['delivery_cost']);
	$pickup_cost = filter($connect,$_POST['pickup_cost']);
	$insurance_fee = 0;
	$total_cost = $delivery_cost + $pickup_cost + $insurance_fee;
	$payment_status = 'unpaid';

	// get current date and time
	$date = date("j M Y");
	$time = date("g:i A");

	if (!empty($payment_method)) {
		// Generate booking number
		$bookingNo = GenBookingNo($connect);

		// Create payment_details
		$create_payment =  "INSERT INTO `payment_details` (`payment_method`,`payment_status`,`delivery_cost`,`insurance_fee`,`pickup_cost`,`booking_no`,`email`,`account_id`,`total_cost`,`date`,`time`) 
							VALUES ('".$payment_method."','".$payment_status."','".$delivery_cost."','".$insurance_fee."','".$pickup_cost."','".$bookingNo."','".$u_email."','".$customer_id."','".$total_cost."','".$date."','".$time."')";
	
		if (mysqli_query($connect, $create_payment)) {
			// Update user status to old if still new
			if ($old != 'yes') {
				$update_user = mysqli_query($connect,"UPDATE register SET old='yes' WHERE account_id='$customer_id'");
			}
			$status = "success";
		} else {
			// $status = "Error: Could not create tracking details.";
			$status = mysqli_error($connect);
		}
	} else {
		$status = "Specify payment method";
	}

	$data = array(
		'status'=>"$status",
		'bookingNo'=>"$bookingNo",
	);

	echo json_encode($data,JSON_FORCE_OBJECT);
}