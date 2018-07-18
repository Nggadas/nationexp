<?php

	foreach($_GET as $key => $value) {
		$data1[$key] = filter($connect,$value); // GET variables are filtered
	}

	$customer_id = $data1['id'];

	if(!empty($customer_id)) {
		//Check if account id is valid
		$sql_register= mysqli_query($connect,"SELECT * FROM `register` WHERE `account_id`='$customer_id' ORDER BY id DESC LIMIT 1");
		$row_register = mysqli_num_rows($sql_register);
		$reg_data = mysqli_fetch_assoc($sql_register);

		$u_first_name = $reg_data['first_name'];
		$u_last_name = $reg_data['sur_name'];
		$full_name = $u_first_name.' '.$u_last_name;

		if($row_register < 1){ ?>
			<script>
				window.location.href = "customers";
			</script>
		<?php }

	} else { ?>
		<script>
			window.location.href = "customers";
		</script>
	<?php }

	if(isset($_POST['submit_button'])){

	}

?>
