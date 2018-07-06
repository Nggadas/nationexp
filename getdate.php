<?php
date_default_timezone_set('Africa/Lagos');
$date = date("d/M/Y");
$newdate = date("Y-m-d");
$time = date("h:i A");
$ip = getenv("REMOTE_ADDR");
$year = date("Y");

echo ''.$year.'';
?>