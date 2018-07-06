<?php

	if($_GET['type'] == "new" || $_GET['type'] =="returning"){
		$sta =trim($_GET['type']);
		$data  = htmlentities($sta);
		$type = $data;
	}else{
		$type = "";
	}

	if($type){
		switch ($type) {
			case 'new':
			$old = "";
			break;

			case 'returning':
			$old = "yes";
			break;
		}

		$sql_newr_orders = mysqli_query($connect,"SELECT * FROM `register` WHERE `email` != '' AND `account_id`!='' AND `status`='Enabled' AND `old`='$old' ORDER BY ID DESC");
		$row_newr_orders = mysqli_num_rows($sql_newr_orders);
		$val_newr_orders = mysqli_fetch_assoc($sql_newr_orders);


	}elseif(!$type){
		$sql_newr_orders = mysqli_query($connect,"SELECT * FROM `register` WHERE `email` != '' AND `account_id`!='' AND `status`='Enabled' ORDER BY ID DESC");
		$row_newr_orders = mysqli_num_rows($sql_newr_orders);
		$val_newr_orders = mysqli_fetch_assoc($sql_newr_orders);

		//$myregacct = $val_newr_orders['account_id'];
	}

?>
