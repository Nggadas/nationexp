<?php

	if(isset($_POST['submit_button'])){

		// Get post data
		$error = "";
		$form_first_name = filter($connect,$_POST['first_name']);
		$last_name = filter($connect,$_POST['last_name']);
		$business_name = filter($connect,$_POST['business_name']);
		$phone_no = filter($connect,$_POST['phone_no']);
		$alt_phone_no = filter($connect,$_POST['alt_phone_no']);
		$form_email = filter($connect,$_POST['email']);
		$address = filter($connect,$_POST['address']);
		$city = filter($connect,$_POST['city']);
		$bus_stop = filter($connect,$_POST['bus_stop']);
		$state = filter($connect,$_POST['state']);

		//check if user already exists
		$sql_email = mysqli_query($connect,"SELECT * FROM `register` WHERE `email` = '$form_email' ORDER BY ID DESC LIMIT 1");
		$row_email = mysqli_num_rows($sql_email);

		//check if phone number exists
		$query_phone = mysqli_query($connect,"SELECT * FROM `register` WHERE `phone_no` = '$phone_no' ORDER BY ID DESC LIMIT 1");
		$row_phone = mysqli_num_rows($query_phone);

		//Check if required form fields isn't empty
		if(empty($form_first_name) || empty($last_name) || empty($phone_no) || empty($form_email) || empty($address) || empty($city) || empty($state)) {
			$error = "All fields required.";
		}elseif ($row_email > 0) {
			$error = "This email already exists.";
		}elseif ($row_phone > 0) {
			$error = "This phone number already exists.";
		}else{
			//Generate account id
			$account_id= GenRegAcctID($connect);
	
			//Generate password
			$password = GenPwd();

			$sql = "INSERT INTO `register` (`account_id`, `first_name`, `sur_name`, `phone_no`, `alt_phone`, `email`, `password`, `business_name`, `address`, `city`, `bus_stop`, `state`, `country`, `title`, `status`, `date`, `time`, `newdate`, `registeredby`, `ip`, `ip_country`, `user_agent`,`old`) 
				VALUES ('".$account_id."', '".$form_first_name."', '".$last_name."', '".$phone_no."', '".$alt_phone_no."', '".$form_email."', '".$password."', '".$business_name."', '".$address."', '".$city."', '".$bus_stop."', '".$state."', 'Nigeria', 'standard', 'Enabled', '".$date."', '".$time."', '".$newdate."', 'Admin', '".$ip."', '".$ip_country."', '".$user_agent."','')";
			
			if (mysqli_query($connect, $sql)) { ?>
				<script>
					window.location.href = "customers?type=new";
				</script>
			<?php } else {
                // $error = mysqli_error($connect);
				$error = "Unable to register user, please try again";
			}

		}

	}

?>
