<?php
   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
 
    require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

    if (isset($_POST["register"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
 
        $mail = new PHPMailer(true);
 
        try {
            
            $mail->SMTPDebug = 0;
 
            $mail->isSMTP();
             $mail->Host = 'smtp.gmail.com';
 
            $mail->SMTPAuth = true;
 
            $mail->Username = 'zeadabdou@gmail.com';
 
            $mail->Password = '01090258966';
 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 
            $mail->Port = 587;
 
            $mail->setFrom('zeadabdou@gmail.com', 'The Healer.com');
 
            $mail->addAddress($email, $name);
 
            $mail->isHTML(true);
 
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
 
            $mail->Subject = 'Email verification';
            $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
 
            $mail->send();
 
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
 
            $conn = mysqli_connect("localhost:8081", "root", "root", "test");
 
            $sql = "INSERT INTO user(name, email, password, verification_code, email_verified_at) VALUES ('" . $name . "', '" . $email . "', '" . $encrypted_password . "', '" . $verification_code . "', NULL)";
            mysqli_query($conn, $sql);
 
            header("Location: email-verification.php?email=" . $email);
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The healers login-signup</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="login.css">

</head>
<header>


    <img src= "../images/lo.png" class= "logo" >


    <nav class="navbar">
        <a  href="../landingpage.php">home</a>
        <a href="../landingpage.php">prevent</a>
        <a href="../landingpage.php">symptoms</a>
        <a href="../landingpage.php">precautions</a>
        <a href="../landingpage.php">our doctors</a>
        <a class="active" href="../login/login.php">Login/sign Up</a>
    </nav>

</header>
<!-- <form method="POST">
    <input type="email" name="email" placeholder="Enter email" required />
    <input type="submit" name="register" >
</form> -->

<h2> Reset Password</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Confirm your password</h1><br>
			<span>please next time don't miss your pass we aren't kids</span><br>
			<input type="text" name="Otp" placeholder="Otp" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<input type="password" name="Confirmpassword" placeholder="Confirm your Password " required/>
			<button name ="Reset">Reset Pass</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Enter Your Email</h1><br>
			<input type="email" name="email" placeholder="Email" id="Otp"  required/>

			<br>
			<button name="register" Id="signUp">Reset</button>
			<br>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>so your are smart so why you lost the password we don't do that here this time only because you are like my kid</p>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter the Otp which we sent to your email and remember your password next time don't be fool</p>
			</div>
		</div>
	</div>
</div>
<script src="login.js"></script>

