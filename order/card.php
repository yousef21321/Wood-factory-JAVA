<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربيتي|منتجاتي</title>
    <style>
        h3{
            font-weight:bold;

        }
        main{
            width:40%;
            margin-top:30px;
        }
        table{
            box-shadow:8px 8px 10px skyblue;
        }
        thead{
            background:gray;
            color:black;
            text-align: center;
            
        }
        tbody{
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <h3>YOUR RESERVER PRODUCTS</h3>
    </center>
  <?php
  include('config.php');
  $result =mysqli_query($con,"SELECT * FROM addcard");
  while($row =mysqli_fetch_array($result)){
     echo "
       <center>
       <main>
           <table class='table'>
              <thead>
                  <tr>
                     <th scope='col'>Name product</th>
                     <th scope='col'>Price product</th>
                     <th scope='col'>Delete product</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>$row[name]</td>
                     <td>$row[price]</td>
                     <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>Remove</td>
                     <td><a href='http://localhost:8081/payment/payment.php' class='btn btn-danger'>Payment</td>
                 </tr>
             </tbody>
         </table>
     </main>
 </center>
 
     ";}?>
     <center>
         <a href="shop.php">Back to Products page</a>
     </center>
</body>
</html>