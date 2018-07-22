<!--Login Page-->
<html>
	<head>
		<link rel="icon" href="img/vlogo.jpg" type="image/jpg" sizes="16x16">
		<title>Login Page | V Invoicing Systems</title>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-2"></div>
				<div class="col-xs-8" style="width:600px; margin-left:90px; margin-top:80px;">
					<div class="jumbotron">
						<div class="form-group" style="margin-top:-50px;">
							<img src="img/vlogo.jpg" alt="Logo" class="logo" 
							style="height:120px; width:120px; margin-left:25px; margin-top:80px;">
							<h1 style="margin-left:180px; margin-top:-128px;">Invoicing Systems</h1>
						</div>
						<hr>
						<!--Login Form-->
						<form class="form-horizontal" style="margin-left:2px; margin-top:40px;" action="login.php" method="post">
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="email" class="form-control" name="login_email" placeholder="Enter Email..." required>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" class="form-control" name="login_pass" placeholder="Enter Password..." required>
							</div>
							<div class="checkbox" style="margin-top:-5px; margin-left:-12px;">
								<label><input type="checkbox"> Remember me</label>
							</div>
							<button type="submit" class="btn btn-primary" style="width:430px; margin-left:8px; margin-top:30px;">Login</button>
							<div class="form-group" style="margin-top:20px;">
								<a href="#" data-toggle="modal" data-target="#register" style="margin-left:196px;">Register now</a>
							</div>
						</form>
						
						<!--Modal-->
						<div class="modal fade" id="register" role="dialog">
							<div class="modal-dialog">
								<!-- Modal Content-->
								<div class="modal-content">
									<!--Modal Header-->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3 class="modal-title">Registration</h3>
									</div>
									<div class="modal-body">
										<!--Registration Form-->
										<form class="form-horizontal" action="register.php" method="post">
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_email">Email (username):</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="client_email" placeholder="Enter email" name="client_email" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_pass">Password:</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" id="client_pass" placeholder="Enter password" name="client_pass" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_pass2">Confirm Password:</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" id="client_pass2" placeholder="Re-enter password" name="client_pass2" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_comp">Company Name:</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" id="client_comp" placeholder="Enter company name" name="client_comp" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_add1">Address Line 1:</label>
												<div class="col-sm-8">          
													<input type="text" class="form-control" id="client_add1" placeholder="Enter address line 1" name="client_add1" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_add2">Address Line 2:</label>
												<div class="col-sm-8">          
													<input type="text" class="form-control" id="client_add2" placeholder="Enter address line 2" name="client_add2" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_add3">Address Line 3:</label>
												<div class="col-sm-8">          
													<input type="text" class="form-control" id="client_add3" placeholder="Enter address line 3" name="client_add3" required> 
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" for="client_tel">Telephone:</label>
												<div class="col-sm-8">
													<input type="tel" class="form-control" id="client_tel" placeholder="Enter telephone no." name="client_tel" required>
												</div>
											</div>
											<!--Modal Footer-->
											<div class="modal-footer" style="margin-bottom: -40px;">
												<div class="row">
													<div class="col-xs-8"></div>
													<div class="col-xs-2">
														<div class="form-group">        
															<div class="col-sm-offset-2 col-sm-10">
																<input type="submit" name="submitted" onclick="check()" class="btn btn-primary"></input>
															</div>
														</div>
													</div>
													<div class="col-xs-2">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
        </div>
        <script>
			//Confirm password match
			function check() {
				const pass1 = jQuery('#client_pass').val()
				const pass2 = jQuery('#client_pass2').val()
            	if ( pass1 !== pass2 )
					alert('Passwords do not match!')	
			}
        </script>
	</body>
</html>