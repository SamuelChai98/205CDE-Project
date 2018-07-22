<?php
    //Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	// Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $comp = $_POST['client_comp'];
    $add1 = $_POST['client_add1'];
    $add2 = $_POST['client_add2'];
    $add3 = $_POST['client_add3'];
    $email = $_POST['client_email'];
    $tel = $_POST['client_tel'];
    $pass = $_POST['client_pass'];
    $country = $_POST['client_country'];
    $web = $_POST['client_web'];
    $id = $_POST['clientId'];
    $hashedPassword = hash('SHA256', $pass); //Hash password

	//Update table in database
    $updateSql = "UPDATE clients SET client_comp = '" . $comp . "', client_add1 = '" . $add1 . "', client_add2 = '" . $add2 . "', ";
    $updateSql .= "client_add3 = '" . $add3 . "', client_email = '" . $email . "', client_tel = '" . $tel . "', client_web = '" . $web . "', client_country = '" . $country . "'";

	//Update password
    if($pass != ""){
        $updateSql .= ", client_pass = '" . $hashedPassword . "'";
    }

    $updateSql .= " WHERE client_id = '" . $id . "'";
    $updateQuery = mysqli_query($conn, $updateSql);
?>