<?php

if(isset($_POST['submit'])){

	$bookingID = json_decode($_POST['invoiceID'], true); 
	var_dump($bookingID);

	foreach ($bookingID as $key => $value) {
			echo $key . "=>" . $value . " ";
	}
}
?>

<html>
<head>
<title>Pass JS array to PHP.</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>

<body>
	<h3>Pass JavaScript array into PHP.</h3>
	<form method="post">
		<input type="hidden" id="invoiceID" name="invoiceID" value=""/>
		<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Create Invoice"/>
	</form>
 	
	<script> 
		var jsarray = new Array();
		jsarray[0] = "Saab";
		jsarray[1] = "Volvo";
		jsarray[2] = "BMW";		 
		 
		$(document).ready(function(){ 
		  $('#submit').click(function(){ // prepare button inserts the JSON string in the hidden element 
		    $('#invoiceID').val(JSON.stringify(jsarray)); 
		  }); 
		}); 
	</script> 
</body>
</html>