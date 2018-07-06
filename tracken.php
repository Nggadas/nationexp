<?php
    include("config.php");

     $trackingNo = $_POST['trackingNo'];
     $query_tracking = mysqli_query($connect, "SELECT * FROM `tracking_details` WHERE booking_no = '$trackingNo' ORDER BY timestamp DESC LIMIT 1");
     $row_tracking = mysqli_num_rows($query_tracking);
     $val_tracking = mysqli_fetch_assoc($query_tracking);
     $_SESSION['ship'] = $val_tracking['ship_date'];
     $_SESSION['date'] = $val_tracking['tdate'];
     $_SESSION['time'] = $val_tracking['ttime'];
     $_SESSION['city'] = $val_tracking['current_city'];
     $_SESSION['comment'] = $val_tracking['tcomment'];
     $_SESSION['activity'] = $val_tracking['activity'];
     $_SESSION['days'] = $val_tracking['daysOfWeek'];
     $_SESSION['status'] = str_replace('_', ' ', $val_tracking['tstatus']);

     $query_parcel = mysqli_query($connect, "SELECT * FROM `parcel_details` WHERE `booking_no` = '$trackingNo' ORDER BY ID DESC LIMIT 1");
     $row_parcel = mysqli_num_rows($query_parcel);
     $val_parcel = mysqli_fetch_assoc($query_parcel);
     $_SESSION['parcel'] = $val_parcel['booking_no'];
     $_SESSION['weight'] = $val_parcel['weight_kg'];


     $query_delivery = mysqli_query($connect, "SELECT * FROM `delivery_details` WHERE `booking_no` = '$trackingNo' ORDER BY ID DESC LIMIT 1");
     $row_delivery = mysqli_num_rows($query_delivery);
     $val_delivery = mysqli_fetch_assoc($query_delivery);
     $_SESSION['category'] = $val_delivery['category'];
     $_SESSION['service'] = $val_delivery['service'];
     $_SESSION['est_date'] = $val_delivery['est_delivery_date'];
     $_SESSION['est_time'] = $val_delivery['est_delivery_time'];
     $_SESSION['ddate'] = $val_delivery['ddate'];
     $_SESSION['dtime'] = $val_delivery['dtime'];

     if ($row_parcel == 0) {
       echo "Invalid Tracking Number";
       } else{
         echo "success";
       }
?>
