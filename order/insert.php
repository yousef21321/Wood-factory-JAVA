<?php
include('config.php');

if(isset($_POST['upload']))
{
    $NAME=$_POST['M_name'];
    $PRICE=$_POST['M_price'];
    $IMAGE=$_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name     = $_FILES['image']['name'];
    $image_up       = "images/".$image_name;
    $insert = "INSERT INTO medicin (M_name,M_price,image) VALUES ('$NAME','$PRICE','$image_up')";
    mysqli_query($con,$insert);
    if(move_uploaded_file($image_location,'images/'.$image_name))
    {
        echo "<script>alart('UPloded Successfully')</script>";
    }
    else
    {
        echo "<script>alert('Sorry! something went wrong')</script>";
    }
    header('location:Order.php');
}
?>