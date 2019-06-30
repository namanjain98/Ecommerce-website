<! DOCTYPE.html>
<html>
<head>
	<title>Products</title>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<style>
		.hello
		{
			color:white;
			font-size:20px;
		}
		.abd
		{
			text-align:center;
			font-size:20px;
		}
		.abc
		{
			text-align:center;
			background-color:black;
			color:white;
		}
	</style>
</head>
<body>
<?php
	include 'navbar2.php';
	?>

				<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="thumbnail ">
						<form>
									
									<div class="form-group">
										<input type:"text" class="form-control" name="old-password" placeholder="OLD-PASSWORD" required="true" pattern=".{6,}" >
									</div>
									<div class="form-group">
										<input type:"text" class="form-control" name="new-password" placeholder="NEW-PASSWORD" required="true" pattern=".{6,}">
									</div>
									<div class="form-group">
										<input type:"text" class="form-control" name="re-type-password" placeholder="RE-TYPE-PASSWORD"required="true" pattern=".{6,}">
									</div>
									
									
									<button type="submit" name="submit"  class="btn btn-primary">submit</button>
									
									</form>
						</div>
				</div>
			</div>
		</div>
<?php
	include 'footer1.php'
	?>
	
</body>
</html>