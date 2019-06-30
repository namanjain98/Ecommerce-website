<?php	
	include 'connect.php'
?>
<?php	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$user_registration_query="insert into signup(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
	//die($user_registration_query);
	$user_registration_submit=mysqli_query($con,$user_registration_query)
	or die(mysqli_error($con));
	echo "User successfully inserted";
	header('location:home1.php');
	?>