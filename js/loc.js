$(function(){
		 function initialize() {

			var options = {
				componentRestrictions: {country: "ng"}
			};

			var input = document.getElementById('pickup_address');
			var autocomplete = new google.maps.places.Autocomplete(input, options);
			
			var input2 = document.getElementById('delivery_address');
			var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
			
			var prefix = 'Lagos, ';

$(input).on('input',function(){
    var str = input.value;
    if(str.indexOf(prefix) == 0) {
        // string already started with prefix
        return;
    } else {
        if (prefix.indexOf(str) >= 0) {
            // string is part of prefix
            input.value = prefix;
        } else {
            input.value = prefix+str;
        }
    }
});
	//Get the pickup location address entered
	google.maps.event.addListener(autocomplete, 'place_changed', function() {
        var place = autocomplete.getPlace();
		//document.getElementById('pickup_address').value = place.name+', Lagos';
		document.getElementById('pickup_address1').value = place.name;
		document.getElementById('pickup_full_address1').value = place.formatted_address;
		for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "administrative_area_level_2") {
          document.getElementById('pickup_lga1').value = place.address_components[i].long_name;
        }
		if (place.address_components[i].types[j] == "neighborhood") {
          document.getElementById('pickup_town1').value = place.address_components[i].long_name;
        }
		if (place.address_components[i].types[j] == "locality") {
          document.getElementById('pickup_city1').value = place.address_components[i].long_name;
        }
		if (place.address_components[i].types[j] == "administrative_area_level_1") {
          document.getElementById('pickup_state1').value = place.address_components[i].long_name;
        }
		if (place.address_components[i].types[j] == "country") {
          document.getElementById('pickup_country1').value = place.address_components[i].long_name;
        }
      }
    }
    });
	//Get the delivery location address entered
	google.maps.event.addListener(autocomplete2, 'place_changed', function() {
        var place1 = autocomplete2.getPlace();
		document.getElementById('delivery_address1').value = place1.name;
	   document.getElementById('delivery_full_address1').value = place1.formatted_address;
	   for (var i = 0; i < place1.address_components.length; i++) {
      for (var j = 0; j < place1.address_components[i].types.length; j++) {
        if (place1.address_components[i].types[j] == "administrative_area_level_2") {
          document.getElementById('delivery_lga1').value = place1.address_components[i].long_name;
        }
		if (place1.address_components[i].types[j] == "neighborhood") {
          document.getElementById('delivery_town1').value = place1.address_components[i].long_name;
        }
		if (place1.address_components[i].types[j] == "locality") {
          document.getElementById('delivery_city1').value = place1.address_components[i].long_name;
        }
		if (place1.address_components[i].types[j] == "administrative_area_level_1") {
		  document.getElementById('delivery_state1_short').value = place1.address_components[i].short_name;
        }
		if (place1.address_components[i].types[j] == "administrative_area_level_1") {
          document.getElementById('delivery_state1').value = place1.address_components[i].long_name;
        }
		if (place1.address_components[i].types[j] == "country") {
          document.getElementById('delivery_country1').value = place1.address_components[i].long_name;
        }
      }
    }
    });
	
		}
		$(document).ready(function () {
		google.maps.event.addDomListener(window, 'load', initialize);
		});
		initialize();
		});