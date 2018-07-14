<?php

	if(isset($_POST['submit_button'])){

		$errors = "";
		$first_name = $data['first_name'];
		$last_name = $data['last_name'];
		$business_name = $data['business_name'];
		$phone_no = $data['phone_no'];
		$alt_phone_no = $data['alt_phone_no'];
		$email = $data['email'];
		$address = $data['address'];
		$city = $data['city'];
		$bus_stop = $data['bus_stop'];
		$state = $data['state'];


		//check if user already exists
		$sql_email = mysqli_query("SELECT * FROM `register` WHERE `email` = '$email' ORDER BY ID DESC LIMIT 1");
		$row_email = mysqli_num_rows($sql_email);
		$val_email = mysqli_fetch_assoc($sql_email);

		$myaccount_id_email = $val_email['account_id'];

		//check if phone number exists
		$query_phone = mysqli_query("SELECT * FROM `register` WHERE `phone` = '$phone_no' ORDER BY ID DESC LIMIT 1");
		$row_phone = mysqli_num_rows($query_phone);
		$val_phone = mysqli_fetch_assoc($query_phone);

		$myaccount_id_phone = $val_phone['account_id'];

		//Generate account id
		$account_id= GenRegAcctID($connect);

		//Generate password
		$password = GenPwd();

		//Check if required form fields isn't empty
		if(empty($first_name) || empty($last_name) || empty($phone_no) || empty($email) || empty($address) || empty($city) || empty($state)) {
			
		}
		else{

			$sql = mysqli_query($connect,"INSERT INTO `register` (`account_id`, `first_name`, `last_name`, `phone`, `alt_phone`, `email`, `password`, `business_name`, `address`, `city`, `bus_stop`, `state`, `country`, `title`, `status`, `date`, `time`, `newdate`, `registeredby`, `ip`, `ip_country`, `user_agent`) 
				VALUES ('".$account_id."', '".$first_name."', '".$last_name."', '".$phone_no."', '".$alt_phone_no."', '".$email."', '".$password."', '".$business_name."', '".$address."', '".$city."', '".$bus_stop."', '".$state."', 'Nigeria', 'standard', 'Enabled', '".$date."', '".$time."', '".$newdate."', 'Admin', '".$ip."', '".$ip_country."', '".$user_agent."')");
			

			session_start();
			$_SESSION['regerror']="";
			$_SESSION['success']="success";
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"register?status=success\";
			</script>";

		}

	}

?>
