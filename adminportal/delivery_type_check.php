<?php

	$sql_b_type = mysqli_query("SELECT * FROM `settings_delivery_type` WHERE `type_id` != '' AND `status`!='' ORDER BY id DESC");
	$row_b_type = mysqli_num_rows($sql_b_type);
	$val_b_type = mysqli_fetch_assoc($sql_b_type);
?>
