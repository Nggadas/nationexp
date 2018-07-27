<?php


/*************** reCAPTCHA KEYS****************/
$publickey = "6LezFdsSAAAAALaU4K2hqNhWV1V_LBL8-4WanY5W";
$privatekey = "6LezFdsSAAAAAHB52KRhnPlgcXo6kNZvrF6Cqucp";



function filter($data) {
	$data = trim(htmlentities(strip_tags($data)));
	
	if (get_magic_quotes_gpc())
		$data = stripslashes($data);
	
	$data = mysql_real_escape_string($data);
	
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

function GenPwd($length = 8)
{
  $password = "";
  $possible = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?"; //with symbols
  
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
//Generate tracking no	
function GenBookingNo() {
		
		$inv = date("dm");
		$inv1=rand(201720,999999);
		$box = "24x7";
		$booking_no="$box$inv$inv1";
		
		$sql_invoice = mysql_query("SELECT * FROM `delivery_details` WHERE `booking_no`='$booking_no' ORDER BY ID DESC LIMIT 1");
		$row_invoice = mysql_num_rows($sql_invoice);
		$val_invoice = mysql_fetch_assoc($sql_invoice);

		$booking_no_exists = $val_invoice['booking_no'];


		if($booking_no_exists!=""){
			$m = "M";
			$booking_no = $booking_no_exists . $m ;
		}
	return $booking_no;	
	}
//Generate invoice no for Sell Order	
function GenSellInvoice() {
		
		$inv = date("md");
		$inv1=rand(1111,9999);
		$invoice_no="$inv$inv1";
		
		$sql_invoice = mysql_query("SELECT * FROM `dbx-sell-orders` WHERE `invoice_no`='$invoice_no' ORDER BY ID DESC LIMIT 1");
		$row_invoice = mysql_num_rows($sql_invoice);
		$val_invoice = mysql_fetch_assoc($sql_invoice);

		$invoice_no_exists = $val_invoice['invoice_no'];


		if($invoice_no_exists!=""){
			$invoice_no = $invoice_no_exists + 1;
		}
	return $invoice_no;	
	}
	
//Generate account id
function GenRegAcctID() {
		
		$acct = date("dm");
		$acct1=rand(1111,9999);
		
		
		$stringid = '';

		for ($i = 0; $i < 4; $i++) {
			
			$sto = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$charactersLength = strlen($sto);	
			 $pos = rand(0,$charactersLength - 1); 
			$stringid .= $sto[$pos]; 
		}
		$brid = $stringid;
		
		$account_id="$brid$acct$acct1";
	
		$sql_account = mysql_query("SELECT `account_id` FROM `register` WHERE `account_id`='$account_id' ORDER BY ID DESC LIMIT 1");
		$row_account = mysql_num_rows($sql_account);
		$val_account = mysql_fetch_assoc($sql_account);

		$account_id_exists = $val_account['account_id'];
		
	if($account_id_exists!=""){
			$m = "M";
			$account_id = $account_id_exists . $m;
		}
	return $account_id;	
	}		
	
//Generate captcha id
function GenCaptchaID() {
		$sql_captcha = mysql_query("SELECT `captcha_id` FROM `dbx-captcha` ORDER BY ID DESC LIMIT 1");
		$row_captcha = mysql_num_rows($sql_captcha);
		$val_captcha = mysql_fetch_assoc($sql_captcha);

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
function GenBuyOrderID() {
		$stringid = '';

		for ($i = 0; $i < 10; $i++) {
			
			$sto = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$charactersLength = strlen($sto);	
			 $pos = rand(0,$charactersLength - 1); 
			$stringid .= $sto[$pos]; 
		}
		$orderid = $stringid;
		
		$sql_order_id = mysql_query("SELECT order_id FROM `dbx-buy-orders` WHERE `order_id`='$orderid' ORDER BY ID DESC");
		$row_order_id = mysql_num_rows($sql_order_id);
		$val_order_id = mysql_fetch_assoc($sql_order_id);

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
function GenSellOrderID() {
		$stringid = '';

		for ($i = 0; $i < 10; $i++) {
			
			$sto = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$charactersLength = strlen($sto);	
			 $pos = rand(0,$charactersLength - 1); 
			$stringid .= $sto[$pos]; 
		}
		$orderid = $stringid;
		
		$sql_order_id = mysql_query("SELECT order_id FROM `dbx-sell-orders` WHERE `order_id`='$orderid' ORDER BY ID DESC");
		$row_order_id = mysql_num_rows($sql_order_id);
		$val_order_id = mysql_fetch_assoc($sql_order_id);

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
function GenloginID() {
		$sql_login = mysql_query("SELECT * FROM `dbx-login-details` WHERE `login_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_login = mysql_num_rows($sql_login);
		$val_login = mysql_fetch_assoc($sql_login);

		$login_exists = $val_login['login_id'];

		if($login_exists ==""){
		$lg = date("dm");
		$lg1=rand(1111,9999);
		$login_id="$lg$lg1";
		}
		elseif($login_exists!=""){
			$login_id = $login_exists + 1;
		}
	return $login_id;	
	}	
	
//Generate Invalid login ID	
function GeniloginID() {
		$sql_ilogin = mysql_query("SELECT * FROM `dbx-invalid-login` WHERE `login_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_ilogin = mysql_num_rows($sql_ilogin);
		$val_ilogin = mysql_fetch_assoc($sql_ilogin);

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
	
//Generate Message ID
function GenMessageID() {
		$sql_message = mysql_query("SELECT * FROM `dbx-messages` WHERE `message_id`!='' ORDER BY ID DESC LIMIT 1");
		$row_message = mysql_num_rows($sql_message);
		$val_message = mysql_fetch_assoc($sql_message);

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
function GenToken() {
		$stringid = '';

		for ($i = 0; $i < 36; $i++) {
			
			$sto = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$charactersLength = strlen($sto);	
			 $pos = rand(0,$charactersLength - 1); 
			$stringid .= $sto[$pos]; 
		}
		$tokenid = $stringid;
		
		$sql_tokenid = mysql_query("SELECT `tokenid` FROM `dbx-register` WHERE `tokenid`='$tokenid' ORDER BY ID DESC");
		$row_tokenid = mysql_num_rows($sql_tokenid);
		$val_tokenid = mysql_fetch_assoc($sql_tokenid);

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
function GenQuestionID() {
		
		$qid = date("md");
		$qid1=rand(1111,9999);
		$question_id="$qid$qid1";
		
		$sql_question = mysql_query("SELECT * FROM `dbx-questions` WHERE `question_id`='$question_id' ORDER BY ID DESC LIMIT 1");
		$row_question = mysql_num_rows($sql_question);
		$val_question = mysql_fetch_assoc($sql_question);

		$question_id_exists = $val_question['question_id'];


		if($question_id_exists!=""){
			$question_id = $question_id_exists + 1;
		}
	return $question_id;	
	}

	//Generate Settings ID	
function GenSettingsID() {
		
		$sid = date("md");
		$sid1=rand(1111,9999);
		$settings_id="$sid$sid1";
		
		$sql_sett = mysql_query("SELECT * FROM `dbx-settings` WHERE `settings_id`='$settings_id' ORDER BY ID DESC LIMIT 1");
		$row_sett = mysql_num_rows($sql_sett);
		$val_sett = mysql_fetch_assoc($sql_sett);

		$s_id_exists = $val_sett['settings_id'];


		if($s_id_exists!=""){
			$settings_id = $s_id_exists + 1;
		}
	return $settings_id;	
	}	
	
//Generate Photo ID	
function GenPhotoID() {
		
		$pid = date("md");
		$pid1=rand(1111,9999);
		$photo_id="$pid$pid1";
		
		$sql_photo = mysql_query("SELECT * FROM `dbx-photo` WHERE `photo_id`='$photo_id' ORDER BY ID DESC LIMIT 1");
		$row_photo = mysql_num_rows($sql_photo);
		$val_photo = mysql_fetch_assoc($sql_photo);

		$photo_id_exists = $val_question['photo_id'];


		if($photo_id_exists!=""){
			$photo_id = $photo_id_exists + 1;
		}
	return $photo_id;	
	}
?>