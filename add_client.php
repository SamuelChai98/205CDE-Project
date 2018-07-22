<?php
	//Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	//Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//Retrieve user data from form
	$client_comp = $_POST['client_comp'];
	$client_add1 = $_POST['client_add1'];
	$client_add2 = $_POST['client_add2'];
	$client_add3 = $_POST['client_add3'];
	$client_email = $_POST['client_email'];
	$client_pass = $_POST['client_pass'];
	$client_tel = $_POST['client_tel'];
	$hash_pass = hash('sha256', $client_pass);
	
	//Create array
	$resultArr = array();
	
	//Add user data to database
	$insertQuery = "INSERT INTO clients (user_type, client_comp, client_add1, client_add2, client_add3, client_email, client_pass, client_tel) VALUES (1, '" . $client_comp . "', '" . $client_add1 . "', '" . $client_add2 . "', '" . $client_add3 . "', '" . $client_email . "', '" . $hash_pass . "', '" . $client_tel . "')";
	$exe = mysqli_query($conn, $insertQuery);
?>