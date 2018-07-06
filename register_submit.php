<?php
session_start();
  $connect = mysqli_connect("127.0.0.1","root","","nationex_smartzip") or die("Connection Not Set Up");
	// check connection
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



	if(isset($_POST['submit_button'])){
    $data = [];
		foreach($_POST as $key => $value) {
			$data[$key] = $value; // post variables are filtered
		}
		$mystatus1 = $data['phone_no'];


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
		$first_name = $data['first_name'];
		$sur_name = $data['sur_name'];
		$phone_no = $data['phone_no'];
		$email = $data['email'];
		$password = $data['password'];
		$confirmpass = $data['confirmpass'];



		//check if user already exit

		$sql_email = mysqli_query($connect, "SELECT * FROM `register` WHERE `email` = '$email' AND `account_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_email = mysql_num_rows($sql_email);
		$val_email = mysql_fetch_assoc($sql_email);

		$myaccount_id_email = $val_email['email'];


		$query_phone = mysqli_query($connect, "SELECT * FROM `register` WHERE `phone_no` = '$phone_no' AND `account_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_phone = mysql_num_rows($query_phone);
		$val_phone = mysql_fetch_assoc($query_phone);

		$myaccount_id_phone = $val_phone['phone_no'];

		if($myaccount_id_phone == $phone_no || $myaccount_id_email != ''){

			$_SESSION['regerror']="exist";
			echo "The user account already exist";
		}
		elseif(!$myaccount_id_email && !$myaccount_id_phone){

    }

			// //Generate account id
			// $account_id= GenRegAcctID();
			//
			// //Generate password
			// $password = GenPwd();

			//Check if required form fields isn't empty
			if($first_name=='' || $sur_name=='' || $phone_no=='' || $email=='' || $password=='' || $confirmpass == '') {
				$_SESSION['regerror']= "Please fill the required fields!";

			}else{

				$sqln = "INSERT INTO `register` (`first_name`, `sur_name`, `phone_no`, `email`, `password`) VALUES ('".$first_name."', '".$sur_name."', '".$phone_no."', '".$email."', '".$password."')";
				$rsN = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());


				$_SESSION['regerror']="";
				$_SESSION['success']="success";
				echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"congrats.html\";
				</script>";

			}
	}

?>
