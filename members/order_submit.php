<?php
	
	foreach($_GET as $key => $value) {
		$data1[$key] = filter($value); // GET variables are filtered
	}
	
	$mystatus1 = $data1['status'];
	$myid = $data1['id'];
	
	if($myid !="") {
	
	//Check if account id is valid
	
		$sql_register= mysql_query("SELECT * FROM `register` WHERE `account_id`='$myid' ORDER BY id DESC LIMIT 1");
		$row_register = mysql_num_rows($sql_register);
		$val_register = mysql_fetch_assoc($sql_register);

		$myid_exists = $val_register['account_id'];
		$myid_firstname = $val_register['first_name'];
		$myid_lastname = $val_register['last_name'];
		
		if(!$myid_exists){
		
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"customers\";
			</script>";
		}
	}
	elseif($myid =="") {
	
	echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"customers\";
			</script>";
	}
	
	
	if($mystatus1 =="invalid") {
		
		if($_SESSION['regerror']=="invalid"){
			$mycolor = "red";
			$mylogo = "exclamation-triangle";
			$statusmessage = "The account id you entered doesn't exist!";	
		}
	}
	if($mystatus1 =="empty") {
        
		if($_SESSION['regerror']=="empty"){
			$mycolor = "red";
			$mylogo = "exclamation-triangle";
			$statusmessage = "Please fill the required form fields!";
		}
	}
	if($mystatus1 =="") {
		$_SESSION['regerror']="";
		$_SESSION['success']="";
	}
	
	if(isset($_POST['submit_button'])){
		
		foreach($_POST as $key => $value) {
			$data[$key] = filter($value); // post variables are filtered
		}
		
		$full_name = $data['last_name'];
		$acct_id = $data['acct_id'];
		$del_country = $data['country'];
		$phone_no = $data['phone_no'];
		$alt_phone_no = $data['alt_phone_no'];
		$email = $data['email'];
		$address = $data['address'];
		$city = $data['city'];
		$bus_stop = $data['bus_stop'];
		$state = $data['state'];
		
		
		//check if account id is valid
		
		$sql_email = mysql_query("SELECT * FROM `register` WHERE `email` != '' AND `account_id`='$acct_id' ORDER BY ID DESC LIMIT 1");
		$row_email = mysql_num_rows($sql_email);
		$val_email = mysql_fetch_assoc($sql_email);
		
		$myaccount_id_email = $val_email['account_id'];
		
		if(!$myaccount_id_email){
			session_start();
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
				session_start();
				$_SESSION['regerror']="empty";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"place_order?status=empty\";
				</script>";	
			}
			else{
				
				$sqln = "INSERT INTO `delivery_details` (`account_id`, `full_name`, `booking_no`, `phone`, `alt_phone`, `email`, `address`, `city`, `bus_stop`, `state`, `country`, `date`, `time`) VALUES ('".$myaccount_id_email."', '".$full_name."', '".$booking_no."', '".$phone_no."', '".$alt_phone_no."', '".$email."', '".$address."', '".$city."', '".$bus_stop."', '".$state."', '".$del_country."', '".$date."', '".$time."')";
				$rsN = mysql_query($sqln) or die("Errorn : ".mysql_error());
				
				session_start();
				$_SESSION['regerror']="";
				$_SESSION['success']="success";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"pickup_details?no=$booking_no\";
				</script>";
				
			}
			
		}
	}
	
?>