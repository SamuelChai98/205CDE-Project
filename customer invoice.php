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
							<h2 style="margin-top:-24px; margin-bottom:18px; margin-left: 30px;">Invoice</h2>
							<!--Filter Section-->
							<div id="filter">
								<div class="row">
									<div class="col-xs-2">
										<h3 style="text-align:right">Filter:</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3">
										<h5 style="text-align:right;"><b>Status:</b></h5>
									</div>
									<div class="col-xs-9">
										<div class="dropdown">
											<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">All Statuses&nbsp; 
											<span class="caret"></span></button>
											<ul class="dropdown-menu">
											  <li><a href="#">All Statuses</a></li>
											  <li><a href="#">Draft</a></li>
											  <li><a href="#">Paid</a></li>
											  <li><a href="#">Partial</a></li>
											  <li><a href="#">Overdue</a></li>
											</ul>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-3">
										<h5 style="text-align:right;"><b>Date:</b></h5>
									</div>
									<div class="col-xs-9">
										<form id="form" name="form" class="form-inline">
											<!--Date Picker-->
											<div class="form-group">
												<input id="startDate" name="startDate" type="text" class="form-control" />
												&nbsp;to&nbsp;
												<input id="endDate" name="endDate" type="text" class="form-control" />
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<!--Search Bar-->
									<input type="text" id="quoInput" onkeyup="myFunction()" placeholder="Search for customer..." title="Type in a name">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<!--Navigiation Tabs-->
									<ul class="nav nav-tabs">
									  <li class="active"><a data-toggle="tab" href="#unpaid">Unpaid</a></li>
									  <li><a data-toggle="tab" href="#draft">Draft</a></li>
									  <li><a data-toggle="tab" href="#all">All Invoices</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<!--Create New Invoice Button-->
									<button type="button" onclick="window.location.href='customer new invoice.php'" class="btn btn-primary btn-md pull-right" id="createNewButton">+ Create New</button>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="tab-content">
										<div id="unpaid" class="tab-pane fade in active">
											<!--Unpaid Table Listing-->
											<table class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Number</th>
														<th>Customer</th>
														<th>Date</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>000004</td>
														<td>Butterworth Motorworks Sdn Bhd</td>
														<td>2018-05-27</td>
														<td>250.00</td>
														<td><span class="label label-danger">Unpaid</span></td>
														<td>
															<div class="dropdown">
																<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu">
																	<li><a href="customer view invoice.php">View/Edit</a></li>
																	<li><a href="#">Print</a></li>
																	<li><a href="#">Duplicate Invoice</a></li>
																	<li><a href="#">Export as PDF</a></li>
																	<li><a href="#">Delete</a></li>
																	<hr style="margin:3px;">
																	<li><a href="#" data-toggle="modal" data-target="#recPayment">Record Payment</a></li>
																</ul>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div id="draft" class="tab-pane fade">
											<!--Draft Table Listing-->
											<table class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Number</th>
														<th>Customer</th>
														<th>Date</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>000005</td>
														<td>Kawloon Networks System Sdn Bhd</td>
														<td>2018-06-02</td>
														<td>128.00</td>
														<td><span class="label label-default">Draft</span></td>
														<td>
															<div class="dropdown">
																<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu">
																	<li><a href="customer view invoice.php">View/Edit</a></li>
																	<li><a href="#">Print</a></li>
																	<li><a href="#">Duplicate Invoice</a></li>
																	<li><a href="#">Export as PDF</a></li>
																	<li><a href="#">Delete</a></li>
																	<hr style="margin:3px;">
																	<li><a href="#" data-toggle="modal" data-target="#recPayment">Record Payment</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>000003</td>
														<td>Instant Auto Spare Parts Sdn Bhd</td>
														<td>2018-05-25</td>
														<td>75.00</td>
														<td><span class="label label-default">Draft</span></td>
														<td>
															<div class="dropdown">
																<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu">
																	<li><a href="customer view invoice.php">View/Edit</a></li>
																	<li><a href="#">Print</a></li>
																	<li><a href="#">Duplicate Invoice</a></li>
																	<li><a href="#">Export as PDF</a></li>
																	<li><a href="#">Delete</a></li>
																	<hr style="margin:3px;">
																	<li><a href="#" data-toggle="modal" data-target="#recPayment">Record Payment</a></li>
																</ul>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div id="all" class="tab-pane fade">
											<!--All Table Listing-->
											<table class="table table-striped table-bordered table-hover" id="searchTable">
												<thead>
													<tr>
														<th>Number</th>
														<th>Customer</th>
														<th>Date</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>000005</td>
														<td>Kawloon Networks System Sdn Bhd</td>
														<td>2018-06-02</td>
														<td>128.00</td>
														<td><span class="label label-default">Draft</span></td>
														<td>
															<div class="dropdown">
																<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu">
																	<li><a href="customer view invoice.php">View/Edit</a></li>
																	<li><a href="#">Print</a></li>
																	<li><a href="#">Duplicate Invoice</a></li>
																	<li><a href="#">Export as PDF</a></li>
																	<li><a href="#">Delete</a></li>
																	<hr style="margin:3px;">
																	<li><a href="#" data-toggle="modal" data-target="#recPayment">Record Payment</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>000004</td>
														<td>Butterworth Motorworks Sdn Bhd</td>
														<td>2018-05-27</td>
														<td>250.00</td>
														<td><span class="label label-danger">Unpaid</span></td>
														<td>
															<div class="dropdown">
																<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu">
																	<li><a href="customer view invoice.php">View/Edit</a></li>
																	<li><a href="#">Print</a></li>
																	<li><a href="#">Duplicate Invoice</a></li>
																	<li><a href="#">Export as PDF</a></li>
																	<li><a href="#">Delete</a></li>
																	<hr style="margin:3px;">
																	<li><a href="#" data-toggle="modal" data-target="#recPayment">Record Payment</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>000003</td>
														<td>Instant Auto Spare Parts Sdn Bhd</td>
														<td>2018-05-25</td>
														<td>75.00</td>
														<td><span class="label label-default">Draft</span></td>
														<td>
															<div class="dropdown">
																<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu">
																	<li><a href="customer view invoice.php">View/Edit</a></li>
																	<li><a href="#">Print</a></li>
																	<li><a href="#">Duplicate Invoice</a></li>
																	<li><a href="#">Export as PDF</a></li>
																	<li><a href="#">Delete</a></li>
																	<hr style="margin:3px;">
																	<li><a href="#" data-toggle="modal" data-target="#recPayment">Record Payment</a></li>
																</ul>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!--Modal-->
							<div class="modal fade" id="recPayment" role="dialog">
								<div class="modal-dialog">
									<!-- Modal Content-->
									<div class="modal-content">
										<!--Modal Header-->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h3 class="modal-title">Record Payment for Invoice</h3>
										</div>
										<div class="modal-body">
											<!--Record Payment Form-->
											<form class="form-horizontal" action="#">
												<div class="form-group">
													<label class="control-label col-sm-3" for="date">Payment Date:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="date" placeholder="2018-05-03" required>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="amount">Amount:</label>
													<div class="col-sm-9">          
														<input type="text" class="form-control" id="amount" placeholder="Enter Amount (RM)" name="amount" required>
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
							<div id="quoFooter">
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
				input = document.getElementById("quoInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("searchTable");
				tr = table.getElementsByTagName("tr");
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[1];
					if (td) {
						if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						} else {
							tr[i].style.display = "none";
						}
					}
				}
			}
			
			//Date picker
			var bindDateRangeValidation = function (f, s, e) {
				if(!(f instanceof jQuery)) {
						console.log("Not passing a jQuery object");
				}
			  
				var jqForm = f,
					startDateId = s,
					endDateId = e;
			  
				var checkDateRange = function (startDate, endDate) {
					var isValid = (startDate != "" && endDate != "") ? startDate <= endDate : true;
					return isValid;
				}

				var bindValidator = function () {
					var bstpValidate = jqForm.data('bootstrapValidator');
					var validateFields = {
						startDate: {
							validators: {
								notEmpty: { 
									message: 'This field is required.' 
								},
								callback: {
									message: 'Start Date must less than or equal to End Date.',
									callback: function (startDate, validator, $field) {
										return checkDateRange(startDate, $('#' + endDateId).val())
									}
								}
							}
						},
						endDate: {
							validators: {
								notEmpty: { 
									message: 'This field is required.' 
								},
								callback: {
									message: 'End Date must greater than or equal to Start Date.',
									callback: function (endDate, validator, $field) {
										return checkDateRange($('#' + startDateId).val(), endDate);
									}
								}
							}
						},
						customize: {
							validators: {
								customize: { 
									message: 'customize.' 
								}
							}
						}
					}
					if (!bstpValidate) {
						jqForm.bootstrapValidator({
							excluded: [':disabled'], 
						})
					}
				  
					jqForm.bootstrapValidator('addField', startDateId, validateFields.startDate);
					jqForm.bootstrapValidator('addField', endDateId, validateFields.endDate);
				  
				};

				var hookValidatorEvt = function () {
					var dateBlur = function (e, bundleDateId, action) {
						jqForm.bootstrapValidator('revalidateField', e.target.id);
					}

					$('#' + startDateId).on("dp.change dp.update blur", function (e) {
						$('#' + endDateId).data("DateTimePicker").setMinDate(e.date);
						dateBlur(e, endDateId);
					});

					$('#' + endDateId).on("dp.change dp.update blur", function (e) {
						$('#' + startDateId).data("DateTimePicker").setMaxDate(e.date);
						dateBlur(e, startDateId);
					});
				}

				bindValidator();
				hookValidatorEvt();
			};


			$(function () {
				var sd = new Date(), ed = new Date();
			  
				$('#startDate').datetimepicker({ 
				  pickTime: false, 
				  format: "YYYY/MM/DD", 
				  defaultDate: sd, 
				  maxDate: ed 
				});
			  
				$('#endDate').datetimepicker({ 
				  pickTime: false, 
				  format: "YYYY/MM/DD", 
				  defaultDate: ed, 
				  minDate: sd 
				});

				//passing 1.jquery form object, 2.start date dom Id, 3.end date dom Id
				bindDateRangeValidation($("#form"), 'startDate', 'endDate');
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
	</body>
</html>