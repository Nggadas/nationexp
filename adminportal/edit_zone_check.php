<?php
	$get_data =trim($_GET['id']);
	$get_data  = htmlentities($get_data);
	$record_id = $get_data;

	if(!$record_id){ ?>
		<script>
			window.location.href = "zones";
		</script>
	<?php }else{
		$sql= mysqli_query($connect,"SELECT * FROM `settings_zone` WHERE `record_id`='$record_id' ORDER BY id DESC LIMIT 1");
		$row_count = mysqli_num_rows($sql);
		$zone = mysqli_fetch_assoc($sql);

		if ($row_count > 0) {
			// Get delivery_details for $zone
			$zone_id = $zone['zone_id'];
			$zone_name = $zone['zone_name'];
			$unit_price = $zone['unit_price'];
			$add_kg_cost = $zone['add_kg_cost'];
			$pickup_price = $zone['pickup_price'];
			$description = $zone['description'];
			$unit_kg = $zone['unit_kg'];
			$status = $zone['status'];

		} else { ?>
			<script>
				window.location.href = "zones";
			</script>
		<?php }
	}

	if (isset($_POST['submit'])) {
		$error = "";
		// Get delivery_details for $zone
		$unit_price = $_POST['unit_price'];
		$add_kg_cost = $_POST['add_kg_cost'];
		$pickup_price = $_POST['pickup_price'];
		$description = $_POST['description'];
		$unit_kg = $_POST['unit_kg'];
		$status = $_POST['status'];

		if (!empty($unit_price) || !empty($add_kg_cost) || !empty($pickup_price) || !empty($description) || !empty($unit_kg) || !empty($status)) {
			$sql = "UPDATE settings_zone SET unit_price='$unit_price', add_kg_cost='$add_kg_cost', pickup_price='$pickup_price', `description`='$description', unit_kg='$unit_kg', `status`='$status'
					WHERE record_id='$record_id'";

			if (mysqli_query($connect, $sql)) {
                $invoice_status = $new_status;?>

                <!-- Redirect back to update_zone page -->
                <script>
                    window.location.href = 'edit_zone?id=<?php echo $record_id; ?>';
                </script>
                
			<?php } else {
				// $error = mysqli_error($connect);
				$error = "Error: Could not update zone details, try again.";
            }
            
			mysqli_close($connect);
            
		} else {
			$error = "All fields required";
		}
		

	}
?>