<!--Customer Header-->
<html>
	<head>
		<link rel="icon" href="img/vlogo.jpg" type="image/jpg" sizes="16x16">
		<title>
			<?php
				//Define page title
				if(defined('TITLE'))
				{
					print TITLE;
				}
				else
				{
					print 'V Invoicing Systems';
				}
			?>
		</title>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
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