<?php
	if(empty($_GET['booking_no'])){ ?>
        <script>
            window.location.href = "orders";
        </script>
	<?php }else{
		$booking_no = filter($connect,$_GET['booking_no']);
	}

    // get data from database
    $sql_tr_orders = mysqli_query($connect,"SELECT * FROM `tracking_details` WHERE `account_id`!='' AND `booking_no`='$booking_no' AND `old`='' ORDER BY id DESC LIMIT 1");
    $row_tr_orders = mysqli_num_rows($sql_tr_orders);
    $tracking = mysqli_fetch_assoc($sql_tr_orders);
    
    $sql = mysqli_query($connect,"SELECT * FROM `parcel_details` WHERE `account_id`!='' AND `booking_no`='$booking_no' ORDER BY id DESC LIMIT 1");
    $row_num = mysqli_num_rows($sql);
    $parcel = mysqli_fetch_assoc($sql);
    
    // redirect to orders page booking no doesn't exist in database
    if ($row_tr_orders < 1 || $row_num < 1) { ?>
        <script>
            window.location.href = "orders";
        </script>
    <?php }

    // tracking_details
    $current_city = $tracking['current_city'];
    $split = explode(', ', $current_city);
    $city = $split[0];
    $state = $split[1];
    $description = $tracking['description'];
    $old = $tracking['old'];
    $tstatus = $tracking['tstatus'];
    $activity = $tracking['activity'];
    $comment = $tracking['tcomment'];
    $email = $tracking['email'];
    $account_id = $tracking['account_id'];
    $ship_date = $tracking['ship_date'];
    $newdate = date('Y-m-d');
    $tdate = strtoupper(date('d M Y'));
    $ttime = date('H:iA');
    $day_of_week = date('l');    

    //parcel_details
    $good_description = $parcel['goods_description'];
    $value_of_contents = $parcel['value_of_contents'];
    $quantity = $parcel['no_of_parcel'];

	if (isset($_POST['submit'])) {
        $error = "";
        $new_activity = $_POST['activity'];
        $new_comment = $_POST['comment'];
        $new_description = $_POST['description'];
        $new_city = $_POST['city'];
        $new_state = $_POST['state'];
        $cash_collected = $_POST['toggle_options'];
        $cash_options = $_POST['cash_options'];
        $amount_collected = $_POST['amount_collected'];

        $current_city = $new_city .', '. $new_state;

		if (!empty($_POST['custom_status']) && !empty($new_activity) && !empty($new_comment)) {
            // Update previous entries to old
            $update_previous = mysqli_query($connect,"UPDATE tracking_details SET old='yes' WHERE booking_no='$booking_no'");

			$custom_status = filter($connect,$_POST['custom_status']);
			$custom_status = strtolower(str_replace(' ', '_', $custom_status));
			$sql = "INSERT INTO tracking_details (`description`,current_city,old,tstatus,activity,tcomment,booking_no,email,account_id,ship_date,newdate,tdate,ttime,daysOfWeek)
                    VALUES ('$new_description','$current_city','$old','$custom_status','$new_activity','$new_comment','$booking_no','$email','$account_id','$ship_date','$newdate','$tdate','$ttime','$day_of_week')";

			if (mysqli_query($connect, $sql)) {
                $tstatus = $custom_status;

                if ($cash_collected == 'yes') {
                    // Update payment details to include cash collected
                    $update_payment = mysqli_query($connect,"UPDATE payment_details SET cash_collected='$cash_options', amount_collected='$amount_collected' WHERE booking_no='$booking_no'");
                } ?>

                <!-- Redirect back to update_status page -->
                <script>
                    window.location.href = 'orders?status=<?php echo $custom_status ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Status could not be updated, try again.";
            }
            
			mysqli_close($connect);

		}elseif (!empty($_POST['new_status']) && !empty($new_activity) && !empty($new_comment)) {
            // Update previous entries to old
            $update_previous = mysqli_query($connect,"UPDATE tracking_details SET old='yes' WHERE booking_no='$booking_no'");

			$new_status = filter($connect,$_POST['new_status']);
			$sql = "INSERT INTO tracking_details (`description`,current_city,old,tstatus,activity,tcomment,booking_no,email,account_id,ship_date,newdate,tdate,ttime,daysOfWeek)
                    VALUES ('$new_description','$current_city','$old','$new_status','$new_activity','$new_comment','$booking_no','$email','$account_id','$ship_date','$newdate','$tdate','$ttime','$day_of_week')";

			if (mysqli_query($connect, $sql)) {
                $tstatus = $new_status;

                if ($cash_collected == 'yes') {
                    // Update payment details to include cash collected
                    $update_payment = mysqli_query($connect,"UPDATE payment_details SET cash_collected='$cash_options', amount_collected='$amount_collected' WHERE booking_no='$booking_no'");
                } ?>
                
                <!-- Redirect back to update_status page -->
                <script>
                    window.location.href = 'orders?status=<?php echo $new_status ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Status could not be updated, try again.";
            }
            
			mysqli_close($connect);
            
		}else {
			$error = "All fields required";
        }
	}

?>
