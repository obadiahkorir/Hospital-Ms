<?php
   include('config.php');

$sql="INSERT INTO bloodpressure(date,systolic,time,diastolic,pulse,type,notes) 
VALUES ('$_POST[date]', '$_POST[systolic]', '$_POST[time]', '$_POST[diastolic]', '$_POST[pulse]', '$_POST[type]', '$_POST[notes]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location:../blood_list.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Blood Pressure Registered Successfully. Thanks";
 ?>