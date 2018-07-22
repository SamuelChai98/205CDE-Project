<?php
	//Define page title
	define('TITLE', 'Customer Maintenance | V Invoicing Systems');
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
							<h2 style="margin-top:-24px; margin-bottom:18px; margin-left: 30px;">Customer Maintenance</h2>
							<!--Search Bar-->
							<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for customer..." title="Type in a name">
							<!--Add Customer Button-->
							<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#addCust">+ Create New</button>
							<!--Modal-->
							<div class="modal fade" id="addCust" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<!--Modal Header-->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h3 class="modal-title">Add Customer</h3>
										</div>
										<div class="modal-body">
											<!--Customer Maintenance Form-->
											<form class="form-horizontal" action="#">
												<div class="form-group">
													<label class="control-label col-sm-3" for="company-name">Company Name:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="company-name" placeholder="Enter company name" name="comp_name" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="customer-name">Customer Name:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="customer-name" placeholder="Enter customer name" name="cust_name" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email">Email:</label>
													<div class="col-sm-9">
														<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="address">Address:</label>
													<div class="col-sm-9">          
														<input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="country">Country:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="country" placeholder="Enter country" name="country" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="telephone">Telephone:</label>
													<div class="col-sm-9">
														<input type="tel" class="form-control" id="telephone" placeholder="Enter telephone no." name="telephone" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="mobile">Mobile:</label>
													<div class="col-sm-9">
														<input type="tel" class="form-control" id="mobile" placeholder="Enter mobile no." name="mobile" required>
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
							<!--Customer Table-->
							<table class="table table-striped table-bordered table-hover" id="searchTable">
								<thead>
									<tr>
										<th>Company</th>
										<th>Address</th>
										<th>Email</th>
										<th>Telephone</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Aemulus Corporation</td>
										<td>1C-06-02 One Precinct, Lengkok Mayang Pasir, 11950 Bayan Baru, Penang.</td>
										<td>enquiry@aemulus.com</td>
										<td>+6042815678</td>
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
										<td>Exabytes Network</td>
										<td>1-18-8, Suntech @ Penang Cybercity, Lintang Mayang Pasir 3, 11950 Bayan Baru, Penang.</td>
										<td>info@exabytes.com</td>
										<td>+6046587968</td>
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
										<td>Integrated Device Technology</td>
										<td>Pintasan Kampung Jawa 1, Kawasan Perindustrian Bayan Lepas, 11900 Bayan Lepas, Penang.</td>
										<td>info@idt.com</td>
										<td>+6046566366</td>
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
										<td>Intradeco</td>
										<td>15-1-25, Medan Kampung Relau, Bayan Lepas, 11900 Bayan Lepas, Penang.</td>
										<td>info@intradeco.com.my</td>
										<td>+6046587007</td>
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
										<td>Zebra Technologies</td>
										<td>Plot 10, Phase 4, Industrial Zone, Bayan Lepas Technoplex, 11900 Bayan Lepas, Penang.</td>
										<td>contact.apac@zebra.com</td>
										<td>+6042820988</td>
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
			
			//Search Bar
			function myFunction() {
				var input, filter, table, tr, td, i;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("searchTable");
				tr = table.getElementsByTagName("tr");
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[0]; //Search first column
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