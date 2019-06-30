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
	
	<script>
	$(document).ready(function(){
		$("#modalLoginForm").modal("show");
		setInterval(function(){ $("#modalLoginForm").modal("hide"); }, 3000);
		
	});
	</script>
	
	
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
			<div class="jumbotron">	
				<h1>Welcome	to E-STORE!</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail abd">
						<img src="one.jpg" class="img-responsive" alt="camera1">
							<div class="caption">
								
									<p>4'2 screen snap-dragon processor,1GB RAM,4GB internal memory,rs 500</p>
										<a href="cart.html" class="btn btn-primary form-control">ORDER NOW</a>
							</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail abd">
						<img src="two.jpg" class="img-responsive" alt="camera1">
							<div class="caption">
							<p>4'2 screen snap-dragon processor,1GB RAM,4GB internal memory,rs 500</p>
										<a href="cart.html" class="btn btn-primary form-control">ORDER NOW</a>
							</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail abd">
						<img src="three.jpg" class="img-responsive" alt="camera4">
							<div class="caption">
							<p>4'2 screen snap-dragon processor,1GB RAM,4GB internal memory,rs 500</p>
										<a href="cart.html" class="btn btn-primary form-control">ORDER NOW</a>
							</div>
					</div>
				</div>


				</div>

				
         </div>
         
     </div>
	 
	 		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail abd">
						<img src="seven.jpg" class="img-responsive" alt="watch">
							<div class="caption">
							<p>4'2 screen snap-dragon processor,1GB RAM,4GB internal memory,rs 500</p>
										<a href="cart.html" class="btn btn-primary form-control">ORDER NOW</a>
							</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail abd">
						<img src="eight.jpg" class="img-responsive" alt="watch">
							<div class="caption">
							<p>4'2 screen snap-dragon processor,1GB RAM,4GB internal memory,rs 500</p>
										<a href="cart.html" class="btn btn-primary form-control">ORDER NOW</a>
							</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail abd">
						<img src="six.jpg" class="img-responsive" alt="watch">
							<div class="caption">
							<p>4'2 screen snap-dragon processor,1GB RAM,4GB internal memory,rs 500</p>
										<a href="cart.html" class="btn btn-primary form-control">ORDER NOW</a>
							</div>
					</div>
				</div>


				</div>

				
         </div>
         
     </div>

<?php
		include 'footer1.php';
	?>
		 

</body>
</html>

