


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
        <a href="../adminlogin.php">Admin login</a>
        <a href="../doctorlogin.php">doctors login</a>
        <a  href="../patientlogin.php">Patient Login</a>
        <a class="active" href="../login/login.html">SignUp</a>
    </nav>

</header>

<h2> Sign in/up Form</h2>

<!-- <div class="container">
    <form action="INDEX.php" method="post">
        <h3>GET IN TOUCH</h3>
            <input type="text" id="name" placeholder="Your Name"required>
            <input type="email" name = "test" id="test" placeholder="Email id"required>
            
            <textarea id="massage" rows="4" placeholder="How can help you"></textarea>
            <button onclick="document.location = 'http://localhost:8081/phpmailer/index.php'"> Authentication</button>

    </form>
	</div> -->
	
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="get" >
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			
			<button onclick="document.location = 'http://localhost:8081/phpmailer/index.php'"> Sign up</button>
		</form>
	</div>

	<input type="text" name="name" placeholder="Name" required/>

	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Sign in</h1>
			<span>or use your account</span>
			<input type="email" name="email" placeholder="Email"  required/>
			<input type="password" name = "password" placeholder="Password" required />
			<a href="../forget/login.php">Forgot your password?</a>
			<button name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button  class="ghost" id="signUp" onclick="document.location = 'http://localhost:8081/sec/patient.php'">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="login.js"></script>

