<?php
	//Define page title
	define('TITLE', 'Product Maintenance | V Invoicing Systems');
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
							<h2 style="margin-top:-24px; margin-bottom:18px; margin-left: 30px;">Product Maintenance</h2>
							<!--Search Bar-->
							<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for product..." title="Type in a name">
							<!--Add New Product Button-->
							<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#addProd">+ Create New</button>
							<!--Modal-->
							<div class="modal fade" id="addProd" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<!--Modal Header-->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h3 class="modal-title">Add Product</h3>
										</div>
										<div class="modal-body">
											<!--Product Maintenance Form-->
											<form class="form-horizontal" action="#">
												<div class="form-group">
													<label class="control-label col-sm-3" for="product-id">Product ID:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="product-id" placeholder="Enter product ID" name="product-id" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="description">Description:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="description" placeholder="Enter product description" name="description" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="price">Price:</label>
													<div class="col-sm-9">
														<input type="number" class="form-control" id="price" placeholder="Enter price" name="price" required>
													</div>
												</div>
												<!--Modal Footer-->
												<div class="modal-footer">
													<div class="row">
														<div class="col-xs-8"></div>
														<div class="col-xs-2">
															<div class="form-group">        
																<div class="col-sm-offset-2 col-sm-10">
																	<button type="submit" class="btn btn-primary">Submit</button>
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
							<!--Product Table-->
							<table class="table table-striped table-bordered table-hover" id="searchTable">
								<thead>
									<tr>
										<th>Product ID</th>
										<th>Description</th>
										<th>Price</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>21001</td>
										<td>G-Link Wifi Tester</td>
										<td>125.00</td>
										<td>
											<div class="dropdown">
												<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Edit</a></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>21003</td>
										<td>TP-Link Wifi Router</td>
										<td>89.00</td>
										<td>
											<div class="dropdown">
												<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Edit</a></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>21028</td>
										<td>D-Link Wifi Extender</td>
										<td>45.00</td>
										<td>
											<div class="dropdown">
												<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Edit</a></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>21105</td>
										<td>Cisco Switch</td>
										<td>250.00</td>
										<td>
											<div class="dropdown">
												<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Edit</a></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>21120</td>
										<td>Belkin Wifi Antennae</td>
										<td>25.00</td>
										<td>
											<div class="dropdown">
												<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#">Edit</a></li>
													<li><a href="#">Delete</a></li>
												</ul>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<!--Pagination-->
							<div id="footer">
								<div id="page-number">
									<ul class="pagination">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
									</ul>
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
			
			//Search bar
			function myFunction() {
				var input, filter, table, tr, td, i;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("searchTable");
				tr = table.getElementsByTagName("tr");
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[1]; //Search second column
					if (td) {
						if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						}
						else {
							tr[i].style.display = "none";
						}
					}       
				}
			}
			
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