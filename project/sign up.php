<! DOCTYPE html>
<html>
	<head>
        <title>BOOTSTRAP ASSIGNMENT</title>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	
	
	
	<style>
		.abd
		{
			text-align:center;
			font-size:15px;
		}
		.abc
		{
			
			background-color:black;
			color:white;
			width:100%;
		}
		
	</style>
	</head>
	<body>
	<?php
		include 'navbar1.php';
	?>
	<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-4">
					<div class="thumbnail ">
							<img src="sign.png" class="img-responsive">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="thumbnail ">
						<form method="post" action="registration_script.php">
									
									<div class="form-group">
										<input type:"text" class="form-control" name="name" placeholder="Name" required="true">
									</div>
									<div class="form-group">
										<input type:"text" class="form-control" name="email" placeholder="Email-id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
									</div>
									<div class="form-group">
										<input type:"password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{6,}">
									</div>
									<div class="form-group">
										<input type:"text" class="form-control" name="contact" placeholder="Contact"required="true" pattern=".{10}">
									</div>
									
									
									<div class="form-group">
										<input type:"text" class="form-control" name="city" placeholder="City" required="true">
									</div>
									
									<div class="form-group">
										<input type:"text" class="form-control" name="address"placeholder="Address" required="true">
									</div>
									<button type="submit" name="submit"  class="btn btn-primary">submit</button>
									
									</form>
						</div>
				</div>
			</div>
		</div>
			<?php
		include 'footer1.php';
	?>
	
		
</body>
</html>