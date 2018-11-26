<?php
include('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=  mysqli_query($bd,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if(!$query)
{
     die("could not execute query");
}
     else{

	echo "<script>alert('Successfully Registered. You can login now');</script>";
	header('location:user-login.php');
}
}
