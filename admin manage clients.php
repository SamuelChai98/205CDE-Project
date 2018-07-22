<?php
	//Define page title
	define('TITLE', 'Manage Clients | V Invoicing Systems');
	include('admin header.php');
?>
			<!--Content-->
			<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<a href="#" id="menu-toggle">
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</a>
							<h2 style="margin-top:-24px; margin-bottom: 18px; margin-left: 30px;">Manage Clients</h2>
							<!--Search Bar-->
							<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for company..." title="Type in a name">
							<!--Add Client Button-->
							<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#addClient">+ Create New</button>

							<!--Modal-->
							<div class="modal fade" id="addClient" role="dialog">
								<div class="modal-dialog">
									<!-- Modal Content-->
									<div class="modal-content">
										<!--Modal Header-->
										<div class="modal-header">
											<button type="button" id="addModalClose" class="close" data-dismiss="modal">&times;</button>
											<h3 class="modal-title">Add Client</h3>
										</div>
										<div class="modal-body">
											<!--Add Client Form-->
											<form class="form-horizontal" id="addClientForm" action="#">
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_comp">Company Name:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="client_comp" placeholder="Enter company name" name="client_comp" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_add1">Address Line 1:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="client_add1" placeholder="Enter address line 1" name="client_add1" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_add2">Address Line 2:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="client_add2" placeholder="Enter address line 2" name="client_add2" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_add3">Address Line 3:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="client_add3" placeholder="Enter address line 3" name="client_add3" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_email">Email:</label>
													<div class="col-sm-8">
														<input type="email" class="form-control" id="client_email" placeholder="Enter email" name="client_email" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_pass">Password:</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" id="client_pass" placeholder="Enter password" name="client_pass" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_pass2">Confirm Pass:</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" id="client_pass2" placeholder="Re-enter password" name="client_pass2" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="client_tel">Telephone:</label>
													<div class="col-sm-8">
														<input type="tel" class="form-control" id="client_tel" placeholder="Enter telephone no." name="client_tel" required>
													</div>
												</div>
												<!--Modal Footer-->
												<div class="modal-footer">
													<div class="row">
														<div class="col-xs-8"></div>
														<div class="col-xs-2">
															<div class="form-group">
																<div class="col-sm-offset-2 col-sm-10">
																	<button type="button" name="submitted" onclick="addClient()" class="btn btn-primary">Add</button>
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

							<!--Modal-->
							<div class="modal fade" id="editClient" role="dialog">
								<div class="modal-dialog">
									<!-- Modal Content-->
									<div class="modal-content">
										<!--Modal Header-->
										<div class="modal-header">
											<button type="button" id="modalClose" class="close" data-dismiss="modal">&times;</button>
											<h3 class="modal-title">Edit Client</h3>
										</div>
										<div class="modal-body">
											<!--Edit Client Form-->
											<form class="form-horizontal" id="editClientForm" action="#">
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_comp">Company Name:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="e_client_comp" placeholder="Enter company name" name="e_client_comp">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_add1">Address Line 1:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="e_client_add1" placeholder="Enter address line 1" name="e_client_add1">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_add2">Address Line 2:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="e_client_add2" placeholder="Enter address line 2" name="e_client_add2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_add3">Address Line 3:</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="e_client_add3" placeholder="Enter address line 3" name="e_client_add3">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_email">Email:</label>
													<div class="col-sm-8">
														<input type="email" class="form-control" id="e_client_email" placeholder="Enter email" name="e_client_email">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_pass">New Password:</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" id="e_client_pass" placeholder="Enter password" name="e_client_pass">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_pass2">Confirm Pass:</label>
													<div class="col-sm-8">
														<input type="password" class="form-control" id="e_client_pass2" placeholder="Re-enter password" name="e_client_pass2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="e_client_tel">Telephone:</label>
													<div class="col-sm-8">
														<input type="tel" class="form-control" id="e_client_tel" placeholder="Enter telephone no." name="e_client_tel">
													</div>
												</div>
												<!--Modal Footer-->
												<div class="modal-footer">
													<div class="row">
														<div class="col-xs-8"></div>
														<div class="col-xs-2">
															<div class="form-group">
																<input type='hidden' name='editId' id='editId' value='' />														
																<div class="col-sm-offset-2 col-sm-10">
																	<button type="button" name="submitted" onclick="editClient()" class="btn btn-primary">Edit</button>
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

							<!--Modal-->
							<div class="modal fade" id="deleteClient" role="dialog">
								<div class="modal-dialog">
									<!-- Modal Content-->
									<div class="modal-content">
										<!--Modal Header-->
										<div class="modal-header">
											<button type="button" id="modalClose2" class="close" data-dismiss="modal">&times;</button>
											<h3 class="modal-title">Delete Client</h3>
										</div>
										<div class="modal-body">
											<!--Delete Client Confirmation-->
											<p>Are you sure you want to delete this client?</p>
											<div class="modal-footer" style="margin-bottom: -20px;">
												<div class="row">
													<div class="col-xs-8"></div>
													<div class="col-xs-2">
														<div class="form-group">
															<input type='hidden' name='deleteId' id='deleteId' value='' />
															<div class="col-sm-offset-2 col-sm-10">
																<button type="button" name="submitted" onclick="deleteClient()" class="btn btn-primary">Yes</button>
															</div>
														</div>
													</div>
													<div class="col-xs-2">
														<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!--Client Table-->
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
								<tbody id='clientTable'>
								<!--<tr>
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
									</tr>-->
								</tbody>
							</table>
							<div id="footer">
								<!--Pagination-->
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
			if(type !== '0' && type !== 0) window.location.href= 'login page.php' 
			
			//Sidebar pop-out
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("menuDisplayed");
			});
			
			//Search bar function
			function myFunction() {
				var input, filter, table, tr, td, i;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("searchTable");
				tr = table.getElementsByTagName("tr");
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[0]; //Search in first column
					if (td) {
						if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						} else {
							tr[i].style.display = "none";
						}
					}
				}
			}
			
			//Display client list when ready
			jQuery(document).ready(() => {
				getClientList()
			})
			
			//Display client list in table function
			function getClientList() {
				jQuery.ajax({
					method: 'POST',
					url: 'get_client.php', //Post to get_client.php
					success: (dt) => {
						const result = JSON.parse(dt)
						console.log(`client list: ${result}`)
						let resultTable = document.getElementById('clientTable')
						resultTable.innerHTML = ''

						let client = ''
						//Arrange display of results in table
						for (let i = 0; i < result.length; i += 7) {
							let address = result[i + 1] + ', ' + result[i + 2] + ', ' + result[i + 3]
							client += `<tr><td>` + result[i] + `</td>`
							client += '<td>' + address + '</td>'
							client += '<td>' + result[i + 4] + '</td>'
							client += '<td>' + result[i + 5] + '</td>'
							client +=
								`<td><div class="dropdown"><button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" onclick="getClientById(document.getElementById('${result[i + 6]}'))" data-toggle="modal" data-target="#editClient">Edit</a></li><li><a href="#" onclick="setId(document.getElementById('${result[i + 6]}'))" data-toggle="modal" data-target="#deleteClient">Delete</a></li></ul></div></td>`
							client += `<input type="hidden" id="${ result[i+6] }" /></tr>`
						}
						resultTable.innerHTML = client
					},
					error: (err) => {
						console.log(err)
					}
				})
			}
			
			//Add client function
			function addClient() {
				var status = false;
				jQuery.ajax({
					method: 'POST',
					url: 'passcheck.php', //Post to passcheck.php
					data: jQuery('#addClientForm').serialize(),
					success: (checkStatus) => {
						const chkStatus = JSON.parse(checkStatus)
						console.log(chkStatus)
						//Error checking & validation
						if (chkStatus[0] === '1' && chkStatus[1] === '1') {
							alert(`Username already exists and passwords do not match!`)
							status = false
						} else if (chkStatus[0] === '1' && chkStatus[1] === '0') {
							alert(`Username already exists!`)
							status = false
						} else if (chkStatus[0] === '0' && chkStatus[1] === '1') {
							alert(`Passwords do not match!`)
							status = false
						} else
							status = true
						console.log(`Status: ${status}`)
					},
					error: (err) => {
						console.log(err)
					}
				}).then(() => {
					if (status) {
						jQuery.ajax({
							method: 'POST',
							url: 'add_client.php', //Post to add_client.php
							data: jQuery('#addClientForm').serialize(),
							success: function(dt){
								console.log(dt)
							},
							error: function(err){
								console.error(err)
							}
						}).then(() => {
							jQuery('#addModalClose').click()
							getClientList() //Display client list table
						})	
					}
					else
						getClientList() //Display client list table
				})
			}
			
			//Display client details in Edit Client Form
			function getClientById(elem) {
				let clientId = elem.id
				console.log(`getClientById id: ${clientId}`)
				jQuery.ajax({
					method: 'POST',
					url: 'get_client_by_id.php', //Post to get_client_by_id.php
					data: "clientId=" + clientId,
					dataType: 'JSON',
					success: function(dt) {
						const result = dt
						console.log(result)
						//Insert data into form
						jQuery('#e_client_comp').val(result[0])
						jQuery('#e_client_add1').val(result[1])
						jQuery('#e_client_add2').val(result[2])
						jQuery('#e_client_add3').val(result[3])
						jQuery('#e_client_email').val(result[4])
						jQuery('#e_client_tel').val(result[5])
						jQuery('#editId').val(clientId)
					},
					error: function(err) {
						console.error(err)
					}
				})
			}
			
			//Edit client function
			function editClient() {
				const pass1 = jQuery('#e_client_pass').val()
				const pass2 = jQuery('#e_client_pass2').val()

				if(pass1 === pass2) {
					jQuery.ajax({
						method: 'POST',
						url: 'edit_client_by_id.php', //Post to edit client.php
						data: jQuery('#editClientForm').serialize(),
						success: function() {
							jQuery('#modalClose').click()
							getClientList() //Display client list table
						},
						error: function(err) {
							console.error(err)
						}
					})
				}
				else {
					//Alert if passwords do not match
					alert('Passwords do not match!')
				}
			}

			//Set id for deleteClient function
			function setId(elem) {
				const id = elem.id
				jQuery('#deleteId').val(id)
			}

			//Delete client function
			function deleteClient() {
				const clientId = jQuery('#deleteId').val()
				jQuery.ajax({
					method: 'POST',
					url: 'delete_client_by_id.php', //Post to delete_client_by_id.php
					data: "clientId=" + clientId,
					success: function() {
						jQuery('#modalClose2').click()
						getClientList() //Display client list table
					},
					error: function(err) {
						console.error(err)
					}
				})
			}

			//Logout: clear session
			jQuery('#logout').click((e) => {
				jQuery.ajax({
					url: 'logout.php', //Post to logout.php
					method: 'POST',
					success: () => {
						//Clear session details
						sessionStorage.removeItem('userId')
						sessionStorage.removeItem('userName')
						sessionStorage.clear()
						//Redirect to login page after logout
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