<?php

if(!empty($_GET['account_id'])){
	$sta =trim($_GET['account_id']);
	$data  = htmlentities($sta);
	$u_account_id = $data;
}

if($u_account_id){
	// Select distinct to prevent multiple records
	$sql = mysqli_query($connect,"SELECT * FROM `register` WHERE `account_id`='$u_account_id' AND `email`!='' LIMIT 1");
	$row_num = mysqli_num_rows($sql);
	$row_data = mysqli_fetch_assoc($sql);

	if ($row_num > 0) {

		$u_first_name = $row_data['first_name'];
		$u_last_name = $row_data['sur_name'];
		$u_full_name = $u_first_name . ' ' . $u_last_name;
		$u_title = $row_data['title'];
		$u_email = $row_data['email'];
		$u_phone = $row_data['phone_no'];
		$u_alt_phone = $row_data['alt_phone'];
		$u_business_name = $row_data['$business_name'];
		$u_address = $row_data['address'];
		$u_city = $row_data['city'];
		$u_state = $row_data['state'];
		$u_country = $row_data['country'];
		$u_bus_stop = $row_data['bus_stop'];
		$u_status = $row_data['status'];

	} elseif ($row_num < 1) { ?>
		<script>
			window.location.href = "customers";
		</script>
	<?php }

}elseif(!$u_account_id){ ?>
	<script>
		window.location.href = "customers";
	</script>
<?php }
?>
