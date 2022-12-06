<?php
	// Create connection
	$con = new mysqli("localhost", "root", "" , "wildlife safari trip management system");
	
	
	
	// Check connection
	if($con->connect_error)
	{
		die("<script>alert('Connection failed:')</script>".$con->connect_error);
	}
	echo "<script>alert('Testimonial Page ')</script>";
?>
