<?php
	
	foreach($_GET as $key => $value) {
		$data[$key] = filter($value); // post variables are filtered
	}
	$typereg = $data['type'];	
	
	
	switch ($typereg) {
        case 'new':
		$sql_newr_orders = mysql_query("SELECT * FROM `register` WHERE `email` != '' AND `account_id`!='' AND `status`='Enabled' AND `old`='' ORDER BY ID DESC");
		$row_newr_orders = mysql_num_rows($sql_newr_orders);
		$val_newr_orders = mysql_fetch_assoc($sql_newr_orders);
		
		$myregacct = $val_newr_orders['account_id'];
		return $myregacct;
		break; 
        case 'returning':
		$sql_oldr_orders = mysql_query("SELECT * FROM `register` WHERE `email` != '' AND `account_id`!='' AND `status`='Enabled' AND `old`='yes' ORDER BY ID DESC");
		$row_oldr_orders = mysql_num_rows($sql_oldr_orders);
		$val_oldr_orders = mysql_fetch_assoc($sql_oldr_orders);
		
		$myregacct = $val_oldr_orders['account_id'];
		return $myregacct;
		break;
	}
	if(!$typereg){
		$sql_newr_orders = mysql_query("SELECT * FROM `register` WHERE `email` != '' AND `account_id`!='' AND `status`='Enabled' ORDER BY ID DESC");
		$row_newr_orders = mysql_num_rows($sql_newr_orders);
		$val_newr_orders = mysql_fetch_assoc($sql_newr_orders);
		
		$myregacct = $val_newr_orders['account_id'];
		
	}
	
?>