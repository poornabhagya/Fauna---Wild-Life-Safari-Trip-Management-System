<!DOCTYPE html>
<html>
<head>
	<title> Wild-Life Tours </title>
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	
	<div class="menu">
		<img id="logo" src="../images/logo8.png">
			<ul>					
					
					<li><a href="home.php">Home</a></li>
					<li><a href="#">Wildlife Tours</a></li>
					<li><a href="accommodation.php">Accommodation</a></li>
					<li><a href="package.php">Packages</a></li>
					 
					<li><a href="testimonial.php">Testimonials</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>			
					<li>
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
	
	
	
	<img class = "coverPhoto" src = "../images/TourPhoto.png"  />
	
	<h1> Wild-Life Tours </h1>
	<hr>
	
	
	<p>Mostly the safari Jeep tours in National parks are organized and well planned during the times where the animals can be spotted simultaneously. Specially the <b>morning </b> and <b>afternoon </b>safari jeep tours maximizes the observing opportunities of different types of animal species. Also our well educated trustworthy and well experienced safari jeep drivers takes care of everything including ticket purchasing to picnic meal.<br></p>
	<p style="text-indent :4em;"> Safari jeeps are well examined including all the types of essential equipments such as first aid boxes, pop up wibdows etc. And also our well experienced and well knowledgeable drivers will helps you to make your safari incredible and memorial.<br>   </p>
	<p style="text-indent :3em; margin-bottom:70px;"> All our Safari Jeeps are the best of the town. You can choose any type of safari jeep from belove. <b>Toyota Hilux or Toyata Land Cruisers</b> [with several options ]. As a <b>Sri Lanka Tourism Development Authority licensed operator</b>, we do the service in responsible way. </p>
	

	
	<img  src = "../images/yala.png" class="center" style="margin-left:185px;" >
	<img  src = "../images/Udawalawa.png" class="center" >
	<img  src = "../images/sinharaja.png" class="center" >
	
	
	
	<br/>
	<br/>
	
	
	
		<h3 class = "yalaH3" style="text-indent :6em;">Yala National Park </h3> 
		<h3 class = "centerH1" style="text-indent :2em;">Udawalawa National Park </h3>
		<h3 class = "centerH1" style="text-indent :0.1em;">Sinharaja Forest Reserve </h3>
	
	
	
	
	<p class = "pDescription" style="text-indent :2em; margin-left:185px; ">We have planned to offer mainly<br> two tours  on morning and afternoon<br> at Yala National Park. According to<br> your preference. You can  choose one<br> out of those. <b>All game drives in our<br> customized luxury jeeps.<br> Below 3 years kids free of charge</b></p>
	
	
	<p class = "pDescription" style="text-indent :2em;">We have planned to offer mainly<br> two tours  on morning and afternoon.<br> at Udawalawa National Park According<br> to your preference. You can  choose one<br> out of those. <b>All game drives in our<br> customized luxury jeeps.<br> Below 3 years kids free of charge</b></p>
	
	<p class = "pDescription" style="text-indent :2em;">We have planned to offer mainly<br> two tours  on morning and afternoon.<br> at Sinharaja National Park According<br> to your preference. You can  choose one<br> out of those. <b>All game drives in our<br> customized luxury jeeps.<br> Below 3 years kids free of charge</b></p>		
			

	    
		
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