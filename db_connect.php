<?php 
	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'cc_couriers');
	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>	