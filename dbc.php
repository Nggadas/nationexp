<?php
/*************** reCAPTCHA KEYS****************/
$publickey = "6LezFdsSAAAAALaU4K2hqNhWV1V_LBL8-4WanY5W";
$privatekey = "6LezFdsSAAAAAHB52KRhnPlgcXo6kNZvrF6Cqucp";

// recaptcha
// 6LfZGl0UAAAAAGYRHX2MHLhGUQTl7Cvs_GWq9HGU
// Secret key
// 6LfZGl0UAAAAAGamUiX4UFtTn3IywsrWoMKZUbHG
//include_once('config.php');
function filter($connect,$data) {
	$data = trim(htmlentities(strip_tags($data)));

	if (get_magic_quotes_gpc())
		$data = stripslashes($data);
	$data = mysqli_real_escape_string($connect,$data);
	return $data;
}
function EncodeURL($url)
{
$new = strtolower(ereg_replace(' ','_',$url));
return($new);
}
function DecodeURL($url)
{
$new = ucwords(ereg_replace('_',' ',$url));
return($new);
}
function ChopStr($str, $len)
{
    if (strlen($str) < $len)
        return $str;
    $str = substr($str,0,$len);
    if ($spc_pos = strrpos($str," "))
            $str = substr($str,0,$spc_pos);
    return $str . "...";
}
function isEmail($email){
  return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
}
function isUserID($username)
{
	if (preg_match('/^[a-z\d_]{5,20}$/i', $username)) {
		return true;
	} else {
		return false;
	}
 }
function isURL($url)
{
	if (preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $url)) {
		return true;
	} else {
		return false;
	}
}
function checkPwd($x,$y)
{
if(empty($x) || empty($y) ) { return false; }
if (strlen($x) < 6 || strlen($y) < 6) { return false; }
if (strcmp($x,$y) != 0) {
 return false;
 }
return true;
}
function GenPwd($length = 7)
{
  $password = "";
  $possible = "0123456789bcdfghjkmnpqrstvwxyz"; //no vowels
  $i = 0;
  while ($i < $length) {
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    if (!strstr($password, $char)) {
      $password .= $char;
      $i++;
    }
  }
  return $password;
}
function GenKey($length = 7)
{
  $password = "";
  $possible = "0123456789abcdefghijkmnopqrstuvwxyz";
  $i = 0;
  while ($i < $length) {
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    if (!strstr($password, $char)) {
      $password .= $char;
      $i++;
    }
  }
  return $password;
}
// Password and salt generation
function PwdHash($password, $salt = null)
{
    if ($salt === null)     {
        $salt = substr(md5(uniqid(rand(), true)), 0, SALT_LENGTH);
    }
    else     {
        $salt = substr($salt, 0, SALT_LENGTH);
    }
    return $salt . sha1($password . $salt);
}
function checkAdmin() {
if($_SESSION['user_level'] == ADMIN_LEVEL) {
return 1;
} else { return 0 ;
}
}
//Generate invoice no for Buy Order
function GenBuyInvoice($connect) {
		$inv = date("md");
		$inv1=rand(1111,9999);
		$invoice_no="$inv$inv1";
		$sql_invoice = mysqli_query($connect, "SELECT * FROM `dbx-buy-orders` WHERE `invoice_no`='$invoice_no' ORDER BY ID DESC LIMIT 1");
		$row_invoice = mysqli_num_rows($sql_invoice);
		$val_invoice = mysqli_fetch_assoc($sql_invoice);
		$invoice_no_exists = $val_invoice['invoice_no'];
		if($invoice_no_exists!=""){
			$invoice_no = $invoice_no_exists + 1;
		}
	return $invoice_no;
	}
//Generate invoice no for Sell Order
function GenSellInvoice($connect) {
		$inv = date("md");
		$inv1=rand(1111,9999);
		$invoice_no="$inv$inv1";
		$sql_invoice = mysqli_query($connect, "SELECT * FROM `dbx-sell-orders` WHERE `invoice_no`='$invoice_no' ORDER BY ID DESC LIMIT 1");
		$row_invoice = mysqli_num_rows($sql_invoice);
		$val_invoice = mysqli_fetch_assoc($sql_invoice);
		$invoice_no_exists = $val_invoice['invoice_no'];
		if($invoice_no_exists!=""){
			$invoice_no = $invoice_no_exists + 1;
		}
	return $invoice_no;
	}
//Generate account id
function GenRegAcctID($connect) {
		$acct = date("dm");
		$acct1=rand(1111,9999);
		$account_id="$acct$acct1";
		$sql_account = mysqli_query($connect, "SELECT `account_id` FROM `dbx-register` WHERE `account_id`='$account_id' ORDER BY ID DESC LIMIT 1");
		$row_account = mysqli_num_rows($sql_account);
		$val_account = mysqli_fetch_assoc($sql_account);
		$account_id_exists = $val_account['account_id'];
	if($account_id_exists!=""){
			$account_id = $account_id_exists + 1;
		}
	return $account_id;
	}
//Generate captcha id
function GenCaptchaID($connect) {
		$sql_captcha = mysqli_query($connect, "SELECT `captcha_id` FROM `dbx-captcha` ORDER BY ID DESC LIMIT 1");
		$row_captcha = mysqli_num_rows($sql_captcha);
		$val_captcha = mysqli_fetch_assoc($sql_captcha);
		$captcha_id_exists = $val_captcha['captcha_id'];
		if($captcha_id_exists ==""){
		$code = date("dm");
		$code1=rand(1111,9999);
		$captcha_id="$code$code1";
		}
		elseif($captcha_id_exists!=""){
			$captcha_id = $captcha_id_exists + 1;
		}
	return $captcha_id;
	}
//Generate order id for buy order
function GenBuyOrderID($connect) {
		$stringid = '';
		for ($i = 0; $i < 10; $i++) {
			$sto = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$charactersLength = strlen($sto);
			 $pos = rand(0,$charactersLength - 1);
			$stringid .= $sto[$pos];
		}
		$orderid = $stringid;
		$sql_order_id = mysqli_query($connect, "SELECT order_id FROM `dbx-buy-orders` WHERE `order_id`='$orderid' ORDER BY ID DESC");
		$row_order_id = mysqli_num_rows($sql_order_id);
		$val_order_id = mysqli_fetch_assoc($sql_order_id);
		$order_id_exists = $val_order_id['order_id'];
		if($order_id_exists){
			$m = "M";
			$order_id = $orderid . $m;
	return $order_id;
		}else if(!$order_id_exists){
		$order_id = $orderid;
	return $order_id;
		}
	}
//Generate order id for sell order
function GenSellOrderID($connect) {
		$stringid = '';
		for ($i = 0; $i < 10; $i++) {
			$sto = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$charactersLength = strlen($sto);
			 $pos = rand(0,$charactersLength - 1);
			$stringid .= $sto[$pos];
		}
		$orderid = $stringid;
		$sql_order_id = mysqli_query($connect, "SELECT order_id FROM `dbx-sell-orders` WHERE `order_id`='$orderid' ORDER BY ID DESC");
		$row_order_id = mysqli_num_rows($sql_order_id);
		$val_order_id = mysqli_fetch_assoc($sql_order_id);
		$order_id_exists = $val_order_id['order_id'];
		if($order_id_exists){
			$m = "M";
			$order_id = $orderid . $m;
	return $order_id;
		}else if(!$order_id_exists){
		$order_id = $orderid;
	return $order_id;
		}
	}
	//Generate Login ID
function GenuloginID($connect) {
		$sql_login = mysqli_query($connect, "SELECT * FROM `login_details` WHERE `login_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_login = mysqli_num_rows($sql_login);
		$val_login = mysqli_fetch_assoc($sql_login);
		$login_exists = $val_login['login_id'];
		if($login_exists ==""){
		$lg = date("dm");
		$lg1=rand(1111,9999);
		$ulogin_id="$lg$lg1";
		}
		elseif($login_exists!=""){
			$ulogin_id = $login_exists + 1;
		}
	return $ulogin_id;
	}
	//Generate Admin Login ID
function GenaloginID($connect) {
		$sql_admin_login = mysqli_query($connect, "SELECT * FROM `admin_login_details` WHERE `login_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_admin_login = mysqli_num_rows($sql_admin_login);
		$val_admin_login = mysqli_fetch_assoc($sql_admin_login);
		$login_admin_exists = $val_admin_login['login_id'];
		if($login_admin_exists ==""){
		$lg = date("dm");
		$lg1=rand(1111,9999);
		$alogin_id="$lg$lg1";
		}
		elseif($login_admin_exists!=""){
			$alogin_id = $login_admin_exists + 1;
		}
	return $alogin_id;
	}
//Generate Invalid login ID
function GeniloginID($connect) {
		$sql_ilogin = mysqli_query($connect, "SELECT * FROM `invalid_login` WHERE `login_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_ilogin = mysqli_num_rows($sql_ilogin);
		$val_ilogin = mysqli_fetch_assoc($sql_ilogin);
		$ilogin_exists = $val_ilogin['login_id'];
		if(!$ilogin_exists || $login_exists=''){
		$ilg = date("dm");
		$ilg1=rand(1111,9999);
		$ilogin_id="$ilg$ilg1";
		}
		elseif($ilogin_exists!=""){
			$ilogin_id = $ilogin_exists + 1;
		}
	return $ilogin_id;
	}
//Generate tracking no
function GenBookingNo($connect) {
		$inv = date("dm");
		$inv1=rand(201720,999999);
		$box = "7";
		$booking_no="$box$inv$inv1";
		$sql_invoice = mysqli_query($connect, "SELECT * FROM `delivery_details` WHERE `booking_no`='$booking_no' ORDER BY ID DESC LIMIT 1");
		$row_invoice = mysqli_num_rows($sql_invoice);
		$val_invoice = mysqli_fetch_assoc($sql_invoice);
		$booking_no_exists = $val_invoice['booking_no'];
		if($booking_no_exists!=""){
			$m = "M";
			$booking_no = $booking_no_exists . $m ;
		}
	return $booking_no;
	}
//Generate Message ID
function GenMessageID($connect) {
		$sql_message = mysqli_query($connect, "SELECT * FROM `dbx-messages` WHERE `message_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_message = mysqli_num_rows($sql_message);
		$val_message = mysqli_fetch_assoc($sql_message);
		$message_exists = $val_message['message_id'];
		if(!$message_exists || $message_exists=''){
		$ilg = date("dm");
		$ilg1=rand(1111,9999);
		$message_id="$ilg$ilg1";
		}
		elseif($message_exists!=""){
			$message_id = $message_exists + 1;
		}
	return $message_id;
	}
//Generate token
function GenToken($connect) {
		$stringid = '';
		for ($i = 0; $i < 36; $i++) {
			$sto = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$charactersLength = strlen($sto);
			 $pos = rand(0,$charactersLength - 1);
			$stringid .= $sto[$pos];
		}
		$tokenid = $stringid;
		$sql_tokenid = mysqli_query($connect, "SELECT `tokenid` FROM `dbx-register` WHERE `tokenid`='$tokenid' ORDER BY ID DESC");
		$row_tokenid = mysqli_num_rows($sql_tokenid);
		$val_tokenid = mysqli_fetch_assoc($sql_tokenid);
		$tokenid_exists = $val_tokenid['tokenid'];
		if($tokenid_exists){
			$m = "M";
			$token_id = $tokenid . $m;
	return $token_id;
		}else if(!$tokenid_exists){
		$token_id = $tokenid;
	return $token_id;
		}
	}
//Generate Question ID
function GenQuestionID($connect) {
		$qid = date("md");
		$qid1=rand(1111,9999);
		$question_id="$qid$qid1";
		$sql_question = mysqli_query($connect, "SELECT * FROM `dbx-questions` WHERE `question_id`='$question_id' ORDER BY ID DESC LIMIT 1");
		$row_question = mysqli_num_rows($sql_question);
		$val_question = mysqli_fetch_assoc($sql_question);
		$question_id_exists = $val_question['question_id'];
		if($question_id_exists!=""){
			$question_id = $question_id_exists + 1;
		}
	return $question_id;
	}
	//Generate Settings ID
function GenSettingsID($connect) {
		$sid = date("md");
		$sid1=rand(1111,9999);
		$settings_id="$sid$sid1";
		$sql_sett = mysqli_query($connect, "SELECT * FROM `dbx-settings` WHERE `settings_id`='$settings_id' ORDER BY ID DESC LIMIT 1");
		$row_sett = mysqli_num_rows($sql_sett);
		$val_sett = mysqli_fetch_assoc($sql_sett);
		$s_id_exists = $val_sett['settings_id'];
		if($s_id_exists!=""){
			$settings_id = $s_id_exists + 1;
		}
	return $settings_id;
	}
//Generate Photo ID
function GenPhotoID($connect) {
		$pid = date("md");
		$pid1=rand(1111,9999);
		$photo_id="$pid$pid1";
		$sql_photo = mysqli_query($connect, "SELECT * FROM `dbx-photo` WHERE `photo_id`='$photo_id' ORDER BY ID DESC LIMIT 1");
		$row_photo = mysqli_num_rows($sql_photo);
		$val_photo = mysqli_fetch_assoc($sql_photo);
		$photo_id_exists = $val_question['photo_id'];
		if($photo_id_exists!=""){
			$photo_id = $photo_id_exists + 1;
		}
	return $photo_id;
	}
?>
