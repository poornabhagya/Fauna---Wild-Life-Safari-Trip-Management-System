<!DOCTYPE html>
<html>
<head>
	<title>Contact Details</title>
	<link rel ="stylesheet" href="../css/contactus.css">
	<link rel ="stylesheet" href="../css/home.css">
	

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
						
						//check if the session variable is available
						if(isset($_SESSION["userName"]))
						{							
							echo "<a href='userProfile.php' id='signup-btn'>User</a>";																					
						}
						else
						{
							echo "<a href='login.php' id='signup-btn'>LOGIN</a>";
						}
						
					?>
					</li>							
			</ul>
		</div>

<img src="../images/contactUsCover.png" alt="animal images" width="100%" height="20%">

	<h1> Contact Us </h1>
	<hr>
	
	<div class="container">
	  <form method="post" action="inquirysubmit.php" >
		<P><h3>Inquiry</h3></p>

		<br><label for="fname">Full Name*</label></br>
		<input type="text" id="fname" name="Fullname" placeholder="Full Name">

		<br><label for="Cnumber">Contact number*</label></br>
		<input type="text" id="Cnumber" name="contactnumber" placeholder="Contact Number">

		<br><label for="Email">Email*</label></br>
		<input type="text" id="Email" name="Email" placeholder="Email">

		<br><label for="Inquiry">Inquiry*</label></br>
		<textarea id="Inquiry " name="Inquiry" placeholder="Describe your needs" style="height:200px"></textarea>

		<br><input type="Submit" value="Send Message" id="Submitbtn" enable></br>
	</div>
	
	
	<div class="container1">
        
		<h3>Contact Us</h3>
		<p>132,colombo 7,Sri Lanka</p>
		<p>Fauna@gmail.com</p>
		<p>0113234344</p>
		
      
     
	</div>
    
	</form>
	
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