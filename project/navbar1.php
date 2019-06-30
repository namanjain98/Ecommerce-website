
	
		<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-STORE</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href=""  data-toggle="modal" data-target="#modalLoginForm"><span class="glyphicon glyphicon-log-in"></span> Login</a>
			<!--<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					
						<div class="modal-content">
							<div class="modal-header">
							
										<h4 class="modal-title">LOGIN</h4>
							</div>
							<div class="modal-body">
									<p>do you have a account? <a href="register.php">Register</p>
									<div class="panel panel-default">
												<div class="panel-body">
														<div class="container">
															<div class="row">
																<div class="col-xs-4">
																	<form method="post" action="login_script.php">
																		<div class="form-group">
																			<input type:"text" class="form-control"  placeholder="Enter email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
																			
									
																		</div>
																		<div class="form-group">
																			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
																		</div>
																		<a href="index1.php" class="btn btn-primary form-control">Login</a>
																	</form>
																</div>
															</div>
															
														</div>
												</div>		
									</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
      
				</div>
			</div>-->
			<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" method="post" action="login_script.php">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body mx-3">
					<div class="md-form mb-5">
					  <i class="fas fa-envelope prefix grey-text"></i>
					  <input type="email" id="defaultForm-email" class="form-control validate">
					  <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
					</div>

					<div class="md-form mb-4">
					  <i class="fas fa-lock prefix grey-text"></i>
					  <input type="password" id="defaultForm-pass" class="form-control validate">
					  <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
					</div>

				  </div>
				  <div class="modal-footer d-flex justify-content-center">
					<button type="submit" name="submit"  class="btn btn-primary">login</button>
					</div>
				</div>
			</div>
		</div>


		</li>
	  
	  <li><a href="about.php" ><span class="glyphicon glyphicon-user"></span>ABOUT US</a></li>
		<li><a href="contact.php" ><span class="glyphicon glyphicon-credit-card"></span>CONTACT US</a></li>
				
    </ul>
  </div>
</nav>





	 


</body>
</html>
