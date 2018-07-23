<?php

	$sql_b_type = mysqli_query($connect, "SELECT * FROM `settings_zone` WHERE `record_id` != '' ORDER BY id DESC");
	$row_b_type = mysqli_num_rows($sql_b_type);
	$val_b_type = mysqli_fetch_assoc($sql_b_type);
?>
