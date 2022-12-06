<!DOCTYPE html>
<html>
<head>
	
	<title>Review US </title><!-- page title -->
	<link rel="stylesheet" href="../css/reviewUsStyle.css"><!-- link css stylesheet -->
	<link rel="stylesheet" href="../css/home.css"><!-- link css stylesheet -->

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


	<img class = "coverPhoto" src = "../images/photo4.png" align = center /><!-- coverImage -->
	<h1> Review Us </h1><!-- Main Topic -->
	<hr>
	
	
	<div class="container">
		<!-- Form for get reviews from customer -->
		<form  method = "POST" action = "submitAddReviews.php" >
		<div class="row">
			<div class="col-25">
				<label for="name">Name</label>
			</div>
			<div class="col-75">
			<input type="text"  name="name" placeholder="Your name.."required>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-25">
				<label for="email">E-mail</label>
			</div>
			<div class="col-75">
				<input type="text"  name="mail" placeholder="Your e-mail address.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
			</div>
		</div>
  
		
		
		<div class="row">
			<div class="col-25">
				<label for="review">Review Us</label>
			</div>
			<div class="col-75">
				<textarea  name="review" placeholder="Type your review here.." style="height:200px"required></textarea>
			</div>
		</div>
		
		<br>
		
		<div class="row">
			<input type="submit" value="Submit"><!-- submit reviews -->
		</div>
		</form>
	</div>
	
	
	
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