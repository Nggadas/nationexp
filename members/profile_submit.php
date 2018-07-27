<?php
	$account_id = $_SESSION['account_id'];

	// Get user details
	$sql_user = mysqli_query($connect,"SELECT * FROM `register` WHERE `account_id` = '$account_id' ORDER BY ID DESC LIMIT 1");
	$row_user = mysqli_num_rows($sql_user);
	$user = mysqli_fetch_assoc($sql_user);

	// Populate form with data
	$u_first_name = $user['first_name'];
	$u_last_name = $user['sur_name'];
	$business_name = $user['business_name'];
	$phone_no = $user['phone_no'];
	$alt_phone_no = $user['alt_phone'];
	$u_email = $user['email'];
	$address = $user['address'];
	$city = $user['city'];
	$bus_stop = $user['bus_stop'];
	$state = $user['state'];

	if(isset($_POST['submit_button'])){

		// Get post data
		$error = "";
		$u_first_name = filter($connect,$_POST['first_name']);
		$u_last_name = filter($connect,$_POST['last_name']);
		$business_name = filter($connect,$_POST['business_name']);
		$phone_no = filter($connect,$_POST['phone_no']);
		$alt_phone_no = filter($connect,$_POST['alt_phone_no']);
		$u_email = filter($connect,$_POST['email']);
		$address = filter($connect,$_POST['address']);
		$city = filter($connect,$_POST['city']);
		$bus_stop = filter($connect,$_POST['bus_stop']);
		$state = filter($connect,$_POST['state']);

		//check if user already exists
		$sql_email = mysqli_query($connect,"SELECT * FROM `register` WHERE `email` = '$u_email' ORDER BY ID DESC LIMIT 1");
		$row_email = mysqli_num_rows($sql_email);

		//check if phone number exists
		$query_phone = mysqli_query($connect,"SELECT * FROM `register` WHERE `phone_no` = '$phone_no' ORDER BY ID DESC LIMIT 1");
		$row_phone = mysqli_num_rows($query_phone);

		//check if alt phone number exists
		$query_alt_phone = mysqli_query($connect,"SELECT * FROM `register` WHERE `alt_phone` = '$alt_phone_no' ORDER BY ID DESC LIMIT 1");
		$row_alt_phone = mysqli_num_rows($query_alt_phone);

		//Check if required form fields isn't empty
		if(empty($u_first_name) || empty($u_last_name) || empty($phone_no) || empty($u_email) || empty($address) || empty($city) || empty($state)) {
			$error = "All fields required.";
		}elseif ($row_email > 0 && $u_email != $_SESSION['email']) {
			$error = "This email already exists.";
		}elseif ($row_phone > 0 && $phone_no != $_SESSION['phone']) {
			$error = "This phone number already exists.";
		}elseif ($row_alt_phone > 0 && $alt_phone_no != $_SESSION['alt_phone']) {
			$error = "2nd phone number already exists.";
		}else{
			// Update user details
			$sql = "UPDATE register SET first_name='$u_first_name', sur_name='$u_last_name', business_name='$business_name', phone_no='$phone_no', alt_phone='$alt_phone_no', email='$u_email', address='$address', city='$city', bus_stop='$bus_stop', state='$state'
					WHERE account_id='$account_id'";
			
			if (mysqli_query($connect, $sql)) { ?>
				<script>
					window.location.href = "edit_profile";
				</script>
			<?php } else {
                $error = mysqli_error($connect);
				// $error = "Unable to edit profile, please try again";
			}

		}

	}

?>
