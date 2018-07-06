$('#order_button').click(function(e){
        e.preventDefault()
		
	var pickup_address = $('#pickup_address1').val();
	var pickup_fulladdress = $('#pickup_full_address1').val();
	var pickup_lga = $('#pickup_lga1').val();
	var pickup_town = $('#pickup_town1').val();
	var pickup_city = $('#pickup_city1').val();
	var pickup_state = $('#pickup_state1').val();
	var pickup_country = $('#pickup_country1').val();
	
	var delivery_address = $('#delivery_address1').val();
	var delivery_fulladdress = $('#delivery_full_address1').val();
	var delivery_lga = $('#delivery_lga1').val();
	var delivery_town = $('#delivery_town1').val();
	var delivery_city = $('#delivery_city1').val();
	var delivery_state = $('#delivery_state1').val();
	var delivery_state_short = $('#delivery_state1_short').val();
	var delivery_country = $('#delivery_country1').val();
	
	var weight_kg = $('#weight_kg').val();
	var unit = $('#unit').val();
		
	if (delivery_address)
	{
		$.ajax({
			type: "POST",
			url: "../order",
			data: $("#pricing-form").serialize(),
			dataType: 'json',
			success: function(response){                         
				if(response.state=='open'){
					if(response.user=='1'){
					window.open(
					'../continue-order',
					'_self'
					);	
						}else{
					window.open(
					'../checkout-login',
					'_self'
					);
						}					
				}
				if(response.state=='closed'){
					$('#error_slate').show();	
					$('#price_slate').hide();
					$("#error_slate").html('<font color="red">'+response.error+'</font>\n');
					$('#pricing_button').show();
					$('#loading').hide();
				}
			}
		});
	}
	else{
		$('#price_slate').hide();
		$('#loading').hide();
		$('#pricing_button').show();
		$("#error_slate").html('<font color="red">Invalid Delivery location, please try again</font>\n');
		$('#error_slate').show();		
	}
	//return false;
});