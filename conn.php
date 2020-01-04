<?php
	$conn = new mysqli("localhost", "root", "", "tourist");
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>