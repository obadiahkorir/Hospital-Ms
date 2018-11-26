<?php
   include('config.php');

$sql="INSERT INTO medication(medicine,dose,amount,time,date,notes) 
VALUES ('$_POST[medicine]', '$_POST[dose]', '$_POST[amount]', '$_POST[time]', '$_POST[date]', '$_POST[notes]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: ../medicine_list.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Medication Registered Successfully. Thanks";
 ?>