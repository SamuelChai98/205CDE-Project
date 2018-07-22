<?php
	//Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	//Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//Create array
	$resultArr = array();
	
	$getQuery = "SELECT client_comp, client_add1, client_add2, client_add3, client_email, client_tel, client_id FROM clients WHERE user_type = 1 ORDER BY client_comp";
	$exe2 = mysqli_query($conn, $getQuery);
	
    while($row = mysqli_fetch_array($exe2)){
		//Insert item into array
		array_push($resultArr, $row['client_comp']);
		array_push($resultArr, $row['client_add1']);
		array_push($resultArr, $row['client_add2']);
		array_push($resultArr, $row['client_add3']);
		array_push($resultArr, $row['client_email']);
		array_push($resultArr, $row['client_tel']);
		array_push($resultArr, $row['client_id']);
	}
	
    echo json_encode($resultArr);
?>