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
							<h2 style="margin-top:-24px; margin-bottom:18px; margin-left: 30px;">Invoice #21034&nbsp;
							<span class="label label-danger" id="status">Overdue</span>
							<span id="linkQues"><a href="customer new invoice.php">Create New Invoice?</a></span></h2>
							<div class="row">
								<div class="col-xs-12" style="text-align:right">
									<button type="button" class="btn btn-default" style="margin-right:2px;">Edit</button>&nbsp;
									<div id="send">
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-right:-2px;">Send&nbsp; 
										<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">via Email</a></li>
												<li><a href="#">Export as PDF</a></li>
											</ul>&nbsp;
									</div>
									<div id="more">
										<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">More&nbsp; 
										<span class="caret"></span></button>
											<ul class="dropdown-menu dropdown-menu-right" style="text-align:right">
												<li><a href="#">Print</a></li>
												<li><a href="#">Duplicate Invoice</a></li>
												<li><a href="#">Delete</a></li>
												<hr style="margin:3px">
												<li><a href="#" data-toggle="modal" data-target="#recPayment">Record Payment</a></li>
											</ul>
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
							<!--Invoice Details-->
							<div id="quotation">
								<div class="row">
									<div class="col-xs-1"></div>
									<div class="col-xs-5">
										<img src="img/veeco-logo.png"
										style="margin-top:53px;">
									</div>
									<div class="col-xs-5">
										<div id="quoAddress">
											<h2>INVOICE</h2>
											<p><b>VeecoTech Web & Ecommerce</b></p>
											<p>1-1-9, Suntech @ Penang Cybercity,<br>
											Lintang Mayang Pasir 3,<br>
											11950 Bayan Baru, Penang<br>
											Malaysia</p>
											<p>Phone: 012-900 6648<br>
											www.veecotech.com.my</p>	
										</div>
									</div>
								</div>
								<hr style="border-width:1px; border-style:inset;">
								<div class="row">
									<div class="col-xs-2"></div>
									<div class="col-xs-3">
										<h4>BILL TO</h4>
										<p>Alain Lye<br>
										alain.lye@gmail.com</p>
									</div>
									<div class="col-xs-4" style="text-align:right">										
										<p><b>Invoice No:</b></p>
										<p><b>Invoice Date:</b></p>
										<p><b>Payment Due:</b></p>
										<p><b>Grand Total (MYR):</b></p>
									</div>
									<div class="col-xs-3">											
										<p>21034</p>
										<p>December 24, 2018</p>
										<p>April 24, 2018</p>
										<p>RM 566.04</p>
									</div>
									<div class="col-xs-1"></div>
								</div>
								<br>
								<div class="container">
									<!--Invoice Table Listing-->
									<table class="table table-bordered table-hover" id="quoTable">
										<thead>
											<tr class="info">
												<th>Product</th>
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
											<tr>
												<td>21028</td>
												<td>D-Link Wifi Extender</td>
												<td>1</td>
												<td>45</td>
												<td>2.70</td>
												<td>47.70</td>
											</tr>
											<tr>
												<td>21105</td>
												<td>Cisco Switch</td>
												<td>1</td>
												<td>250</td>
												<td>15.00</td>
												<td>265.00</td>
											</tr>
											<tr>
												<td>21120</td>
												<td>Belkin Wifi Antennae</td>
												<td>1</td>
												<td>25</td>
												<td>1.50</td>
												<td>26.50</td>
											</tr>
										</tbody>
									</table>
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