<?php
	if($_GET['status'] == "order_booked" || $_GET['status'] =="in_transit" || $_GET['status'] =="delivered" || $_GET['status'] =="out_for_delivery" || $_GET['status'] =="undelivered" || $_GET['status'] =="order_cancelled" ){
		$sta =trim($_GET['status']);
		$data  = htmlentities($sta);
		$status = $data;	
	}else{
		$status = "";
	}

	switch ($status) {
		case 'order_booked':
		$mystatus = "Order Booked";

		break;
		case 'order_cancelled':
		$mystatus = "Order Cancelled";

		break;
		case 'undelivered':
		$mystatus = "Undelivered";

		break;
		case 'in_transit':
		$mystatus = "In Transit";

		break;
		case 'delivered':
		$mystatus = "Delivered";

		break;
		case 'out_for_delivery':
		$mystatus = "Out for Delivery";

		break;
		default:
		$mystatus = "All Orders";
	}

	if($status){
		$sql_tr_orders = mysqli_query($connect,"SELECT * FROM `tracking_details` WHERE `account_id`!='' AND `tstatus`='$status' AND `old`='' ORDER BY id DESC");
		$row_tr_orders = mysqli_num_rows($sql_tr_orders);
		$val_tr_orders = mysqli_fetch_assoc($sql_tr_orders);

	}elseif(!$status){
		$sql_tr_orders = mysqli_query($connect,"SELECT * FROM `tracking_details` WHERE `account_id`!='' AND `tstatus`!='' AND `old`='' ORDER BY id DESC");
		$row_tr_orders = mysqli_num_rows($sql_tr_orders);
		$val_tr_orders = mysqli_fetch_assoc($sql_tr_orders);

	}

?>
