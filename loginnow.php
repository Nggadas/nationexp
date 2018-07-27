<?php
	include('config.php');
	include('dbc.php');
	require_once('swift/lib/swift_required.php');
	
	
	
	if ($_POST['email']!='') {
		foreach($_POST as $key => $value) {
			$data[$key] = filter($connect, $value); // post variables are filtered
		}
		
		$email = $data['email'];
		$pass = $data['pass'];
		
		if (preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $email)){
			$email_type='email';
		}
		$alogin_id = GenaloginID($connect);
		$ulogin_id = GenuloginID($connect);
		$ilogin_id = GeniloginID($connect);
		
		//Check if email is admin, If it is, then login as admin
		//$response = $pass;
		$query_admin = mysqli_query($connect, "SELECT * FROM `smart_admin` WHERE `$email_type` = '$email' AND `password`='$pass' ORDER BY ID DESC LIMIT 1");
		$row_admin = mysqli_num_rows($query_admin);
		$val_admin = mysqli_fetch_assoc($query_admin);
		if($row_admin > 0 && $val_admin['status'] == "Enabled") {
			session_start();
			$_SESSION['title'] = $val_admin['title'];
			$_SESSION['id'] = $val_admin['id'];
			$_SESSION['first'] = $val_admin['first_name'];
			$_SESSION['last'] = $val_admin['last_name'];
			$_SESSION['phone'] = $val_admin['phone'];
			$_SESSION['status'] = $val_admin['status'];
			$_SESSION['email'] = $val_admin['email'];
			$_SESSION['admin_id'] = $val_admin['admin_id'];
			$_SESSION['user_ip'] = $ip;
			$_SESSION['isAdmin'] = "true";
			$query_login = mysqli_query($connect, "SELECT * FROM `admin_login_details` WHERE `admin_id`='{$val_admin['admin_id']}' AND `email`='{$val_admin['email']}' order by id DESC LIMIT 1");
			$row_login = mysqli_num_rows($query_login);
			$val_login = mysqli_fetch_assoc($query_login);
			$valemail = $val_login['email'];
			$valacct = $val_login['admin_id'];
			// // if(!$access){
			// 	$sqlu = "UPDATE `admin_login_details` SET `old` = 'yes' WHERE `email` = '".$valemail."' AND `admin_id` = '".$valacct."'";
			// 	$rsU = mysqli_query($connect, $sqlu) or die("Erroru : ".mysqli_error());
			// 	$sqln = "INSERT INTO `admin_login_details` (`title`, `email`, `admin_id`, `login_id`, `login_date`, `login_time`, `user_ip`, `country`, `status`, `newdate`, `date`, `time`) VALUES ('".$_SESSION['title']."', '".$_SESSION['email']."',  '".$_SESSION['admin_id']."', '".$alogin_id."', '".$date."', '".$time."', '".$ip."', '".$ip_country."', '".$_SESSION['status']."', '".$newdate."', '".$date."', '".$time."')";
			// 	$rsN = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());
			// //}
			$response = "auth";
			echo $response;
			exit();
		}
		elseif ($row_admin == 0){
			//If not proceed to login as user
			$query_check = mysqli_query($connect, "SELECT * FROM `register` WHERE `$email_type` = '$email' AND `password`='$pass' ORDER BY ID DESC LIMIT 1");
			$row_check = mysqli_num_rows($query_check);
			$val = mysqli_fetch_assoc($query_check);
			
			if($row_check > 0 && $val['status']=="Enabled"){
				session_start();
				$_SESSION['title']=$val['title'];
				$_SESSION['id']=$val['id'];
				$_SESSION['first']=$val['first_name'];
				$_SESSION['last']=$val['sur_name'];
				$_SESSION['phone']=$val['phone_no'];
				$_SESSION['alt_phone']=$val['alt_phone'];
				$_SESSION['status']=$val['status'];
				$_SESSION['email']=$val['email'];
				$_SESSION['account_id']=$val['account_id'];
				$_SESSION['old']=$val['old'];
				$_SESSION['user_ip']=$ip;
				$_SESSION['isAdmin'] = "false";
				$query_login = mysqli_query($connect, "SELECT * FROM `login_details` WHERE `account_id`='{$val['account_id']}' AND `email`='{$val['email']}' order by id DESC LIMIT 1");
				$row_login = mysqli_num_rows($query_login);
				$val_login = mysqli_fetch_assoc($query_login);
				$valemail = $val_login['email'];
				$valacct = $val_login['account_id'];
				// //if(!$access){
				// 	$sqlu = "UPDATE `login_details` SET `old` = 'yes' WHERE `email` = '".$valemail."' AND `account_id` = '".$valacct."'";
				// 	$rsU = mysqli_query($connect, $sqlu) or die("Erroru : ".mysqli_error());
				// 	$sqln = "INSERT INTO `login_details` (`title`, `email`, `account_id`, `login_id`, `login_date`, `login_time`, `user_ip`, `country`, `status`, `newdate`, `date`, `time`) VALUES ('".$_SESSION['title']."', '".$_SESSION['email']."',  '".$_SESSION['account_id']."', '".$ulogin_id."', '".$date."', '".$time."', '".$ip."', '".$ip_country."', '".$_SESSION['status']."', '".$newdate."', '".$date."', '".$time."')";
				// 	$rsN = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());
				// 	//Get NationExpress24 contact info
				// 	$query_contact = mysqli_query($connect, "SELECT * FROM `admin_contact` WHERE `status`='Enabled' AND `contact_id` !='' ORDER BY ID DESC LIMIT 1");
				// 	$row_contact = mysqli_num_rows($query_contact);
				// 	$val_contact = mysqli_fetch_assoc($query_contact);
				// 	$contact_phone = $val_contact['phone'];
				// 	$contact_phone2 = $val_contact['phone2'];
				// 	$contact_whatsapp = $val_contact['whatsapp_no'];
				// 	$contact_email = $val_contact['email'];
				// //}
				$response = 'open';
				// if($sesbook){
				// $response = 'sesbook';
				// }
				echo $response;
			}
			elseif ($row_check == 0){
				$sqln = "INSERT INTO `invalid_login` (`email`, `password`, `login_id`, `login_date`, `login_time`, `user_ip`, `country`, `status`, `newdate`, `date`, `time`) VALUES ('".$email."', '".$pass."', '".$ilogin_id."', '".$date."', '".$time."', '".$ip."', '".$ip_country."', 'Login Failed', '".$newdate."', '".$date."', '".$time."')";
				$rsN = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());
				$response = 'closed';
				echo $response;
			}
			elseif ($row_check > 0 && $val['status']=='Disabled'){
				$sqln = "INSERT INTO `invalid_login` (`email`, `password`, `login_id`, `login_date`, `login_time`, `user_ip`, `country`, `status`, `date`, `time`) VALUES ('".$email."', '".$pass."', '".$ilogin_id."', '".$date."', '".$time."', '".$ip."', '".$ip_country."', 'Disabled Account', '".$date."', '".$time."')";
				$rsN = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());
				$response = 'disabled';
				echo ''.$response.'';
			}
			elseif ($row_check > 0 && $val['status']=='pending'){
				$sqln = "INSERT INTO `invalid_login` (`email`, `password`, `login_id`, `login_date`, `login_time`, `user_ip`, `country`, `status`, `date`, `time`) VALUES ('".$email."', '".$pass."', '".$ilogin_id."', '".$date."', '".$time."', '".$ip."', '".$ip_country."', 'Pending Account', '".$date."', '".$time."')";
				$rsN = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());
				$response = 'pending';
				echo "$response";
			}
}
	}

?>