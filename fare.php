<?php
header('Content-Type: application/json');
	include("config.php");
	include 'dbc.php';
	require_once('swift/lib/swift_required.php');
	
	
	if($_POST['delivery_address1']!='')	{
		
		foreach($_POST as $key => $value) {
			$data[$key] = filter($value); // post variables are filtered
		}
		
		$access = $data['access'];
		
	$pickup_address = $data['pickup_address1'];
	$pickup_fulladdress = $data['pickup_full_address1'];
	$pickup_lga = $data['pickup_lga1'];
	$pickup_town = $data['pickup_town1'];
	$pickup_city = $data['pickup_city1'];
	$pickup_state = $data['pickup_state1'];
	$pickup_country = $data['pickup_country1'];
	
	$delivery_address = $data['delivery_address1'];
	$delivery_fulladdress = $data['delivery_full_address1'];
	$delivery_lga = $data['delivery_lga1'];
	$delivery_town = $data['delivery_town1'];
	$delivery_city = $data['delivery_city1'];
	$delivery_state = $data['delivery_state1'];
	$delivery_state_short = $data['delivery_state1_short'];
	$delivery_country = $data['delivery_country1'];
	
	$weight_kg = $data['weight_kg'];
	$unit = $data['unit'];	
			
		//If delivery state is lagos, use the lga to get the zone, then use the zone to get the price
		//So the steps to get the price are as follows;
		//1. Get the state
		//2. Get the lga (if lagos)
		//3. Get the zone
		//4. Use the zone to get the unit price, extra kg price (if exists) 
		//5. Do the calculation to get the price using this formula; 1kg =
		
		if($delivery_state=="Lagos"){
			
		$query_lga = mysql_query("SELECT * FROM `settings_lagos_lga` WHERE `lg_name` = '$delivery_lga' AND `status`='Enabled' ORDER BY id DESC LIMIT 1");
		$row_lga = mysql_num_rows($query_lga);
		$val_lga = mysql_fetch_assoc($query_lga);
		
		$myzonename = $val_lga['zone_name'];
		$myzoneid = $val_lga['zone_id'];
		
		//Get unit price
		
		$query_zone = mysql_query("SELECT * FROM `settings_zone` WHERE `zone_name` = '$myzonename' AND `zone_id` = '$myzoneid' AND `status`='Enabled' ORDER BY id DESC LIMIT 1");
		$row_zone = mysql_num_rows($query_zone);
		$val_zone = mysql_fetch_assoc($query_zone);
		
		$my_unitprice = $val_zone['unit_price'];
		$my_add_kg_cost = $val_zone['add_kg_cost'];
		
		//Now let us calculate the price estimate
		
		$num1=$weight_kg;
		$num2 = $num1/0.5;
		$num3 = $num2 - 1;
		$num4 = $num3 * $my_add_kg_cost;
		$num5 = $num4 + $my_unitprice;
		$myfinalcost = $num5;  //This is the delivery price to display on the website
		
		}elseif($delivery_state!="Lagos"){
			
		$query_state = mysql_query("SELECT * FROM `settings_states` WHERE `short_state_name` = '$delivery_state_short' AND `status`='Enabled' ORDER BY id DESC LIMIT 1");
		$row_state = mysql_num_rows($query_state);
		$val_state = mysql_fetch_assoc($query_state);
		
		$myzonename = $val_state['zone_name'];
		$myzoneid = $val_state['zone_id'];
		
		//Get unit price
		
		$query_zone = mysql_query("SELECT * FROM `settings_zone` WHERE `zone_name` = '$myzonename' AND `zone_id` = '$myzoneid' AND `status`='Enabled' ORDER BY id DESC LIMIT 1");
		$row_zone = mysql_num_rows($query_zone);
		$val_zone = mysql_fetch_assoc($query_zone);
		
		$my_unitprice = $val_zone['unit_price'];
		$my_add_kg_cost = $val_zone['add_kg_cost'];
		
		//Now let us calculate the price estimate
		
		$num1=$weight_kg;
		$num2 = $num1/0.5;
		$num3 = $num2 - 1;
		$num4 = $num3 * $my_add_kg_cost;
		$num5 = $num4 + $my_unitprice;
		$myfinalcost = $num5;  //This is the delivery price to display on the website
		
		}
//Let's get the pickup price for within Lagos
		
		if($pickup_state=="Lagos"){
			
		$query_plga = mysql_query("SELECT * FROM `settings_lagos_lga` WHERE `lg_name` = '$pickup_lga' AND `status`='Enabled' ORDER BY id DESC LIMIT 1");
		$row_plga = mysql_num_rows($query_plga);
		$val_plga = mysql_fetch_assoc($query_plga);
		
		$myzonename_p = $val_plga['zone_name'];
		$myzoneid_p = $val_plga['zone_id'];
		
		//Get price using the zone name and id
		
		$query_zonep = mysql_query("SELECT * FROM `settings_zone` WHERE `zone_name` = '$myzonename_p' AND `zone_id` = '$myzoneid_p' AND `status`='Enabled' ORDER BY id DESC LIMIT 1");
		$row_zonep = mysql_num_rows($query_zonep);
		$val_zonep = mysql_fetch_assoc($query_zonep);
		
		$my_pickupcost= $val_zonep['pickup_price']; //This is the pickup price to display on the website
		
		}
		
		$deli = "&#8358;".$myfinalcost;
		$pkp = "&#8358;".$my_pickupcost;
		$duration = "3 days";
		$state = "open";

		$output =  array('pickup_price'=>''.$pkp.'',
                 'delivery_price'=>''.$deli.'',
				 'duration'=>''.$duration.'',
				 'state'=>''.$state.'');

echo json_encode($output,JSON_FORCE_OBJECT);
	}
	if($_POST['delivery_address1']=='')	{
	$error = "Delivery address not found :(";
		$state = "closed";

		$output =  array('error'=>''.$error.'',
				 'state'=>''.$state.'');

echo json_encode($output,JSON_FORCE_OBJECT);
	}
?>