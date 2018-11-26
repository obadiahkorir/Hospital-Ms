<?php
  include('config.php');

$sql="INSERT INTO appointments(date,diabets_type,time,names,email,tel) 
VALUES ('$_POST[dates]','$_POST[db_type]','$_POST[times]','$_POST[name]','$_POST[email]','$_POST[phone]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: viewTourist.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Tourist Registered Successfully. Thanks";
 ?>