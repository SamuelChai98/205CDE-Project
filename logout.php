<!--Logout.php-->
<?php 
	//Clear session details
    session_start();
    session_unset();
    session_abort();
?>