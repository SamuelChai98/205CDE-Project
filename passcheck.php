<?php
	//Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	//Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	
    //Create array
    $problems = array();
	
    $client_email = $_POST['client_email'];
	
    $query = mysqli_query($conn,"select * from `clients` where client_email='" . $client_email . "'");
    $num_rows = mysqli_num_rows($query);
    
	//Check if username exists
	if ($num_rows>0)
    {
        array_push($problems, '1');
    }
    else
	{
        array_push($problems, '0');
    }

	//Check if password exists
    if($_POST['client_pass'] != $_POST['client_pass2'])
    {
        array_push($problems, '1');
    }
    else
	{
        array_push($problems, '0');
    }

    echo json_encode($problems); 
?>