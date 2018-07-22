<?php
    //Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	// Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $comp = $_POST['e_client_comp'];
    $add1 = $_POST['e_client_add1'];
    $add2 = $_POST['e_client_add2'];
    $add3 = $_POST['e_client_add3'];
    $email = $_POST['e_client_email'];
    $tel = $_POST['e_client_tel'];
    $pass = $_POST['e_client_pass'];
    $id = $_POST['editId'];
    $hashedPassword = hash('SHA256', $pass); //Hash password

	//Update table in database
    $updateSql = "UPDATE clients SET client_comp = '" . $comp . "', client_add1 = '" . $add1 ."', client_add2 = '" . $add2 . "', ";
    $updateSql .= "client_add3 = '" . $add3 . "', client_email = '" . $email . "', client_tel = '" . $tel . "'";
	
	//Update password
    if($pass != ""){
        $updateSql .= ", client_pass = '" . $hashedPassword . "'";
    }

    $updateSql .= " WHERE client_id = '" . $id . "'";
    $updateQuery = mysqli_query($conn, $updateSql);
?>