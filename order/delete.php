<?php

include('config.php');
$ID = $_GET['id'];
mysqli_query($con,"DELETE FROM medicin WHERE M_ID =$ID");
header('location:productts.php');
?>