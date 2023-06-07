<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrDeR</title>
    <link rel="stylesheet" href="indix.css">
</head>
<body>
    <center>
        <div style="border-radius:40px" class="main">
            <form  action="insert.php" method="post" enctype="multipart/form-data">
                <h2>UPLOAD MEDICEN</h2>
                <img src ="logo.jpg" alt="logo" width="50%">

                <br><br>
                
                <input type="text" name='M_name' placeholder="Enter Medicine Name">
                <br><br>
                <input type="text" name='M_price'placeholder="Enter price">
                <br><br>
                <input type="file" id="file" name='image' style= 'display:none;'>
                
                <label  style =" border: 1px solid black;
    width: 130px;
    height:30px;
    padding: 5px;
    font-weight: bold;
    font-size: 15px;
    background-color:selver;
    border-radius: 50px;
    transition: all 0.5;
    cursor:pointer;
   " for="file">upload image </label> 
                <button  style =" border: 1px solid black;
    width: 130px;
    height:45px;
    padding: 5px;
    font-weight: bold;
    font-size: 15px;
    background-color:brown;
    border-radius: 50px;
    transition: all 0.5;
    cursor:pointer;
    margin : 15px;" name='upload'> upload </button>
                <br><br><br><br>
                <a href="productts.php">show all products</a>

            </form>
        </div>
    </center>
</body>
</html>