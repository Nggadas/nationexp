<?php
$booking_array = $_GET['booking_id'];
$booking_no = explode(',', $booking_array);

foreach ($bookingID as $key => $value) {
    $booking_no += ', ' . $value;
}

if (isset($_POST['submit'])) {

    // tracking_details
    $newdate = date('Y-m-d');
    $tdate = strtoupper(date('d M Y'));
    $ttime = date('H:iA');
    $day_of_week = date('l');    

    //parcel_details
    $good_description = $parcel['goods_description'];
    $value_of_contents = $parcel['value_of_contents'];
    $quantity = $parcel['no_of_parcel'];

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
        $custom_status = filter($connect,$_POST['custom_status']);
        $custom_status = strtolower(str_replace(' ', '_', $custom_status));

        foreach ($booking_no as $key => $value) { 
            if (!empty($value)) {
                // Update previous entries to old
                $update_previous = mysqli_query($connect,"UPDATE tracking_details SET old='yes' WHERE booking_no='$value'");
                
                // get data from database
                $sql_tr_orders = mysqli_query($connect,"SELECT * FROM `tracking_details` WHERE `account_id`!='' AND `booking_no`='$value' ORDER BY id DESC LIMIT 1");
                $row_tr_orders = mysqli_num_rows($sql_tr_orders);
                $tracking = mysqli_fetch_assoc($sql_tr_orders);

                // tracking_details
                $email = $tracking['email'];
                $account_id = $tracking['account_id'];
                $ship_date = $tracking['ship_date'];

                $sql = "INSERT INTO tracking_details (`description`,current_city,old,tstatus,activity,tcomment,booking_no,email,account_id,ship_date,newdate,tdate,ttime,daysOfWeek)
                        VALUES ('$new_description','$current_city','','$custom_status','$new_activity','$new_comment','$value','$email','$account_id','$ship_date','$newdate','$tdate','$ttime','$day_of_week')";

                mysqli_query($connect, $sql);

                if ($cash_collected == 'yes') {
                    // Update payment details to include cash collected
                    $update_payment = mysqli_query($connect,"UPDATE payment_details SET cash_collected='$cash_options', amount_collected='$amount_collected' WHERE booking_no='$value'");
                } ?>

                <!-- Redirect back to update_status page -->
                <script>
                    window.location.href = 'orders?status=<?php echo $custom_status ?>';
                </script>
                
			<?php }
        }
        
        mysqli_close($connect);

    }elseif (!empty($_POST['new_status']) && !empty($new_activity) && !empty($new_comment)) {
        $new_status = filter($connect,$_POST['new_status']);

        foreach ($booking_no as $key => $value) {
            if (!empty($value)) {
                // Update previous entries to old
                $update_previous = mysqli_query($connect,"UPDATE tracking_details SET old='yes' WHERE booking_no='$value'");

                // get data from database
                $sql_tr_orders = mysqli_query($connect,"SELECT * FROM `tracking_details` WHERE `account_id`!='' AND `booking_no`='$value' ORDER BY id DESC LIMIT 1");
                $row_tr_orders = mysqli_num_rows($sql_tr_orders);
                $tracking = mysqli_fetch_assoc($sql_tr_orders);

                // tracking_details
                $email = $tracking['email'];
                $account_id = $tracking['account_id'];
                $ship_date = $tracking['ship_date'];

                $sql = "INSERT INTO tracking_details (`description`,current_city,old,tstatus,activity,tcomment,booking_no,email,account_id,ship_date,newdate,tdate,ttime,daysOfWeek)
                        VALUES ('$new_description','$current_city','','$new_status','$new_activity','$new_comment','$value','$email','$account_id','$ship_date','$newdate','$tdate','$ttime','$day_of_week')";

                mysqli_query($connect, $sql);

                if ($cash_collected == 'yes') {
                    // Update payment details to include cash collected
                    $update_payment = mysqli_query($connect,"UPDATE payment_details SET cash_collected='$cash_options', amount_collected='$amount_collected' WHERE booking_no='$value'");
                } ?>

                <!-- Redirect back to update_status page -->
                <script>
                    window.location.href = 'orders?status=<?php echo $new_status ?>';
                </script>
                
			<?php }
        }
        
        mysqli_close($connect);
        
    }else {
        $error = "All fields required";
    }
}

?>
