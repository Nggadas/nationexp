<?php
	$get_data =trim($_GET['id']);
	$get_data  = htmlentities($get_data);
	$type_id = $get_data;

	if(!$type_id){ ?>
		<script>
			window.location.href = "delivery_types";
		</script>
	<?php }else{
		$sql= mysqli_query($connect,"SELECT * FROM `settings_delivery_type` WHERE `type_id`='$type_id' ORDER BY id DESC LIMIT 1");
		$row_count = mysqli_num_rows($sql);
		$delivery = mysqli_fetch_assoc($sql);

		if ($row_count > 0) {
			// Get delivery_details for $delivery_type
			$zone_id = $delivery['zone_id'];
			$delivery_type = $delivery['delivery_type'];
			$additional_cost = $delivery['additional_cost'];
			$estimated_dt = $delivery['estimated_dt'];
			$collection_st = $delivery['collection_st'];
			$collection_et = $delivery['collection_et'];
			$delivery_st = $delivery['delivery_st'];
			$delivery_et = $delivery['delivery_et'];
			$delivery_et1 = $delivery['delivery_et1'];
			$status = $delivery['status'];
			$resume = $delivery['resume'];
			$stop = $delivery['stop'];
			$description = $delivery['description'];

		} else { ?>
			<script>
				window.location.href = "delivery_types";
			</script>
		<?php }
	}

	if (isset($_POST['submit'])) {
		$error = "";
		// Get delivery_details for $zone
		$additional_cost = $_POST['additional_cost'];
		$estimated_dt = $_POST['estimated_dt'];
		$collection_st = $_POST['collection_st'];
		$collection_et = $_POST['collection_et'];
		$delivery_st = $_POST['delivery_st'];
		$delivery_et = $_POST['delivery_et'];
		$delivery_et1 = $_POST['delivery_et1'];
		$status = $_POST['status'];
		$resume = $_POST['resume'];
		$stop = $_POST['stop'];
		$description = $_POST['description'];

		if (!empty($additional_cost) || !empty($estimated_dt) || !empty($collection_st) || !empty($collection_et) || !empty($delivery_st) || !empty($delivery_et) || !empty($delivery_et1) || !empty($status) || !empty($resume) || !empty($stop) || !empty($description)) {
			$sql = "UPDATE settings_delivery_type SET additional_cost='$additional_cost', estimated_dt='$estimated_dt', collection_st='$collection_st', collection_et='$collection_et', delivery_st='$delivery_st', delivery_et='$delivery_et', delivery_et1='$delivery_et1', `status`='$status', `resume`='$resume', `stop`='$stop', `description`='$description'
					WHERE type_id='$type_id'";

			if (mysqli_query($connect, $sql)) {
                $invoice_status = $new_status;?>

                <!-- Redirect back to update_zone page -->
                <script>
                    window.location.href = 'edit_del_type?id=<?php echo $type_id; ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Could not update delivery type details, try again.";
            }
            
			mysqli_close($connect);
            
		} else {
			$error = "All fields required";
		}
		

	}
?>