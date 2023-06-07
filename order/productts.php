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
    <title>PRoDuCt</title>
    <link rel="stylesheet" href="indix.css">
    <style>
        h3{
            font-weight:bold;
        }
        .card{
            float:right;
            margin-top: 20px;
            margin-left: 1px;
            margin-right: 70px;
        }
        .card img{
            width: 100%;
            height: 160px;
        }
        main{
            width: 60%%;
        }
    </style>
</head>
<body>
    <center>
        <h3>Admin Control Panal</h3>
    </center>
    <?php
      include('config.php');
      $result= mysqli_query($con,"SELECT * FROM medicin");
      while($row = mysqli_fetch_array($result)){
          echo"
            <center>
              <main>
                <div class='card' style='width: 18rem;'>
                <img src='$row[image]' class='card-img-top'>
                   <div class='card-body'>
                     <h5 class='card-title'>$row[M_name]</h5>
                     <p class='card-text'>$row[M_price]</p>
                     <a href='delete.php? id=$row[M_ID]' class='btn btn-danger'>DELETE</a>
                     <a href='update.php? id=$row[M_ID]' class='btn btn-primary'>UPDATE</a>
                 </div>
             </div>
           </main>
         </center>
          ";
      }
    ?>

    
    
</body>
</html>