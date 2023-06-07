
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-9">
    <title>Contact From Email Using JavaScript</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">
    <form action="INDEX.php" method="post">
        <h3>GET IN TOUCH</h3>
            <input type="text" id="name" placeholder="Your Name"required>
            <input type="email" id="email" placeholder="Email id"required>
            
            <textarea id="massage" rows="4" placeholder="How can help you"></textarea>
            <button onclick="document.location = 'http://localhost/phpmailer/'"> Authentication</button>

    </form>
    <form action="register.php"method="POST">
        <input type="text" name="name" placeholder="Enter name" required />
        <input type="email" name="email" placeholder="Enter email" required />
        <input type="password" name="password" placeholder="Enter password" required />
     
        <input type="submit" name="register" value="Register">
    </form>
</div>
</body>
</html>