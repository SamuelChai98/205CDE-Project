<?php
    session_start();
	//Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	//Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//Create array
	$resultArr = array();
    
    $id = $_POST['clientId'];

	$getQuery = "SELECT client_comp, client_add1, client_add2, client_add3, client_email, client_tel, client_country, client_web FROM clients WHERE client_id = '". $id ."'";
	$exe2 = mysqli_query($conn, $getQuery);
    
	//Insert item into array
    while($row = mysqli_fetch_array($exe2)){
		array_push($resultArr, $row['client_comp']);
		array_push($resultArr, $row['client_add1']);
		array_push($resultArr, $row['client_add2']);
		array_push($resultArr, $row['client_add3']);
		array_push($resultArr, $row['client_email']);
		array_push($resultArr, $row['client_tel']);
		array_push($resultArr, $row['client_country']);
		array_push($resultArr, $row['client_web']);
	}
	
    echo json_encode($resultArr);
?>