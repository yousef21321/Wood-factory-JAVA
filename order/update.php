<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="indix.css">
</head>
<body>
    <?php

    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con,"select * from medicin where M_ID =$ID");
    $data = mysqli_fetch_array($up);
    
   ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>UPDATE YOUR PRODUCTS</h2>
                <input type="text" name='M_ID' value='<?php echo $data['M_ID']?>'>
                <br><br>
                <input type="text" name='M_name' value='<?php echo $data['M_name']?>'>
                <br><br>
                <input type="text" name='M_price' value='<?php echo $data['M_price']?>'>
                <br><br>
                <input type="file" id="file" name='image' style= 'display:none;'>
                
                <label for="file">UPdate image </label> 
                <button name='update' type='submit'> UPdate product</button>
                <br><br><br><br>
                <a href="productts.php">show all products</a>

            </form>
        </div>
    </center>
</body>
</html>