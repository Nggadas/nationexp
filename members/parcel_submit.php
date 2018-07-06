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
		
		//Get delivery types and date
		
		$query_check4 = mysql_query("SELECT * FROM `settings_delivery_type` WHERE `status` = 'Active' ORDER BY id DESC");
		$row_check4 = mysql_num_rows($sql_check4);
		$val4 = mysql_fetch_assoc($query_check4);
		
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
	if($mystatus1 =="success") {
		
		if($_SESSION['regerror']=="" && $_SESSION['success']=="success"){
			$mycolor = "green";
			$mylogo = "check-circle-o";
			$statusmessage = "The order has been successfully booked!";
		}
	}
	
	if(isset($_POST['submit_button'])){
		
		foreach($_POST as $key => $value) {
			$data[$key] = filter($value); // post variables are filtered
		}
		
		$qty = $data['qty'];
		$weight = $data['weight'];
		$content_value = $data['content_value'];
		$description = $data['description'];
		$delivery_type = $data['delivery_type'];
		
		$acct_id = $data['acct_id'];
		$delivery_date = $data['delivery_date'];
		$payment_method = $data['payment_method'];
		$item_cash = $data['item_cash'];
		$delivery_cost = $data['delivery_cost'];
		$insurance = $data['insurance'];
		$pickup_cost = $data['pickup_cost'];
		$scheduled_pickup = $data['scheduled_pickup'];
		
		//Make sure the prices are not negative
		$a_check = "$pickup_cost >= 0";
		$b_check = "$delivery_cost > 0";
		$c_check = "$insurance >= 0";
		
		if($a_check && $b_check && $c_check){
			$total_cost = $delivery_cost + $pickup_cost + $insurance;
		}
		
		//check if account id is valid
		
		$sql_email = mysql_query("SELECT * FROM `register` WHERE `email` != '' AND `account_id`='$acct_id' ORDER BY ID DESC LIMIT 1");
		$row_email = mysql_num_rows($sql_email);
		$val_email = mysql_fetch_assoc($sql_email);
		
		$myaccount_id_email = $val_email['account_id'];
		
		if(!$myaccount_id_email){
			echo "<script language=\"Javascript\" type=\"text/javascript\">
			window.location=\"place_order\";
			</script>";
		}
		elseif($myaccount_id_email){
			
			//if tracking number is valid
			$booking_no= $myno_exists;
			
			//Check if required form fields isn't empty
			if($qty=='' || $acct_id=='' || $weight=='' || $payment_method=='' || $delivery_cost == '' || $description == '') {
				session_start();
				$_SESSION['regerror']="empty";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"parcel_details?status=empty&no=$myno\";
				</script>";	
			}
			else{
				
				//Get pickup city
				
				$sql_pk1 = mysql_query("SELECT * FROM `pickup_details` WHERE `booking_no` = '$booking_no' AND `account_id`='$myaccount_id_email' ORDER BY ID DESC LIMIT 1");
				$row_pk1 = mysql_num_rows($sql_pk1);
				$val_pk1 = mysql_fetch_assoc($sql_pk1);
				
				$pk_city = $val_pk1['city'];
				
				//Check if parcel records exist
				
				$sql_parcel = mysql_query("SELECT * FROM `parcel_details` WHERE `booking_no` = '$booking_no' AND `account_id`='$myaccount_id_email' ORDER BY ID DESC LIMIT 1");
				$row_parcel = mysql_num_rows($sql_parcel);
				$val_parcel = mysql_fetch_assoc($sql_parcel);
				
				$parcel_id = $val_parcel['account_id'];
				
				//Check if payment records exist
				
				$sql_pay = mysql_query("SELECT * FROM `payment_details` WHERE `booking_no` = '$booking_no' AND `account_id`='$myaccount_id_email' ORDER BY ID DESC LIMIT 1");
				$row_pay = mysql_num_rows($sql_pay);
				$val_pay = mysql_fetch_assoc($sql_pay);
				
				$pay_id = $val_pay['account_id'];
				
				if(!$parcel_id && !$pay_id){
				
				$sqln = "INSERT INTO `parcel_details` (`account_id`, `goods_description`, `booking_no`, `value_of_contents`, `no_of_parcel`, `weight_kg`, `date`, `time`) VALUES ('".$myaccount_id_email."', '".$description."', '".$booking_no."', '".$content_value."', '".$qty."', '".$weight."', '".$date."', '".$time."')";
				$rsN = mysql_query($sqln) or die("Errorn : ".mysql_error());
				
				$sqln = "INSERT INTO `payment_details` (`account_id`, `payment_method`, `delivery_cost`, `booking_no`, `insurance_fee`, `pickup_cost`, `total_cost`, `date`, `time`) VALUES ('".$myaccount_id_email."', '".$payment_method."', '".$delivery_cost."', '".$booking_no."', '".$insurance."', '".$pickup_cost."', '".$total_cost."', '".$date."', '".$time."')";
				$rsN = mysql_query($sqln) or die("Errorn : ".mysql_error());
				
				}
				elseif($parcel_id && $pay_id){
				
				$sqlu = "UPDATE `parcel_details` SET `goods_description` = '".$description."', `value_of_contents` = '".$content_value."', `no_of_parcel` = '".$qty."', `weight_kg` = '".$weight."', `update_date` = '".$date."', `update_time` = '".$time."' WHERE `booking_no` = '$booking_no' AND `account_id` ='$myaccount_id_email'";
				$rsU = mysql_query($sqlu) or die("Erroru : ".mysql_error());
				
				$sqlu = "UPDATE `payment_details` SET `payment_method` = '".$payment_method."', `delivery_cost` = '".$delivery_cost."', `insurance_fee` = '".$insurance."', `pickup_cost` = '".$pickup_cost."', `total_cost` = '".$total_cost."', `update_date` = '".$date."', `update_time` = '".$time."' WHERE `booking_no` = '$booking_no' AND `account_id` ='$myaccount_id_email'";
				$rsU = mysql_query($sqlu) or die("Erroru : ".mysql_error());
				
				}
				
				$sqln = "INSERT INTO `tracking_details` (`account_id`, `current_city`, `status`, `booking_no`, `newdate`, `date`, `time`) VALUES ('".$myaccount_id_email."', '".$pk_city."', 'order_booked', '".$booking_no."', '".$newdate."', '".$date."', '".$time."')";
				$rsN = mysql_query($sqln) or die("Errorn : ".mysql_error());
				
				$sqlu = "UPDATE `delivery_details` SET `delivery_type` = '".$delivery_type."', `est_delivery_date` = '".$delivery_date."', `est_delivery_time` = '".$delivery_time."' WHERE `booking_no` = '$booking_no' AND `account_id` ='$myaccount_id_email'";
				$rsU = mysql_query($sqlu) or die("Erroru : ".mysql_error());
				
				$sqlu = "UPDATE `pickup_details` SET `scheduled_date` = '".$scheduled_pickup."' WHERE `booking_no` = '$booking_no' AND `account_id` ='$myaccount_id_email'";
				$rsU = mysql_query($sqlu) or die("Erroru : ".mysql_error());
				
				$sqlu = "UPDATE `register` SET `old` = 'yes' WHERE `email` != '' AND `account_id` ='$myaccount_id_email'";
				$rsU = mysql_query($sqlu) or die("Erroru : ".mysql_error());
				
				
				
				session_start();
				$_SESSION['regerror']="";
				$_SESSION['success']="success";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"parcel_details?no=$booking_no&status=success\";
				</script>";
				
			}
			
		}
	}
	
?>