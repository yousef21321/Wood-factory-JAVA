<?php
include('config.php');

if(isset($_POST['update']))
{
    $ID=$_POST['M_ID'];
    $NAME=$_POST['M_name'];
    $PRICE=$_POST['M_price'];
    $IMAGE=$_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name     = $_FILES['image']['name'];
    $image_up       = "images/".$image_name;
    $update ="UPDATE medicin SET M_name='$NAME' ,M_price='$PRICE' , image='$image_up' WHERE M_ID=$ID";
    mysqli_query($con,$update);

    if(move_uploaded_file($image_location,'images/'.$image_name))
    {
        echo "<script>alart('UPdated Successfully')</script>";
    }
    else
    {
        echo "<script>alert('Sorry! something went wrong')</script>";
    }
    header('location:Order.php');
}
?>