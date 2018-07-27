<?php
	
	if($_GET['status'] =="order_booked" || $_GET['status'] =="in_transit" || $_GET['status'] =="delivered" || $_GET['status'] =="order_cancelled" ){
		$sta =trim($_GET['status']);
		$data  = htmlentities($sta);
		$status = $data;	
	}else  {
		$status = "";
	}

	$account_id= $_SESSION['account_id'];
	
	// foreach($_GET as $key => $value) {
	// 	$data[$key] = filter($value); // post variables are filtered
	// }
	
	
	
	
	if($status){
		$sql_tr_orders = mysqli_query($connect,"SELECT * FROM `tracking_details` WHERE `account_id`='$account_id' AND `tstatus`='$status' AND `old`='' ORDER BY id DESC");
		$row_tr_orders = mysqli_num_rows($sql_tr_orders);
		$val_tr_orders = mysqli_fetch_assoc($sql_tr_orders);
	}
	elseif(!$status){
		$sql_tr_orders = mysqli_query($connect,"SELECT * FROM `tracking_details` WHERE `account_id`='$account_id' AND `old`='' ORDER BY id DESC");
		$row_tr_orders = mysqli_num_rows($sql_tr_orders);
		$val_tr_orders = mysqli_fetch_assoc($sql_tr_orders);
	}
	$myaccount_id = $val_tr_orders['account_id'];
	//$b_booking_no = $val_tr_orders['booking_no'];
	//$b_date = $val_tr_orders['tdate'];
	$_SESSION['tstatus'] = $b_status;
	$email = $_SESSION['email'];

	
	

	switch ($status) {
        case 'order_booked':
		$mystatus = "Order Booked";
		$estatus = "Order Booked";
		
		break; 
        case 'order_cancelled':
		$mystatus = "Order Cancelled";
		$estatus = "Order Cancelled";
		
		break;
		case 'undelivered':
		$mystatus = "Undelivered";
		$estatus = "Undelivered";
		
		break;
		case 'in_transit':
		$mystatus = "In Transit";
		$estatus = "In Transit";
		
		break;
		case 'delivered':
		$mystatus = "Delivered";
		$estatus = "Delivered";
		
		break;
		case 'out_for_delivery':
		$mystatus = "Out for Delivery";
		$estatus = "Out for Delivery";
		
		break;	

		default:
		$mystatus = "All Orders";
		$estatus = "All Orders";
		break;



	}
	
?>