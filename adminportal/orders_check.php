<?php
	if($_GET['status'] == "order_booked" || $_GET['status'] =="in_transit" || $_GET['status'] =="delivered" || $_GET['status'] =="out_for_delivery" || $_GET['status'] =="undelivered" || $_GET['status'] =="order_cancelled" ){
		$sta =trim($_GET['status']);
		$data  = htmlentities($sta);
		$status = $data;	
	}else{
		$status = "";
	}

	// Select distinct to prevent multiple records
	if($status){
		$sql = mysqli_query($connect,"SELECT DISTINCT `booking_no` FROM `tracking_details` WHERE `account_id`!='' AND `tstatus`='$status' AND `old`='' ORDER BY id DESC");
		$row_num = mysqli_num_rows($sql);

	}elseif(!$status){
		$sql = mysqli_query($connect,"SELECT DISTINCT `booking_no` FROM `tracking_details` WHERE `account_id`!='' AND `old`='' ORDER BY id DESC");
		$row_num = mysqli_num_rows($sql);
	}
    
    if(isset($_POST['submit'])) {
        if (!empty($_POST['booking_no'])) {
            $bookingID = json_decode($_POST['booking_no'], true); ?>
			<script>
				var bookingID = <?php echo json_encode($bookingID); ?>;
				window.location.href = "update_multiple_status?booking_id="+bookingID;
			</script>
		<?php } else {
			$error = "No orders where selected";
		}
    }

?>
