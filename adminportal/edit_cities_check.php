<?php
	$get_data =trim($_GET['id']);
	$get_data  = htmlentities($get_data);
	$delivery_id = $get_data;

	if(!$delivery_id){ ?>
		<script>
			window.location.href = "delivery_cities";
		</script>
	<?php }else{
		$sql= mysqli_query($connect,"SELECT * FROM `settings_delivery` WHERE `delivery_id`='$delivery_id' LIMIT 1");
		$row_count = mysqli_num_rows($sql);
		$delivery = mysqli_fetch_assoc($sql);

		if ($row_count > 0) {
			// Get delivery_details for $delivery_type
			$zone_id = $delivery['zone_id'];
			$collection_city = $delivery['collection_city'];
			$delivery_city = $delivery['delivery_city'];

		} else { ?>
			<script>
				window.location.href = "delivery_cities";
			</script>
		<?php }
	}

	if (isset($_POST['submit'])) {
		$error = "";
		// Get delivery_details for $zone
		$zone_id = $_POST['zone_id'];
		$collection_city = $_POST['collection_city'];

		if (!empty($zone_id) || !empty($collection_city) || !empty($delivery_city)) {
			$sql = "UPDATE settings_delivery SET zone_id='$zone_id', collection_city='$collection_city'
					WHERE delivery_id='$delivery_id'";

			if (mysqli_query($connect, $sql)) {
                $invoice_status = $new_status;?>

                <!-- Redirect back to update_zone page -->
                <script>
                    window.location.href = 'edit_delivery_cities?id=<?php echo $delivery_id; ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Could not update delivery city details, try again.";
            }
            
			mysqli_close($connect);
            
		} else {
			$error = "All fields required";
		}
		

	}
?>