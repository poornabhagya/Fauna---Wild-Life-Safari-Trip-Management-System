<!DOCTYPE html>
<html>
	<head>
		<!--(a)-->
		<title>Booking Submitted</title>	
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/inquirySubmit.css">
		
	</head>
	
	<body>
		<div class="menu">
		<img id="logo" src="../images/logo8.png">
			<ul>
					
					<li><a href="home.php">Home</a></li>
					<li><a href="tour.php">Wildlife Tours</a></li>
					<li><a href="accommodation.php">Accommodation</a></li>
					<li><a href="package.php">Packages</a></li>
					 
					<li><a href="testimonial.php">Testimonials</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>			
					<li>
					<?php
						session_start();
						
						if(isset($_SESSION["userName"]))
						{							
							echo "<a href='userProfile.php' id='signup-btn'>User</a>";																					
						}
						else
						{
							echo "<a href='login.html' id='signup-btn'>LOGIN</a>";
						}
						
					?>
					</li>	
			</ul>
		</div>


<?php
	require 'config.php';
	
	$fname = $_POST["Fullname"];
	$cno = $_POST["contactnumber"];
	$email = $_POST["Email"];
	$msg = $_POST["Inquiry"];

	//insert data
	$sql = "INSERT INTO Inquiry(FullName,ContactNumber,Email,Message)VALUES('$fname','$cno','$email','$msg')";
	
	//check data added or not
	if($con->query($sql))
	{
?>
		<center>
		<div  id="inquiry" >
<?php
			echo "<center><h2 style='font-size:35px;'>Inquiry</h2></center><br>";
			echo "<h4>Full Name  :  ".$fname."</h4>";
			echo "<h4>Contact Number  :  ".$cno."</h4>";
			echo "<h4>Email   :  ".$email."</h4>";
			echo "<h4>Inquiry   :  ".$msg."</h4><br>";
 
			echo "<center><h2 style='font-size:20px; color:lightgreen;'>Your inquiry successfully submitted. We will contact you soon</h2></center>";
	 
		echo "</div>";
		echo "</center>";
	}
	else
	{
		echo "Error: ".$con->error;
	}
	
	$con->close();
?>

		<footer>
			<img id="logo" src="../images/logo8.png">
			<h3> <img src="../images/mail.jpg"> faunasafarisrilanka@gmail.com</h3>
			<h3> <img src="../images/phone.png"> +94 (0)773 479 723</h3>
			<h3> <img src="../images/address.png"> 873/2, Debarawewa, Tissamaharama, Sri Lanka.</h3>
			<hr>
			<p align="center">©Copyright 2022. FAUNA Safari. All Rights Reserved </p>
			
		</footer> 
		
	</body>	


</html>