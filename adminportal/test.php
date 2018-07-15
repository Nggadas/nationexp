<?php
if(isset($_POST['submit'])) 
{ 
  $str = json_decode($_POST['str'], true); 
  var_dump($str);

  foreach ($str as $key => $value) {
      echo $key . " " . $value;
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
		<input type="hidden" id="str" name="str" value="" /> 
		<input type="submit" id="btn" name="submit" value="Submit" />
 	</form>
 	
	<script> 
		var jsarray = new Array();
		jsarray[0] = "Saab";
		jsarray[1] = "Volvo";
		jsarray[2] = "BMW";		 
		 
		$(document).ready(function(){ 
		  $('#btn').click(function(){ // prepare button inserts the JSON string in the hidden element 
		    $('#str').val(JSON.stringify(jsarray)); 
		  }); 
		}); 
	</script> 
</body>
</html>