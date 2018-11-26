<?php
   include('config.php');

$sql="INSERT INTO sugar(pressure,sugar,calories,basal,weight,time,date,notes) 
VALUES ('$_POST[pressure]','$_POST[sugar]', '$_POST[calories]', '$_POST[basal]','$_POST[weight]','$_POST[time]','$_POST[date]','$_POST[notes]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: ../sugar_list.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Sugar Level Registered Successfully. Thanks";
 ?>