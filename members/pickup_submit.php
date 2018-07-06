<?php
	
	foreach($_GET as $key => $value) {
		$data1[$key] = filter($value); // GET variables are filtered
	}
	
	$mystatus1 = $data1['status'];
	$myno = $data1['no'];	
	
	
	if($myno !="") {
	
	//Check if tracking number is valid
	
		$sql_invoice = mysql_query("SELECT * FROM `delivery_details` WHERE `booking_no`='$myno' ORDER BY id DESC LIMIT 1");
		$row_invoice = mysql_num_rows($sql_invoice);
		$val_invoice = mysql_fetch_assoc($sql_invoice);
		

		$myno_exists = $val_invoice['booking_no'];
		$myid_exists = $val_invoice['account_id'];
		
		$sql_register= mysql_query("SELECT * FROM `register` WHERE `account_id`='$myid_exists' ORDER BY id DESC LIMIT 1");
		$row_register = mysql_num_rows($sql_register);
		$val_register1 = mysql_fetch_assoc($sql_register);
		
		$myid_firstname = $val_register1['first_name'];
		$myid_lastname = $val_register1['last_name'];
		
		if(!$myno_exists){
		
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"place_order\";
			</script>";
		}
	}
	elseif($myno =="") {
	
	echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"place_order\";
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
		$phone_no = $data['phone_no'];
		$alt_phone_no = $data['alt_phone_no'];
		$email = $data['email'];
		$address = $data['address'];
		$city = $data['city'];
		$bus_stop = $data['bus_stop'];
		$state = $data['state'];
		
		
		//check if account id is valid
		
		$sql_email = mysql_query("SELECT * FROM `register` WHERE `email` != '' AND `account_id`='$acct_id' ORDER BY id DESC LIMIT 1");
		$row_email = mysql_num_rows($sql_email);
		$val_email = mysql_fetch_assoc($sql_email);
		
		$myaccount_id_email = $val_email['account_id'];
		
		if(!$myaccount_id_email){
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"place_order\";
			</script>";
		}
		elseif($myaccount_id_email){
			
			//check if tracking number is valid
			$booking_no= $myno_exists;
			
			//Check if required form fields isn't empty
			if($full_name=='' || $acct_id=='' || $phone_no=='' || $address=='' || $city == '' || $state == '') {
				session_start();
				$_SESSION['regerror']="empty";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"pickup_details?status=empty&no=$myno\";
				</script>";	
			}
			else{
				
				$sqln = "INSERT INTO `pickup_details` (`account_id`, `full_name`, `booking_no`, `phone`, `alt_phone`, `email`, `address`, `city`, `bus_stop`, `state`, `date`, `time`) VALUES ('".$myaccount_id_email."', '".$full_name."', '".$booking_no."', '".$phone_no."', '".$alt_phone_no."', '".$email."', '".$address."', '".$city."', '".$bus_stop."', '".$state."', '".$date."', '".$time."')";
				$rsN = mysql_query($sqln) or die("Errorn : ".mysql_error());
				
				session_start();
				$_SESSION['regerror']="";
				$_SESSION['success']="success";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"parcel_details?no=$booking_no\";
				</script>";
				
			}
			
		}
	}
	
?>