<?php
session_start();
$connect = mysqli_connect("localhost","root","","nationex_smartzip");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
    
}

    $booking_no = $_GET['booking_no'];
    $status =  $_SESSION['tstatus'];

    if(!empty($booking_no)) {
        $sql =" UPDATE tracking_details SET tstatus = 'order_cancelled' WHERE booking_no = '$booking_no' AND tstatus = '$status'";
        $query = mysqli_query($connect, $sql);
        // $server = $_SERVER['PHP_SELF'];

        if($query) { ?>
            <script>
                window.location.href = "orders?status=order_booked";
            </script>
        <?php   
        }else {
            echo "not cancelled". mysqli_error($connect);
        }
    }
?>