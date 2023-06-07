<?php
 include ('config.php');
 if(isset($_POST['add'])){
     $NAME=$_POST['M_name'];
     $PRICE=$_POST['M_price'];
     $insert="INSERT INTO addcard (name,price) VALUES ('$NAME','$PRICE')";
     mysqli_query($con,$insert);
     header('location:card.php');
 }
?>