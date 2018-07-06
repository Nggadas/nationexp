<?php
	
	foreach($_GET as $key => $value) {
		$data[$key] = filter($value); // post variables are filtered
	}
	$status = $data['status'];	
	
	if($status){
	$sql_tr_orders = mysql_query("SELECT * FROM `tracking_details` WHERE `account_id`='$account_id' AND `status`='$status' AND `old`='' ORDER BY id DESC");
	$row_tr_orders = mysql_num_rows($sql_tr_orders);
	$val_tr_orders = mysql_fetch_assoc($sql_tr_orders);
	}
	elseif(!$status){
	$sql_tr_orders = mysql_query("SELECT * FROM `tracking_details` WHERE `account_id`='$account_id' AND `status`!='' AND `old`='' ORDER BY id DESC");
	$row_tr_orders = mysql_num_rows($sql_tr_orders);
	$val_tr_orders = mysql_fetch_assoc($sql_tr_orders);
	}
	$myaccount_id = $val_tr_orders['account_id'];
	$b_status = $val_tr_orders['status'];
	$email = $_SESSION['email'];

	switch ($status || $b_status) {
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
	}
	
?>