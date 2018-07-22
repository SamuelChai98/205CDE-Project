<?php
    //Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	//Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $id = $_POST['clientId'];
	
	//Delete data from table
    $deleteSql = "DELETE FROM clients WHERE client_id = '" . $id . "'";
    $deleteQuery = mysqli_query($conn, $deleteSql); 
?>