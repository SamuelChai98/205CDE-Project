<!--Customer Settings-->
<?php
	//Define page title
	define('TITLE', 'Customer Settings | V Invoicing Systems');
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
							<h2 style="margin-top:-24px; margin-bottom:18px; margin-left: 30px;">Settings</h2>
							<!--Client Settings Form-->
							<form class="form-horizontal" id="clientSettings" action="#">
								<!--Upload Image-->
								<div class="form-group">
									<label class="control-label col-sm-2">Upload Image:</label>
									<div class="input-group col-sm-4">
										<span class="input-group-btn">
											<span class="btn btn-default btn-file" style="margin-left:15px;">
												Browse
												<input type="file" id="client_pic">
											</span>
										</span>
										<input type="text" class="form-control" readonly>
									</div>
									<img id='img-upload' />
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_comp">Company Name:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="client_comp" placeholder="Enter company name" name="client_comp">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_add1">Address Line 1:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="client_add1" placeholder="Enter address line 1" name="client_add1">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_add2">Address Line 2:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="client_add2" placeholder="Enter address line 2" name="client_add2">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_add3">Address Line 3:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="client_add3" placeholder="Enter address line 3" name="client_add3">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_country">Country:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="client_country" placeholder="Enter country" name="client_country">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_email">Email:</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="client_email" placeholder="Enter email" name="client_email">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_pass">New Password:</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="client_pass" placeholder="Enter password" name="client_pass">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_pass2">Confirm Pass:</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="client_pass2" placeholder="Re-enter password" name="client_pass2">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_tel">Telephone:</label>
									<div class="col-sm-9">
										<input type="tel" class="form-control" id="client_tel" placeholder="Enter telephone no." name="client_tel">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="client_web">Website:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="client_web" placeholder="Enter website" name="client_web">
										<input type="hidden" id="clientId" name="clientId" value=""/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="button" onclick="updateClient()" class="btn btn-primary">Update</button>
									</div>
								</div>
							</form>
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
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("menuDisplayed");
			});
			
			//Update client details function
			function updateClient() {
				const pass1 = jQuery('#client_pass').val()
				const pass2 = jQuery('#client_pass2').val()

				if(pass1 === pass2){
					jQuery.ajax({
						method: 'POST',
						url: 'client_settings.php', //Post to client_settings.php
						data: jQuery('#clientSettings').serialize(),
						success: function(res){
							console.log(res)
							alert('Update successful!') //Alert if successful
							getClientList()
						},
						error: function(err){
							console.error(err)
						}
					})
				}
				else{
					alert('Passwords do not match!') //Alert if passwords don't match
				}
			}
			
			//Display form details when ready
			jQuery(document).ready(() => {
				const clientId = sessionStorage.getItem('userId')
				console.log(`id: ${clientId}`)
				jQuery('#clientId').val(clientId)
				jQuery.ajax({
					method: 'POST',
					url: 'get_client_by_id.php', //Post to get_client_by_id.php
					data: "clientId=" + clientId,
					dataType: 'JSON',
					success: (dt) => {
						let result = dt
						console.log(`document ready: ${result}`)
						//Insert data into form
						jQuery('#client_comp').val(result[0])
						jQuery('#client_add1').val(result[1])
						jQuery('#client_add2').val(result[2])
						jQuery('#client_add3').val(result[3])
						jQuery('#client_email').val(result[4])
						jQuery('#client_tel').val(result[5])
						jQuery('#client_country').val(result[6])
						jQuery('#client_web').val(result[7])
					},
					error: (err) => {
						console.log(err)
					}
				})
			})
			
			//Display client details in form
			function getClientList(){
				const clientId = jQuery('#clientId').val()
				console.log(`id: ${clientId}`)
				jQuery('#clientId').val(clientId)
				jQuery.ajax({
					method: 'POST',
					url: 'get_client_by_id.php', //Post to get_client_by_id.php
					data: "clientId=" + clientId,
					dataType: 'JSON',
					success: (dt) => {
						let result = dt
						console.log(`document ready: ${result}`)
						//Insert data into form
						jQuery('#client_comp').val(result[0])
						jQuery('#client_add1').val(result[1])
						jQuery('#client_add2').val(result[2])
						jQuery('#client_add3').val(result[3])
						jQuery('#client_email').val(result[4])
						jQuery('#client_tel').val(result[5])
						jQuery('#client_country').val(result[6])
						jQuery('#client_web').val(result[7])
					},
					error: (err) => {
						console.log(err)
					}
				})
			}

			//Input image into form
			$(document).ready(function () {
				$(document).on('change', '.btn-file :file', function () {
					var input = $(this),
						label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
					input.trigger('fileselect', [label]);
				});

				$('.btn-file :file').on('fileselect', function (event, label) {

					var input = $(this).parents('.input-group').find(':text'),
						log = label;

					if (input.length) {
						input.val(log);
					} else {
						if (log) alert(log);
					}

				});

				function readURL(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();

						reader.onload = function (e) {
							$('#img-upload').attr('src', e.target.result);
						}

						reader.readAsDataURL(input.files[0]);
					}
				}

				$("#imgInp").change(function () {
					readURL(this);
				});
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