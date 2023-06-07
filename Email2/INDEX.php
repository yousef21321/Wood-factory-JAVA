
<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
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
$mail->Subject = "Test email using PHPMailer";
$mail->setFrom('zeadabdou@gmail.com');
$mail->isHTML(true);
$mail->addAttachment('img/attachment.png');
$mail->Body = "<h1>Welcome in website The Healers</h1></br><h2> To enter the site, press حط اللينك بتاع المشروع</h2>  </br> <p>The site has been successfully authenticated</p>";
if ( $mail->send() ) {
echo "Email Sent.... Authentication succeeded";
}else{
echo "Message could not be sent. Mailer Error:yarab " ;
}
//Closing smtp connection
$mail->smtpClose();
?>