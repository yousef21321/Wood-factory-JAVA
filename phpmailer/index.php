<?php



	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "zeadabdou@gmail.com";
	$mail->Password = "01090258966";
	$mail->Subject = "THE Healers.com 	Website";
	$mail->setFrom('zeadabdou@gmail.com');
	$mail->isHTML(true);
	$mail->addAttachment('img/attachment.png');
	$mail->Body = "<h1>	Here is a new user who entered the system of</h1></br> <h2>  </h2>
	</br><p>To browse our website, click on the link:http://localhost:8081/sec/login/login.php </p>";
	
	$mail->addAddress('zeadabdou@gmail.com');
// 	$mail->addAddress($_GET['test']);
$linkname ='http://localhost:8081/sec/landingpage.php';
// session_start();
// $mail->addAddress($_SESSION['test3']);
if ( $mail->send() ) {

	include'landingpage.php';

//		echo "Email Sent ..Authentication click on </br> https://mail.google.com/mail/u/0/?tab=rm#inbox </br> Succesful !";
	}else{
//	    echo "Message could not be sent. Mailer Error: " ;
	}
	$mail->smtpClose();