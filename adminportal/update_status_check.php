<?php
	if(empty($_GET['booking_no'])){ ?>
        <script>
            window.location.href = "orders";
        </script>
	<?php }else{
		$booking_no = trim($_GET['booking_no']);
		$booking_no  = htmlentities($booking_no);
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
    $description = $tracking['description'];
    $current_city = $tracking['current_city'];
    $old = $tracking['old'];
    $tstatus = $tracking['tstatus'];
    $activity = $tracking['activity'];
    $tcomment = $tracking['tcomment'];
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

	if (isset($_POST['submit'])) {
		$error = "";

		if (!empty($_POST['custom_status'])) {
			$custom_status = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['custom_status'])));
			$custom_status = strtolower(str_replace(' ', '_', $custom_status));
			$sql = "INSERT INTO tracking_details (description,current_city,old,tstatus,activity,tcomment,booking_no,email,account_id,ship_date,newdate,tdate,ttime,daysOfWeek)
                    VALUES ('$description','$current_city','$old','$custom_status','$activity','$tcomment','$booking_no','$email','$account_id','$ship_date','$newdate','$tdate','$ttime','$day_of_week')";

			if (mysqli_query($connect, $sql)) {
                $tstatus = $custom_status;?>

                <!-- Redirect back to update_status page -->
                <script>
                    window.location.href = 'update_status?booking_no=<?php echo $booking_no ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Status could not be updated, try again.";
            }
            
			mysqli_close($connect);

		}elseif (!empty($_POST['new_status'])) {
			$new_status = trim(strip_tags(mysqli_real_escape_string($connect,$_POST['new_status'])));
			$sql = "INSERT INTO tracking_details (description,current_city,old,tstatus,activity,tcomment,booking_no,email,account_id,ship_date,newdate,tdate,ttime,daysOfWeek)
                    VALUES ('$description','$current_city','$old','$new_status','$activity','$tcomment','$booking_no','$email','$account_id','$ship_date','$newdate','$tdate','$ttime','$day_of_week')";

			if (mysqli_query($connect, $sql)) {
                $tstatus = $new_status;?>

                <!-- Redirect back to update_status page -->
                <script>
                    window.location.href = 'update_status?booking_no=<?php echo $booking_no ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Status could not be updated, try again.";
            }
            
			mysqli_close($connect);
            
		}else {
			$error = "Status field required";
        }
	}

?>
