<!-- connect php file -->
<?php

require 'Config.php';


?>



<!DOCTYPE html>
<html>
<head>
	
	<title> Testimonials </title><!-- page title -->
	<link rel="stylesheet" href="../css/testimonialStyle.css"><!-- link css stylesheet -->
	<link rel="stylesheet" href="../css/home.css">
	<meta charset = "UTF = 8">

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
	
	<img class = "coverPhoto" src = "../images/photo1.png" align = center /><!-- set coverImage -->
	<h1> Testimonial </h1><!-- Main Topic -->
	<hr>
	
	<!-- design for php data -->
	<div class="pp">
			
			
	
		<?php 
	
			$sql = "SELECT * FROM review";
			$result = $con->query($sql);
			
			if($result->num_rows>0){
				
				while($row =$result->fetch_assoc()){
					echo"				<h4 style='text-align:left;'><b> ".$row["Reviewer_name"]."</h4></b>";
						
					echo"				<p style='text-indent :4em;'> '".$row["Review"]."'</p><br><hr>";
				}
				
				
				
			}
			
		?>
		
		
		<!-- button for the review -->
		<button type="button" onclick = "location.href = 'addReviews.php'; " class="button">What do you think about us</button>
		
		
		
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