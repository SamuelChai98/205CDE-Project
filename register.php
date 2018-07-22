<!--Register.php-->
<?php
	//Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	//Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$client_email = $_POST['client_email'];
	$client_pass = $_POST['client_pass'];
	$client_comp = $_POST['client_comp'];
	$client_add1 = $_POST['client_add1'];
	$client_add2 = $_POST['client_add2'];
	$client_add3 = $_POST['client_add3'];
	$client_country = $_POST['client_country'];
	$client_tel = $_POST['client_tel'];
	$hash_pass = hash('sha256', $client_pass); //Hash password
	
	$query = mysqli_query($conn, "select * from `clients` where client_email='" . $client_email . "'");
	$num_rows = mysqli_num_rows($query);
	
	if ($num_rows==0)
	{
		//Insert data into table
		$data = "INSERT INTO clients (user_type, client_email, client_pass, client_comp, client_add1, client_add2, client_add3, client_country, client_tel) VALUES (1, '" . $client_email . "', '" . $hash_pass . "', '" . $client_comp . "', '" . $client_add1 . "', '" . $client_add2 . "', '" . $client_add3 . "', '" . $client_country . "', '" . $client_tel . "')"; 
		$query = mysqli_query($conn,$data);
	}
	else 
	{
		//Notify if username exists
		echo "<script>alert(`Username already exists!`)</script>";
	}
	//Redirect back to login page after registration
	echo "<script>window.location.href = 'login page.php'</script>";
?>