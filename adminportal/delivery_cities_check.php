<?php

	$sql_b_type = mysqli_query("SELECT * FROM `settings_delivery` WHERE `delivery_id` != '' ORDER BY delivery_id ASC");
	$row_b_type = mysqli_num_rows($sql_b_type);
	$val_b_type = mysqli_fetch_assoc($sql_b_type);


?>
