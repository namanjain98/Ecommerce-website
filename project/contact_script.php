<?php	
	include 'connect.php'
?>
<?php	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$user_registration_query="insert into contact(name,email,message) values('$name','$email','$message')";
	//die($user_registration_query);
	$user_registration_submit=mysqli_query($con,$user_registration_query)
	or die(mysqli_error($con));
	echo "User successfully inserted";
	header('location:index1.php');
	?>