<?php
 include('config.php');
 $ID=$_GET['id'];
 $up = mysqli_query($con,"select * from medicin where M_ID =$ID");
 $data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COnfirm Buying</title>
    <style>
        input{
            display: none;
        }
        .main{
            width:30%;
            padding:20px;
            box-shadow: 8px 8px 10px skyblue;
            margin-top: 70px;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert_card.php" method="post">
                <h2>Do you really want to buy the product</h2>
                <input type="text" name="M_ID" value='<?php echo $data['M_ID']?>'>
                <input type="text" name="M_name" value='<?php echo $data['M_name']?>'>
                <input type="text" name="M_price" value='<?php echo $data['M_price']?>'>
                <button name ="add" type="submit" class='btn btn-warning'>Confirm adding the product to the cart</button>
                <br><br>
                <a href="shop.php">Back to Products page</a>
            </form>
        </div>
    </center>
</body>
</html>