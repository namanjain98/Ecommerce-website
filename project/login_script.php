<?php 
	require 'connect.php';
	$email=$_POST['email'];
	$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if(!preg_match($regex_email,$email))
	{
		header('location:index1.php?email_error=enter correct email');
	}
	$password=$_POST['password'];
	if(strlen($password)<6)
	{
		header('location:index1.php?email_error=enter correct password');
	}
	$email=mysqli_real_escape_string($con,$email);
	$password=mysqli_real_escape_string($con,$password);
?>