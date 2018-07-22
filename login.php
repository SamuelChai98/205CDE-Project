<!--Login.php-->
<?php
	session_start();
	//Establish connection to database
	$conn = mysqli_connect("localhost","root","","invoicing system");
 
	//Check connection
	if (mysqli_connect_errno())
	{	
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$login_email = $_POST['login_email'];
	$login_pass = $_POST['login_pass'];
	$hash_pass = hash('sha256', $login_pass); //Hash password
	
	$query = mysqli_query($conn,"select * from clients where client_email='" . $login_email . "' and client_pass='" . $hash_pass . "'");
	$num_rows = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	
	if ($num_rows==1)
	{
		//Store session details
		echo "<script>sessionStorage.setItem('userId', '". $row['client_id'] ."')</script>";
		echo "<script>sessionStorage.setItem('userName', '". $row['client_email'] ."')</script>";
		echo "<script>sessionStorage.setItem('userType', '". $row['user_type'] ."')</script>";
		$_SESSION['userId'] = $row['client_id'];
		
		//Customer login to customer home
		if ($row[user_type]==1)
		{
			echo "<script>alert(`Login successful!`)</script>";
			echo "<script>window.location.href = 'customer home.php'</script>";
		}
		//Admin login to admin home
		else if ($row[user_type]==0)
		{
			echo "<script>alert(`Successfully login as Admin!`)</script>";
			echo "<script>window.location.href = 'admin home.php'</script>";
		}
	}
	//Redirect to login page if failed
	else
	{
		echo "<script>window.location.href = 'login page.php'</script>";
	}
?>