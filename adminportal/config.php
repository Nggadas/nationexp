<?php
	$connect = mysqli_connect("localhost","root","","nationex_smartzip");
	if (!$connect) {
		die("Connection failed: " . mysqli_connect_error());
	}

	ini_set('allow_url_fopen',1);

	date_default_timezone_set('Africa/Lagos');
	$date = date("d M Y");
	$date1 = date("d/m/Y");
	$newdate = date("Y-m-d");
	$time = date("h:i A");
	$ip = getenv("REMOTE_ADDR");
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	//$J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip");
	//$ip_country = $J7->geoplugin_countryName ; // Country

	// $ch = curl_init();

	// curl_setopt($ch,CURLOPT_URL,"http://www.geoplugin.net/xml.gp?ip=$ip");
	// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

	// $output = curl_exec($ch);

	// curl_close($ch);

	// $J7 = simplexml_load_string($output);
	// $ip_country = $J7->geoplugin_countryName ; // Country


	$timeout = 1800; // Number of seconds until it times out.

	// Check if the timeout field exists.
	if(isset($_SESSION['timeout'])) {
		// See if the number of seconds since the last
		// visit is larger than the timeout period.
		$duration = time() - (int)$_SESSION['timeout'];
		if($duration > $timeout) {
			// Destroy the session and restart it.
			session_destroy();
			session_start();
		}
	}

	// Update the timout field with the current time.
	$_SESSION['timeout'] = time();

	function protect(){

        // make sure user is logged in
        if(empty($_SESSION['id'])){
			session_start();
			session_unset();
			session_destroy();
            header("Location: ../login.html");
		}

        // make sure user is admin
        if (!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "false") {
            header("Location: ../");
        }

		// $connect = mysqli_connect("localhost","root","","nationex_smartzip");
		
		// if($_SESSION['id']==""){
		// 	unset($_SESSION);
		// 	unset($_COOKIE);
		// 	@session_destroy();
		// 	header("location:../");
		// }

		// if($_SESSION['id']!=""){
		// 	$session_id = $_SESSION['id'];
		// 	$session_email = $_SESSION['email'];
		// 	$session_title = $_SESSION['title'];
		// 	$session_account_id = $_SESSION['admin_id'];

		// 	$query_session = mysqli_query($connect,"SELECT * FROM `smart_admin` WHERE `email`='$session_email' AND `admin_id`='$session_account_id' order by id DESC LIMIT 1");
		// 	$row_session = mysqli_num_rows($query_session);
		// 	$val_session = mysqli_fetch_assoc($query_session);

		// 	$myacct = $val_session['admin_id'];

		// 	if(!$myacct)
		// 	{
		// 		unset($_SESSION);
		// 		unset($_COOKIE);
		// 		@session_destroy();
		// 		header("Location: ../login.html");
		// 	}
		// }

	}

?>
