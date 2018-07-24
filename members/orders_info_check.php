<?php

	// foreach($_GET as $key => $value) {
	// 	$data[$key] = filter($value); // post variables are filtered
	// }
    // $typereg = $data['booking_no'];
    //echo $_GET['booking_no'];
    if($_GET['booking_no'] != "") {
        $sta =trim($_GET['booking_no']);
		$data  = htmlentities($sta);
		$typereg = $data;
    }else {?>
    <script>
         window.location.href = "orders";
    </script>

   

    <?php 
}
if($typereg){
    $account_id =  $_SESSION['account_id'];

	$sql_tr_orders = mysqli_query($connect, "SELECT * FROM `tracking_details` WHERE `account_id`='$account_id' AND `booking_no`='$typereg' AND `tstatus`!='' ORDER BY id DESC LIMIT 1");
	$row_tr_orders = mysqli_num_rows($sql_tr_orders);
	$val_tr_orders = mysqli_fetch_assoc($sql_tr_orders);

	$typeacct = $val_tr_orders['account_id'];
    $t_status = $val_tr_orders['tstatus'];
    echo $t_status;
    

	switch ($t_status) {
        case 'order_booked':
		$order_status = "Order Booked";

		break;
        case 'order_cancelled':
		$order_status = "Order Cancelled";

		break;
		case 'undelivered':
		$order_status = "Undelivered";

		break;
		case 'in_transit':
		$order_status = "In Transit";

		break;
		case 'delivered':
		$order_status = "Delivered";

		break;
		case 'out_for_delivery':
		$order_status = "Out for Delivery";

		break;
	}

	//Get the delivery details
	$sql_d_orders = mysqli_query($connect, "SELECT * FROM `delivery_details` WHERE `account_id`='$typeacct' AND `booking_no`='$typereg' ORDER BY id DESC LIMIT 1");
	$row_d_orders = mysqli_num_rows($sql_d_orders);
    $val_d_orders = mysqli_fetch_assoc($sql_d_orders);
    

	$d_contact_person = $val_d_orders['full_name'];
	$d_address = $val_d_orders['address'];
	$d_bus_stop = $val_d_orders['bus_stop'];
	$d_city = $val_d_orders['city'];
	$d_state = $val_d_orders['state'];
	$d_country = $val_d_orders['country'];
	$d_delivery_type = $val_d_orders['delivery_type'];
	$d_est_delivery_date = $val_d_orders['est_delivery_date'];
	$d_phone = $val_d_orders['phone'];
	$d_alt_phone = $val_d_orders['alt_phone'];
    $d_email = $val_d_orders['email'];
    

	if(!$d_bus_stop){ $d_bus = "";}
	elseif($d_bus_stop){ $d_bus = ", $d_bus_stop";}

	if(!$d_alt_phone){ $d_altphone = "";}
	elseif($d_alt_phone){ $d_altphone = ", $d_alt_phone";}

	$d_full_address = "$d_address$d_bus, $d_city, $d_state, $d_country"; //Delivery Street Address

	//Get the pickup details
	$sql_p_orders = mysqli_query($connect, "SELECT * FROM `pickup_details` WHERE `account_id`='$typeacct' AND `booking_no`='$typereg' ORDER BY id DESC LIMIT 1");
	$row_p_orders = mysqli_num_rows($sql_p_orders);
	$val_p_orders = mysqli_fetch_assoc($sql_p_orders);

	$p_contact_person = $val_p_orders['full_name'];
	$p_address = $val_p_orders['address'];
	$p_bus_stop = $val_p_orders['bus_stop'];
	$p_city = $val_p_orders['city'];
	$p_state = $val_p_orders['state'];
	$p_phone = $val_p_orders['phone'];
	$p_alt_phone = $val_p_orders['alt_phone'];
	$p_email = $val_p_orders['email'];
	$p_scheduled_date = $val_p_orders['scheduled_date'];

	if(!$p_bus_stop){ $p_bus = "";}
	elseif($p_bus_stop){ $p_bus = ", $p_bus_stop";}

	if(!$p_alt_phone){ $p_altphone = "";}
	elseif($p_alt_phone){ $p_altphone = ", $p_alt_phone";}

	$p_full_address = "$p_address$p_bus, $p_city, $p_state"; //Pickup Street Address

	//Get the payment details
	$sql_pay_orders = mysqli_query($connect, "SELECT * FROM `payment_details` WHERE `account_id`='$typeacct' AND `booking_no`='$typereg' ORDER BY id DESC LIMIT 1");
	$row_pay_orders = mysqli_num_rows($sql_pay_orders);
	$val_pay_orders = mysqli_fetch_assoc($sql_pay_orders);

	$payment_method = $val_pay_orders['payment_method'];
	$delivery_cost = $val_pay_orders['delivery_cost'];
	$pickup_cost = $val_pay_orders['pickup_cost'];
	$insurance_fee = $val_pay_orders['insurance_fee'];
	$total_cost = $val_pay_orders['total_cost'];
	$payment_status = $val_pay_orders['payment_status'];
	$payment_date = $val_pay_orders['payment_date'];

	//Get the parcel details
	$sql_parcel_orders = mysqli_query($connect, "SELECT * FROM `parcel_details` WHERE `account_id`='$typeacct' AND `booking_no`='$typereg' ORDER BY id DESC LIMIT 1");
	$row_parcel_orders = mysqli_num_rows($sql_parcel_orders);
	$val_parcel_orders = mysqli_fetch_assoc($sql_parcel_orders);

	$no_of_parcel = $val_parcel_orders['no_of_parcel'];
	$weight_kg = $val_parcel_orders['weight_kg'];
	$goods_description = $val_parcel_orders['goods_description'];
	$value_of_contents = $val_parcel_orders['value_of_contents'];

	//Get the user details
	$sql_user_orders = mysqli_query($connect, "SELECT * FROM `register` WHERE `account_id`='$typeacct' ORDER BY id DESC LIMIT 1");
	$row_user_orders = mysqli_num_rows($sql_user_orders);
	$val_user_orders = mysqli_fetch_assoc($sql_user_orders);

	$u_first_name = $val_user_orders['first_name'];
	$u_last_name = $val_user_orders['last_name'];
	$u_contact_person = "$u_first_name $u_last_name";
	$u_email = $val_user_orders['email'];
	$u_phone = $val_user_orders['phone'];
	$u_business_name = $val_user_orders['business_name'];
	$u_alt_phone = $val_user_orders['alt_phone'];

	if(!$u_alt_phone){ $u_altphone = "";}
	elseif($u_alt_phone){ $u_altphone = ", $u_alt_phone";}


}elseif(!$typereg){

		header("location:orders");

	}

?>
