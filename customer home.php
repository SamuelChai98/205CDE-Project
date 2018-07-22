<html>
	<head>
		<link rel="icon" href="img/vlogo.jpg" type="image/jpg" sizes="16x16">
		<title>Customer Home | V Invoicing Systems</title>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="external css.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<!--Page Header-->
			<div id="header">
				<div class="row">
					<div class="col-xs-11">
						<img src="img/vlogo.jpg" alt="Logo" class="logo">
						<h1 style="color: #e6e6e6; margin-left:128px; margin-top:-45px; margin-bottom:14px;">Invoicing Systems</h1>
					</div>
					<div class="col-xs-1">
						<h4 style="color: #e6e6e6; margin-left:-183px; margin-top:28px;">Grow Your Business Online</h4>
					</div>
				</div>
			</div>
			<!--Logout Bar-->
			<div id="logout">
				<div class="row">
					<div class="col-xs-11"></div>
					<div class="col-xs-1">
						<div id="logout-button">
							<h5 style="color:#ffffff; line-height:35px; text-indent: 20px;" id='custName'>Customer</h5>
							<a href="#">
								<span class="glyphicon glyphicon-off"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--Sidebar-->
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li class="sidebar-brand"><a href="#">Customer Portal</a></li>
					<li><a href="customer home.php">Dashboard</a></li>
					<li><a href="customer quotation.php">Quotation</a></li>
					<li><a href="customer invoice.php">Invoice</a></li>
					<li>
						<a href="#homeSubmenu" data-toggle="collapse">Maintenance</a>
						<ul class="collapse" id="homeSubmenu" style="list-style-type: square;">
							<li><a href="customer maintenance.php">Customers</li>
							<li><a href="customer product maintenance.php">Products</li>
						</ul>
					</li>
					<li><a href="customer settings.php">Settings</a></li>
				</ul>
			</div>
			<!--Content-->
			<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<a href="#" id="menu-toggle">
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</a>
							<h2 style="margin-top:-24px; margin-bottom:18px; margin-left: 30px;">Dashboard</h2>
							<div class="row">
								<!--Bootstrap Cards-->
								<div class="col-xs-3">
									<div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
										<div class="card-header">
											<h4>Customers</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xs-8">
													<h1 class="card-title">15</h1>
													<p class="card-text">No. of customers</p>
												</div>
												<div class="col-xs-4">
													<span class="glyphicon glyphicon-user"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
										<div class="card-header">
											<h4>Sales</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xs-8">
													<h1 class="card-title">50</h1>
													<p class="card-text">No. of sales</p>
												</div>
												<div class="col-xs-4">
													<span class="glyphicon glyphicon-usd"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="card text-white bg-warning mb-3" style="max-width: 30rem;">
										<div class="card-header">
											<h4>Quotations</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xs-8">
													<h1 class="card-title">28</h1>
													<p class="card-text">No. of quotations</p>
												</div>
												<div class="col-xs-4">
													<span class="glyphicon glyphicon-tag"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="card text-white bg-success mb-3" style="max-width: 30rem;">
										<div class="card-header">
											<h4>Invoices</h4>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xs-8">
													<h1 class="card-title">32</h1>
													<p class="card-text">No. of invoices</p>
												</div>
												<div class="col-xs-4">
													<span class="glyphicon glyphicon-list-alt"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			//Session control
			const id = sessionStorage.getItem('userId')
			console.log(`Id: ${id}`)
			if(id === '' || id === null) window.location.href= 'login page.php'
			
			//User type control
			const type = sessionStorage.getItem('userType')
			console.log(`userType: ${type}`)
			if(type !== '1' && type !== 1) window.location.href= 'login page.php' 
			
			//Get username
			jQuery(document).ready(() => {
				const name = sessionStorage.getItem('userName')
			    document.getElementById('custName').innerHTML = name
			})

			//Sidebar pop-out
			$("#menu-toggle").click(function (e) 
			{
				e.preventDefault();
				$("#wrapper").toggleClass("menuDisplayed");
			});

			//Logout: clear session
			jQuery('#logout').click((e) => {
				jQuery.ajax({
					url: 'logout.php',
					method: 'POST',
					success: () => {
						sessionStorage.removeItem('userId')
						sessionStorage.removeItem('userName')
						sessionStorage.clear()
						document.location.href = 'login page.php'
					},
					error: err => {
						console.log(err)
					}
				})
			})
		</script>
	</body>
</html>