<? error_reporting(0);
//include("include/config.php");
require_once('swift/lib/swift_required.php');
$email = "info@nationexpress24.com";

$captcha = $_POST['g-not'];

//Watch out for bot
if($captcha){
		  $error = "";

echo $error;

        } 
else if(!$captcha)
        {

if($_POST['message']) {
	
	$sender_name = $_POST['name'];
	$sender_email = $_POST['email'];
	$sender_message = $_POST['message'];
	$sender_subject = $_POST['subject'];
	$sender_phone = $_POST['phone'];
	
				$smtp = "mail.nationexpress24.com";
				$username = "admin@nationexpress24.com";
				$spassword = "Obaiyanu1@";
				$port = "25";			

				
				$subject_temp = "$sender_subject";
					$from_email = "info@nationexpress24.com";
					$full_name = "NationExpress24";
					
        $message_temp = "<h2>Message from $sender_name</h2><hr>
					<p><strong>Name:</strong> $sender_name</p>
					<p><strong>Email:</strong> $sender_email</p>
					<p><strong>Phone:</strong> $sender_phone, $alt_phone</p>
					<p><strong>Message:</strong> $sender_message</p>";
		
		//mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
		//echo 'AAAAAAAAAAAAAAA';
		
		$contenttype_temp = "text/html";
					

				//Create the Transport
				$transport = Swift_SmtpTransport::newInstance($smtp, $port)
				->setUsername($username)
				->setPassword($spassword);

				//Create the Mailer using your created Transport
				$mailer = Swift_Mailer::newInstance($transport);

				//Create a message
				$message = Swift_Message::newInstance()
					  ->setSubject($subject_temp)
				  ->setFrom(array($from_email => $sender_name))
				  ->setReplyTo(array($sender_email => $sender_name))
				  ->setBody($message_temp, $contenttype_temp)
				  ;

				//Send the message
					
				$message->setTo(array($email => $full_name));
					$numSent = $mailer->send($message);
		if($numSent){
		$success = "true";

echo $success;
			}
		}
}
?> 