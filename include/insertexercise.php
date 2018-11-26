<?php
   include('config.php');

$sql="INSERT INTO exercise(exercise,duration,time,date,notes) 
VALUES ('$_POST[exercise]', '$_POST[duration]', '$_POST[time]', '$_POST[date]', '$_POST[notes]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: ../exercise_list.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Exercise Registered Successfully. Thanks";
 ?>