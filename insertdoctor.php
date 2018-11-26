<?php
   include('include/config.php');

$sql="INSERT INTO doctors(name,age,gender,specilization,id_no,hospital) 
VALUES ('$_POST[name]', '$_POST[age]', '$_POST[gender]', '$_POST[specs]', '$_POST[id]', '$_POST[hosi]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: doctors_list.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Doctor Registered Successfully. Thanks";
 ?>