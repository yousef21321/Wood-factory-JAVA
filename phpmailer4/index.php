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
	$mail->Username = "y01018025973@gmail.com";
	$mail->Password = "Yousef@12345";
	$mail->Subject = "THE Healers.com 	Website";
	$mail->setFrom('y01018025973@gmail.com');
	$mail->isHTML(true);
	$mail->addAttachment('img/attachment.png');
	$mail->Body = "<h1>	Done payment</h1></br> <h2>t</h2>
	</br><p>Make sure to fill in the blanks
Return from here: http://localhost:8081/sec/patientappointment.php</p>";
	$mail->addAddress('y01018025973@gmail.com');
	if ( $mail->send() ) {
	}else{
		echo "Message could not be sent. Mailer Error: " ;
	}
	$mail->smtpClose();
	include'landingpage.php';
