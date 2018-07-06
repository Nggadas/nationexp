<?php
	
	foreach($_GET as $key => $value) {
		$data1[$key] = filter($value); // GET variables are filtered
	}
	
	$mystatus1 = $data1['status'];	
	
	
	if($mystatus1 =="exists") {
		
		if($_SESSION['regerror']=="exist"){
			$mycolor = "red";
			$mylogo = "exclamation-triangle";
			$statusmessage = "The user account already exists!";	
		}
	}
	if($mystatus1 =="empty") {
        
		if($_SESSION['regerror']=="empty"){
			$mycolor = "red";
			$mylogo = "exclamation-triangle";
			$statusmessage = "Please fill the required form fields!";
		}
	}
	if($mystatus1 =="success") {
		
		if($_SESSION['regerror']=="" && $_SESSION['success']=="success"){
			$mycolor = "green";
			$mylogo = "check-circle-o";
			$statusmessage = "User account has been successfully registered!";
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
		
		
		//check if user already exit
		
		$sql_email = mysql_query("SELECT * FROM `register` WHERE `email` = '$email' AND `account_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_email = mysql_num_rows($sql_email);
		$val_email = mysql_fetch_assoc($sql_email);
		
		$myaccount_id_email = $val_email['account_id'];
		
		
		$query_phone = mysql_query("SELECT * FROM `register` WHERE `phone` = '$phone_no' AND `account_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_phone = mysql_num_rows($query_phone);
		$val_phone = mysql_fetch_assoc($query_phone);
		
		$myaccount_id_phone = $val_phone['account_id'];
		
		if($myaccount_id_phone || $myaccount_id_email){
			session_start();
			$_SESSION['regerror']="exist";
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"register?status=exists\";
			</script>";
		}
		elseif(!$myaccount_id_email && !$myaccount_id_phone){
			
			//Generate account id
			$account_id= GenRegAcctID();
			
			//Generate password
			$password = GenPwd();
			
			//Check if required form fields isn't empty
			if($first_name=='' || $last_name=='' || $phone_no=='' || $email=='' || $address=='' || $city == '' || $state == '') {
				session_start();
				$_SESSION['regerror']="empty";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"register?status=empty\";
				</script>";	
			}
			else{
				
				$sqln = "INSERT INTO `register` (`account_id`, `first_name`, `last_name`, `phone`, `alt_phone`, `email`, `password`, `business_name`, `address`, `city`, `bus_stop`, `state`, `country`, `title`, `status`, `date`, `time`, `newdate`, `registeredby`, `ip`, `ip_country`, `user_agent`) VALUES ('".$account_id."', '".$first_name."', '".$last_name."', '".$phone_no."', '".$alt_phone_no."', '".$email."', '".$password."', '".$business_name."', '".$address."', '".$city."', '".$bus_stop."', '".$state."', 'Nigeria', 'standard', 'Enabled', '".$date."', '".$time."', '".$newdate."', 'Admin', '".$ip."', '".$ip_country."', '".$user_agent."')";
				$rsN = mysql_query($sqln) or die("Errorn : ".mysql_error());
				
				session_start();
				$_SESSION['regerror']="";
				$_SESSION['success']="success";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"register?status=success\";
				</script>";
				
			}
			
		}
	}
	
?>