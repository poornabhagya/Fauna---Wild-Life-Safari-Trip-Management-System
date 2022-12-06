<!DOCTYPE html>
<html>
	<head>
		<!--(a)-->
		<title>Tour packages</title>	
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/packages.css">
		<script src="../js/packages.js"></script>
		
	</head>
	
	<body>
		<div class="menu">
		<img id="logo" src="../images/logo8.png">
			<ul>
					
					
					<li><a href="home.php">Home</a></li>
					<li><a href="tour.php">Wildlife Tours</a></li>
					<li><a href="accommodation.php">Accommodation</a></li>
					<li><a href="#">Packages</a></li>
					 
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
		
		<img src="../images/packagesCover.png" id="coverphoto"><br><br>
		
		<h1>PACKAGES</h1>
		<hr><br><br>
		
		
		
			<h2>Yala Safari Packages</h2>
			
			<div class="allpacks">
				<div class="pack">
				  
					<img src="../images/yala1.webp" >
				  
				  <div class="text">
					<h3 class="tourname">Yala 1 day Tour</h3><br>
					<p class="des">One day tour with food and accommodation</p><br>
					<p class="p">US $<span class="price">80</span> PP</p>
					
					<button class="bookBtn" onclick="passTourName('btn1')">Book Now!</button>
				  </div>
				</div>
			
				<div class="pack">
				  
					<img src="../images/yala2.webp" >
				  
				  <div class="text">
					<h3 class="tourname">Yala 2 day Tour</h3><br>
					<p class="des">Two day tour with one night with food and accommodation</p>
					<p class="p">US $<span class="price">130</span> PP</p>
					
					<button class="bookBtn" onclick="passTourName('btn2')">Book Now!</button>
				  </div>
				</div>
				
				<div class="pack">
				  
					<img src="../images/yala3.jpg" >
				  
				  <div class="text">
					<h3 class="tourname">Yala 3 day Tour</h3><br>
					<p class="des">Three day tour with two nights with food and accommodation</p>
					<p class="p">US $<span class="price">180</span> PP</p>
					
					<button class="bookBtn" onclick="passTourName('btn3')">Book Now!</button>
				  </div>
				</div>
			</div>
		
		
		
			<h2>Udawalawa Safari Packages</h2>
			
			<div class="allpacks">
				<div class="pack">
				  
					<img src="../images/uda1.webp" >
				  
				  <div class="text">
					<h3 class="tourname">Udawalawa 1 day Tour</h3><br>
					<p class="des">One day tour with food and accommodation</p><br>
					<p class="p">US $<span class="price">80</span> PP</p>
					
					<button class="bookBtn" onclick="passTourName('btn4')">Book Now!</button>
				  </div>
				</div>
				
				<div class="pack">
				  
					<img src="../images/uda2.jpg" >
	
				  <div class="text">
					<h3 class="tourname">Udawalawa 2 day Tour</h3><br>
					<p class="des">Two day tour with one night with food and accommodation</p>
					<p class="p">US $<span class="price">130</span> PP</p>
					
					<button class="bookBtn" onclick="passTourName('btn5')">Book Now!</button>
				  </div>
				</div>
				
				<div class="pack">
				  
					<img src="../images/uda3.jpg" >
				  
				  <div class="text">
					<h3 class="tourname">Udawalawa 3 day Tour</h3><br>
					<p class="des">Three day tour with two nights with food and accommodation</p>
					<p class="p">US $<span class="price">180</span> PP</p>
					
					<button class="bookBtn" onclick="passTourName('btn6')">Book Now!</button>
				  </div>
				</div>
			</div>
		
		
		<h2>Sinharaja Safari Packages</h2>
		
		<div class="allpacks">
			<div class="pack">
			  
				<img src="../images/sin1.jpg" >
			  
			  <div class="text">
				<h3 class="tourname">Sinharaja 1 day Tour</h3><br>
				<p class="des">One day tour with food and accommodation</p><br>
				<p class="p">US $<span class="price">80</span> PP</p>
				
				<button class="bookBtn" onclick="passTourName('btn7')">Book Now!</button>
			  </div>
			</div>
			
			<div class="pack">
			  
				<img src="../images/sin2.jpg" >
			  
			  <div class="text">
				<h3 class="tourname">Sinharaja 2 day Tour</h3><br>
				<p class="des">Two day tour with one night with food and accommodation</p>
				<p class="p">US $<span class="price">130</span> PP</p>
				
				<button class="bookBtn" onclick="passTourName('btn8')">Book Now!</button>
			  </div>
			</div>
			
			<div class="pack">
			  
				<img src="../images/sin3.jpg" >
			  
			  <div class="text">
				<h3 class="tourname">Sinharaja 3 day Tour</h3><br>
				<p class="des">Three day tour with two nights with food and accommodation</p>
				<p class="p">US $<span class="price">180</span> PP</p>
				
				<button class="bookBtn" onclick="passTourName('btn9')">Book Now!</button>
			  </div>
			</div>
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

	
		
		
</body>
</html>