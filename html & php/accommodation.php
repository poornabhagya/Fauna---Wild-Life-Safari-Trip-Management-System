<!DOCTYPE html>
<html>
<head>
	<title class="H1"> Accomadation</title>
	<link rel="stylesheet" href="../css/accommodation.css">
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
		
		

<img class = "cover1" src = "../images/ac4.png" width="100% height="500" align = center />
	
	<center><h1 class="Topic"> Accommodation</h1></center>
	<hr>
	<p class= "Description"><b>Safaris are crucial, but where you stay afterward to relax and unwind is just as important,since it enhances your wildlife vacation experience. This can be difficult with so many options available.
This is where our experience comes into play. Before venturing back out into the wild, we'll find the greatest wildlife accomodation in Sri Lanka for you to unwind, relax, or even hibernate in.We propose 
that you stay at one of our selected Tented Safari Camps, Wildlife Lodges, or Hotels in each of Sri Lanka's safari locations, all of which are designed to enhance your wildlife safari experience.
Some of our opulent wildlife hotels will make you feel as if you've never left the wild.However, because we are sensitive to our clients' demands, we have something for everyone,in both the luxury and 
affordable categories.</b></p>
<div class="container1">
 <br><h1 class="NP">Wildlife Accommodation Udawalawe National Park - Sri Lanka</h1></br>
   
   <P class="Description">Big Game Camp Udawalawe, located on the eastern border of Udawalawe National Park and facing a lake, 
   offers tented accommodation with modern amenities such as a private bathroom. The campground is 30 minutes 
   from the park's main entrance and 45 minutes from the Elephant Transit Home. Each fan-cooled tent has raised 
   beds with mattresses, pillows, bed linen, and an adjacent, partitioned bathroom with shower and toilet that can be sealed.
   Towels and free bottled water are given for meals. Safaris, airport transportation, and laundry services are 
   available for an additional fee.</P>

  <div class="row">
  <div class="column">
    <img src="../images/Accoimg1.1.jpg"style="width:100%">
  </div>
  <div class="column">
    <img src="../images/Accoimg1.5.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="../images/Accoimg1.2.jpg" style="width:100%">
  </div>
</div>
   
</div>

<br><h1 class="NP">Wildlife Accommodation Wilpattu National Park - Sri Lanka</h1></br>
   
   <p class="Description">This is favoured by guests seeking relaxing comfort in the natural world. 
   The tent (16'x10.8') has a bedroom and an en-suite bathroom, 
   as well as a private veranda/porch on the exterior.</p>
   <div class="row">
  <div class="column">
    <img src="../images/Accoimg2.jpg"style="width:100%">
  </div>
  <div class="column">
    <img src="../images/Accoimg2.2.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="../images/Accoimg2.1.jpg" style="width:100%">
  </div>
</div>

   
<br><h1 class="NP">Wildlife Accommodation Yala National Park - Sri Lanka</h1></br>
   
   <p class=Description>Set with a touch of luxury, this room offers extra space for those who desire comfort during their stay. 
   A bedroom, sitting space, and en-suite bathroom are included in the large tent (32'x10.8'). 
   Just outside the tent is a tiny veranda space. The entire tent is carpeted from floor to ceiling, 
   including the washroom. The windows are draped with lovely drapes.</p>
   <div class="row">
  <div class="column">
    <img src="../images/Accoimg3.1.jpg"style="width:100%">
  </div>
  <div class="column">
    <img src="../images/Accoimg3.2.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="../images/Accoimg3.3.jpg" style="width:100%">
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
</html>