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
				<div class="col-md-8 col-sm-4">
					<div class="thumbnail ">
						<h3>LIVE SUPPORT</h3>
						<h6>24 hours|7 days a week|365 days a year Live Technical Support</h6>
						<p>‘I am a quick learner with the ability to grasp new responsibilities very quickly.
							Not only does this make me more productive at my work but also enhances my ability
							and show creativity as and when required.If I get hired for this internship,
							I will make every effort to learn all I can  to help the company.
							For me, it will also be a dream come true.if given a chance i would perform
							my work with best of my knowledge and dedication.</p>
					</div>
				</div>
				<div class="col-md-4 col-lg-6">
					<div class="thumbnail ">
						<img src="aboutus.png" class="img-responsive" alt="camera1">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-sm-4">
					<div class="thumbnail ">
						<h3>CONTACT US</h3>
							<form method="post" action="contact_script.php">
									
									<div class="form-group">
										<input type:"text" class="form-control" name="name" placeholder="Name" required="true">
									</div>
									<div class="form-group">
										<input type:"text" class="form-control" name="email" placeholder="Email-id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
									</div>
									<div class="form-group">
										<input type:"text" class="form-control" name="message" placeholder="Message" required="true" >
									</div>
									
									<button type="submit" name="submit"  class="btn btn-primary">submit</button>
									
									</form>
						
					</div>
				</div>
				<div class="col-md-4 col-lg-6">
					<div class="thumbnail ">
						<h4>Company Information:</h4>
						<p>500 lohem Ipsum Doctor sit.</br>
							22-06-1-09 Amet lohem</br>
							USA</br>
							phone:(00) 222 666 444</br>
							fax:(000) 000 00 00 0</br>
							Email-id:abc@gmail.com</br>
							Follow on:Facebook,twitter
						</p>
					</div>
				</div>
			</div>

		</div>
		
	<?php
		include 'footer1.php';
	?>
		 
	</body>
	</html>
