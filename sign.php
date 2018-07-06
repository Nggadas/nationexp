<?php
session_start();
require_once "vendor/autoload.php";
$connect = mysqli_connect("127.0.0.1","root","","nationex_smartzip") or die("Connection Not Set Up");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$confirmpass = $_POST['confirmpass'];
$recap = $_POST['recap'];
$pattern = '/[^A-Za-z0-9]+/';
date_default_timezone_set('Africa/Lagos');
$date = date("d M Y");
$time = date('g:i A');
$newDate = date("Y-m-d");
$title = "standard";
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];

$json_data = file_get_contents("http://apinotes.com/ipaddress/ip.php?ip=$ip");
$ip_data = json_decode($json_data, TRUE);
$country = $ip_data['country_name'];


$query_phone = mysqli_query($connect, "SELECT * FROM `register` WHERE `phone_no` = '$phoneno' ORDER BY ID DESC LIMIT 1");
$row_phone = mysqli_num_rows($query_phone);
$val_phone = mysqli_fetch_assoc($query_phone);

$phone = $val_phone['phone_no'];

if ($fname == '' || $lname == '' || $phoneno == '' || $email == '' || $pass == '' || $confirmpass == '') {
  echo 'Please fill all the fields!';
} elseif (strlen($phoneno) < 11 || strlen($phoneno) > 11) {
  echo "Phone Number must be 11 characters";// code...
}elseif (strlen($pass) < 8) {
  echo "Password must be 8 characters or more!";
}elseif (!(preg_match($pattern, $pass))) {
  echo "Password must be alphanumeric";
}
 elseif ($pass != $confirmpass) {
  echo 'Your passwords does not match!';
}elseif (!$recap) {
  echo 'Please check the captcha box below!';

}elseif ($phone == $phoneno) {
    echo ("The user account already exist");
  }else {
    $characters = 'ABCDEFHJKLMNPQRSTUVWXYZ';
    $pin = mt_rand(1000,99999).$characters[rand(0,strlen($characters)-3)];
    $user_id = str_shuffle($pin);


    $mail = new PHPMailer;

    //From email address and name
    $mail->From = "info@betaexchangeng.com";
    $mail->FromName = "NationExpress24";

    //To address and name
    $mail->addAddress($email, $fname);
    $mail->addAddress($email); //Recipient name is optional

    //Address to which recipient will reply
    $mail->addReplyTo("noreply@nationexpress24.com", "Reply");

    //CC and BCC
    $mail->addCC("cc@example.com");
    $mail->addBCC("bcc@example.com");

    //Send HTML or Plain Text email
    $mail->isSMTP(true);

    $mail->Subject = "NationExpress24";
    $mail->Body = "<i>Thanks for signing up! This is your verification code: .$user_id .</i>";
    $mail->AltBody = "This is the plain text version of the email content";

    $mail->send();

    // $characters='ABCDEFHJKLMNPQRSTUVWXYZ';
    //  $pin=mt_rand(100000,999999).mt_rand(100000,999999).$characters[rand(0,strlen($characters)-3)];
    //  $ref_no=str_shuffle($pin);

    $sqln = "INSERT INTO `register` (`title`, `account_id`, `first_name`, `sur_name`, `phone_no`, `email`, `password`, `newdate`, `date`, `time`, `ip`, `ip_country`, `user_agent`) VALUES ('".$title."', '".$user_id."', '".$fname."', '".$lname."', '".$phoneno."', '".$email."', '".$pass."', '".$newDate."', '".$date."', '".$time."', '".$ip."', '".$country."', '".$agent."')";
    $rsN = mysqli_query($connect, $sqln) or die("Errorn : ".mysqli_error());

    echo "success";

  }
?>
