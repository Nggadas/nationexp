<?php

	foreach($_GET as $key => $value) {
		$data1[$key] = filter($connect,$value); // GET variables are filtered
	}

	$mystatus1 = $data1['status'];
	$myid = $data1['id'];

	if($myid !="") {

		//Check if account id is valid
		$sql_register= mysqli_query($connect,"SELECT * FROM `register` WHERE `account_id`='$myid' ORDER BY id DESC LIMIT 1");
		$row_register = mysqli_num_rows($sql_register);
		$val_register = mysqli_fetch_assoc($sql_register);

		$myid_exists = $val_register['account_id'];
		$myid_firstname = $val_register['first_name'];
		$myid_lastname = $val_register['sur_name'];

		if(!$myid_exists){
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"customers\";
			</script>";
		}
	}elseif($myid =="") {

		echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"customers\";
			</script>";
	}


	// if($mystatus1 =="invalid") {

	// 	if($_SESSION['regerror']=="invalid"){
	// 		$mycolor = "red";
	// 		$mylogo = "exclamation-triangle";
	// 		$statusmessage = "The account id you entered doesn't exist!";
	// 	}
	// }
	// if($mystatus1 =="empty") {

	// 	if($_SESSION['regerror']=="empty"){
	// 		$mycolor = "red";
	// 		$mylogo = "exclamation-triangle";
	// 		$statusmessage = "Please fill the required form fields!";
	// 	}
	// }
	// if($mystatus1 =="") {
	// 	$_SESSION['regerror']="";
	// 	$_SESSION['success']="";
	// }

	if(isset($_POST['submit_button'])){

		$full_name = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['contact_name'])));
		$acct_id = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['acct_id'])));
		$del_country = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['country'])));
		$phone_no = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['phone_no'])));
		$alt_phone_no = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['alt_phone_no'])));
		$email = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['email'])));
		$address = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['address'])));
		$city = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['city'])));
		$bus_stop = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['bus_stop'])));
		$state = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['state'])));


		//check if account id is valid

		$sql_email = mysqli_query($connect,"SELECT * FROM `register` WHERE `email` != '' AND `account_id`='$acct_id' ORDER BY ID DESC LIMIT 1");
		$row_email = mysqli_num_rows($sql_email);
		$val_email = mysqli_fetch_assoc($sql_email);

		$myaccount_id_email = $val_email['account_id'];

		if(!$myaccount_id_email){
			// session_start();
			$_SESSION['regerror']="invalid";
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"place_order?status=invalid\";
			</script>";
		}
		elseif($myaccount_id_email){

			//Generate tracking number
			$booking_no= GenBookingNo();

			//Check if required form fields isn't empty
			if($full_name=='' || $acct_id=='' || $phone_no=='' || $del_country=='' || $address=='' || $city == '' || $state == '') {
				// session_start();
				$_SESSION['regerror']="empty";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"place_order?status=empty\";
				</script>";
			}
			else{

				$sqln = "INSERT INTO `delivery_details` (`account_id`, `full_name`, `booking_no`, `phone`, `alt_phone`, `email`, `address`, `city`, `bus_stop`, `state`, `country`, `date`, `time`) VALUES ('".$myaccount_id_email."', '".$full_name."', '".$booking_no."', '".$phone_no."', '".$alt_phone_no."', '".$email."', '".$address."', '".$city."', '".$bus_stop."', '".$state."', '".$del_country."', '".$date."', '".$time."')";
				$rsN = mysqli_query($connect,$sqln) or die("Errorn : ".mysqli_error());

				// session_start();
				$_SESSION['regerror']="";
				$_SESSION['success']="success";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"pickup_details?no=$booking_no\";
				</script>";

			}

		}
	}

?>
