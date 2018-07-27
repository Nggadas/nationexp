<?php
session_start();

	if(empty($_SESSION['id'])){
		header("Location: ../");
		exit();
	}

	header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", FALSE);
	header("Pragma: no-cache");
	flush();
	error_reporting(0);

	include("../config.php");
	protect();
	include("../dbc.php");
	require_once('../swift/lib/swift_required.php');
	date_default_timezone_set('Africa/Lagos');

	$mypage = "dashboard";

	$email = $_SESSION['email'];
	$account_id = $_SESSION['account_id'];

	$sql_admin = mysqli_query($connect, "SELECT * FROM `register` WHERE `email` = '$email' AND `account_id`='$account_id' AND `status`='Enabled' ORDER BY ID DESC LIMIT 1");
	$row_admin = mysqli_num_rows($sql_admin);
	$val_admin = mysqli_fetch_assoc($sql_admin);

	$first_name = $val_admin['first_name'];
	$surname = $val_admin['sur_name'];


	$sql_b_orders = mysqli_query($connect, "SELECT * FROM `delivery_details` WHERE `account_id`='$account_id' ORDER BY ID DESC");
	$row_b_orders = mysqli_num_rows($sql_b_orders);
	$val_b_orders = mysqli_fetch_assoc($sql_b_orders);

	//Count all Orders in "Delivered" status
	$sqlbnot=mysqli_query($connect, "SELECT COUNT(booking_no) AS delivered FROM `tracking_details` WHERE `account_id`='$account_id' AND `status`='delivered' AND `old`=''");
	while($rowbnot=mysqli_fetch_object($sqlbnot)){ $delivered=$rowbnot->delivered; }

	//Count all Orders in "UnDelivered" status
	$sqlundelivered=mysqli_query($connect, "SELECT COUNT(booking_no) AS undelivered FROM `tracking_details` WHERE `account_id`='$account_id' AND `tstatus`='undelivered' AND `old`=''");
	while($rowundelivered=mysqli_fetch_object($sqlundelivered)){ $undelivered=$rowundelivered->undelivered; }

	//Count all Orders in "Order Booked" status
	$sqlorderbooked=mysqli_query($connect, "SELECT COUNT(booking_no) AS orderbooked FROM `tracking_details` WHERE `account_id`='$account_id' AND `tstatus`='order_booked' AND `old`=''");
	while($roworderbooked=mysqli_fetch_object($sqlorderbooked)){ $orderbooked=$roworderbooked->orderbooked; }

	//Count all Orders in "In Transit" status
	$sqlintransit=mysqli_query($connect, "SELECT COUNT(booking_no) AS intransit FROM `tracking_details` WHERE `account_id`='$account_id' AND `tstatus`='in_transit' AND `old`=''");
	while($rowintransit=mysqli_fetch_object($sqlintransit)){ $intransit=$rowintransit->intransit; }

	//Count all Orders in "out for delivery" status
	$sqloutfordelivery=mysqli_query($connect, "SELECT COUNT(booking_no) AS outfordelivery FROM `tracking_details` WHERE `account_id`='$account_id' AND `tstatus`='out_for_delivery' AND `old`=''");
	while($rowoutfordelivery=mysqli_fetch_object($sqloutfordelivery)){ $outfordelivery=$rowoutfordelivery->outfordelivery; }

	//Count all Orders in "order cancelled" status
	$sqlordercancelled=mysqli_query($connect, "SELECT COUNT(booking_no) AS ordercancelled FROM `tracking_details` WHERE `account_id`='$account_id' AND `tstatus`='order_cancelled' AND `old`=''");
	while($rowordercancelled=mysqli_fetch_object($sqlordercancelled)){ $ordercancelled=$rowordercancelled->ordercancelled; }

	//Count Old customers
	$sqlsnot=mysqli_query($connect, "SELECT COUNT(email) AS old FROM `register` WHERE `email` !='' AND `account_id`='$account_id' AND `status`='Enabled' AND `old`='yes'");
	while($rowsnot=mysqli_fetch_object($sqlsnot)){ $returningcustomers=$rowsnot->old; }

	//Count new customers
	$sqlnew=mysqli_query($connect, "SELECT COUNT(email) AS newp FROM `register` WHERE `email` !='' AND `account_id`='$account_id' AND `status`='Enabled' AND `old`=''");
	while($rownew=mysqli_fetch_object($sqlnew)){ $newcustomers=$rownew->newp; }

	//Count invoices
	$sqlinvoices=mysqli_query($connect, "SELECT COUNT(email) AS invoices FROM `invoices` WHERE `email`!='' AND `user_id`='$account_id'");
	while($rowinvoices=mysqli_fetch_object($sqlinvoices)){ $invoices=$rowinvoices->invoices; }




	if(!$delivered){
		$delivered ="0";
	}
	if(!$orderbooked){
		$orderbooked ="0";
	}
	if(!$intransit){
		$intransit ="0";
	}
	if(!$outfordelivery){
		$outfordelivery ="0";
	}
	if(!$undelivered){
		$undelivered ="0";
	}
	if(!$ordercancelled){
		$ordercancelled ="0";
	}
	if(!$newcustomers){
		$newcustomers ="0";
	}
	if(!$returningcustomers){
		$returningcustomers ="0";
	}
	if(!$invoices){
		$invoices ="0";
	}

?>
