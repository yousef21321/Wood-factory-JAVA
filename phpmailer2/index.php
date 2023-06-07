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
	$mail->Body = "<h1>	Welcome <br>There Patient in website The Healers ADD Appointment </h1></br> <h2>Approve OR Delete</h2>
	</br><p>appointment look in http://localhost:8081/sec/viewappointment.php</p>";
	$mail->addAddress('zeadabdou@gmail.com');
	if ( $mail->send() ) {
	    include'landingpage.php';
//	    require('C:\xampp\htdocs\sec\landingpge.css');
//	    include'C:\xampp\htdocs\sec\landingpage.js';
//        $ch = curl_init();
//        Curl_setopt($ch, CURLOPT_URL, "http://localhost:8081/sec/patientappointment.php");
//        curl_exec($ch);
        //echo "Email Sent ..Authentication click on </br> https://mail.google.com/mail/u/0/?tab=rm#inbox </br> Succesful !";
	}else{
		echo "Message could not be sent. Mailer Error: " ;
	}
	$mail->smtpClose();