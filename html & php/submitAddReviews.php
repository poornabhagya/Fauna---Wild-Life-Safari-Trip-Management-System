<?php

require 'config.php';
//connect php file

$name = $_POST['name'];
$mail = $_POST['mail'];
$review = $_POST['review'];

//insert data
$sql = "INSERT INTO review (Reviewer_name, Reviewer_Email, Review) VALUES ('$name','$mail','$review')"; 
	
//check data added or not
if($con->query($sql)) {
	header("Location:testimonial.php");
}
else{
	echo "<script> alert('ERROR: Could not able to execute the query.')</script>";
	echo $sql;
}

?>
