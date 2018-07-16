<?php

$customer_id = $_GET['account_id'];
$invoice_no = $_GET['invoice_no'];

$booking_array = $_GET['booking_id'];
$booking_no = explode(',', $booking_array);
$date = date('d-M-Y');

$sql = mysqli_query($connect,"SELECT * FROM `register` WHERE `email` != '' AND `account_id`='$customer_id' AND `status`='Enabled' ORDER BY ID DESC");
$row_num = mysqli_num_rows($sql);
$val_data = mysqli_fetch_assoc($sql);

$u_first_name = $val_data['first_name'];
$u_last_name = $val_data['sur_name'];
$u_email = $val_data['email'];
$u_phone_no = $val_data['phone_no'];
$full_name = $first_name .' '. $full_name;