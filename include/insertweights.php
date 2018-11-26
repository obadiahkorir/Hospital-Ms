<?php
   include('config.php');

$sql="INSERT INTO weight(weight,time,date,notes) 
VALUES ('$_POST[weight]','$_POST[time]', '$_POST[date]', '$_POST[notes]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: ../weights_list.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Weight Registered Successfully. Thanks";
 ?>