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
	include 'navbar2.php'
?>	
	<div class="panel panel-default">
			<div class="panel-body">
		<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>item number</th>
        <th>item name</th>
        <th>price</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Mary</td>
			<td>Total</td>
			<td>Rs.0</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="success.php" class="btn btn-primary form-control">Confirm order</a></td>
		</tr>
     </tbody>
	</table>
	</div>
	</div>
<?php
	include 'footer1.php'
?>	
	
	
</body>
</html>