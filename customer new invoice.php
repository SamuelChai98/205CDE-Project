<?php
	//Define page title
	define('TITLE', 'Invoice | V Invoicing Systems');
	include('customer header.php');
?>
			<!--Content-->
			<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<a href="#" id="menu-toggle">
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</a>
							<h2 style="margin-top:-24px; margin-bottom:18px; margin-left: 30px;">New Invoice</h2>
							<!--Invoice Details Input Section-->
							<div id="filter">
								<div class="row">
									<div class="col-xs-12">
										<h3 style="text-indent:30px; margin-bottom:25px;">Invoice #21034</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-2" style="text-align:right">
										<h5><b>Customer:</b></h5>
									</div>
									<div class="col-xs-2">
										<div class="dropdown">
											<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Choose&nbsp;
											<span class="caret"></span></button>&ensp;
											<a href="#">
												<span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#addCust"></span>
											</a>
											<ul class="dropdown-menu">
											  <li><a href="#">Mattel</a></li>
											  <li><a href="#">MAS Cargo</a></li>
											  <li><a href="#">Shell Malaysia</a></li>
											</ul>
										</div>
									</div>
									<form class="form-horizontal" action="#">
										<div class="form-group">
											<label class="control-label col-xs-1" for="date">Date:</label>
											<div class="col-xs-2">
												<input type="text" class="form-control" id="date" placeholder="2018-05-03">
											</div>
											<label class="control-label col-xs-2" for="date">P.O./S.O.:</label>
											<div class="col-xs-2">
												<input type="text" class="form-control" id="purchase-order" placeholder="">
											</div>
										</div>
									</form>
								</div>
								<div class="row">
									<div class="col-xs-2">
										<h5 style="text-align:right;"><b>Currency:</b></h5>
									</div>
									<div class="col-xs-2">
										<div class="dropdown">
											<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">MYR - Malaysia&nbsp;
											<span class="caret"></span></button>
											<ul class="dropdown-menu">
											  <li><a href="#">USD - U.S.A.</a></li>
											  <li><a href="#">RMB - China</a></li>
											  <li><a href="#">SGD - Singapore</a></li>
											</ul>
										</div>
									</div>
									<form class="form-horizontal" action="#">
										<div class="form-group">
											<label class="control-label col-xs-1" for="expiry">Expires:</label>
											<div class="col-xs-2">
												<input type="text" class="form-control" id="expiry" placeholder="2018-06-03">
											</div>
										</div>
									</form>
								</div>
								
								<div class="container">
									<!--Invoice Table Listing-->
									<table class="table table-bordered table-hover" id="myTable">
										<thead>
											<tr class="info">
												<th>Product ID</th>
												<th>Description</th>
												<th>Quantity</th>
												<th>Price</th>
												<th>Tax</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>21001</td>
												<td>G-Link Wifi Tester</td>
												<td>1</td>
												<td>125</td>
												<td>7.50</td>
												<td>132.50</td>
											</tr>
											<tr>
												<td>21003</td>
												<td>TP-Link Wifi Router</td>
												<td>1</td>
												<td>89</td>
												<td>5.34</td>
												<td>94.34</td>
											</tr>		
										</tbody>
									</table>
									<!--Add New Row Button-->
									<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-plus"></span> Add New Row
									</button>
									<h4 style="text-align:right;"><b>Grand Total:</b> RM 226.84</h4>
								</div>
								<div id="save-footer">
									<button type="button" onclick="window.location.href='customer invoice.php'" class="btn btn-primary btn-md" id="save-button">Save</button>
								</div>
							</div>
							<!--Modal-->
							<div class="modal fade" id="addCust" role="dialog">
								<div class="modal-dialog">
									<!-- Modal Content-->
									<div class="modal-content">
										<!--Modal Header-->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h3 class="modal-title">Add Customer</h3>
										</div>
										<div class="modal-body">
											<!--Add Customer Form-->
											<form class="form-horizontal" action="#">
												<div class="form-group">
													<label class="control-label col-sm-3" for="customer-name">Customer Name:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="customer-name" placeholder="Enter customer name" name="customer-name" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="address">Address:</label>
													<div class="col-sm-9">          
														<input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Email:</label>
													<div class="col-sm-9">
														<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="telephone">Telephone:</label>
													<div class="col-sm-9">
														<input type="tel" class="form-control" id="telephone" placeholder="Enter telephone no." name="telephone" required>
													</div>
												</div>
												<!--Modal Footer-->
												<div class="modal-footer">
													<div class="row">
														<div class="col-xs-8"></div>
														<div class="col-xs-2">
															<div class="form-group">        
																<div class="col-sm-offset-2 col-sm-10">
																	<input type="submit" class="btn btn-primary"></input>
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
			$("#menu-toggle").click(function(e) {
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