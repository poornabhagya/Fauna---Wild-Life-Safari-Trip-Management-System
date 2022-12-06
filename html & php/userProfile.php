<!DOCTYPE html>
<html>
	<head>
		<!--(a)-->
		<title>User Profile</title>	
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/userProfile.css"> 
	</head>
	
	<body>
		<div class="menu">
		<img id="logo" src="../images/logo8.png">
			<ul>
					
					<li><a href="home.php">Home</a></li>
					<li><a href="tour.php">Wildlife Tours</a></li>
					<li><a href="accommodation.php">Accommodation</a></li>
					<li><a href="package.php">Packages</a></li>
					 
					<li><a href="testimonial.php">testimonials</a></li>
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


<?php

	//link configuration file
	require 'config.php';
	$name = "";
	
	if(isset($_SESSION["userName"]))
	{
		$name = $_SESSION["userName"];
		
		$sql = "SELECT *FROM User where username = '$name'";
		
		if($result=$con->query($sql))
		{
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<div id='profile'>";
?>					
					<form method='post' action="logoff.php">
						<input type="submit" value="Logout" name="logoff" id="btn" >
					</form>
						
<?php				echo "<h1 style='font-size:35px;'>Profile</h1><br>";
					echo "<h2><img src='../images/man.png'><span>User Name: ".$row['UserName']."</span></h2><br>";
					
					echo "<h1 style='font-size:28px;' >User Details</1>";
					echo "<h4>First Name      &emsp;&emsp;        :&emsp; ".$row['FirstName']."</h4>";
					echo "<h4>Last Name       &nbsp;&emsp;&emsp;  :&emsp; ".$row['LastName']."</h4>";
					echo "<h4>Mobile Number   &nbsp;              :&emsp; ".$row['PhoneNumber']."</h4>";	
					echo "<h4>Email Address   &ensp;              :&emsp; ".$row['Email']."</h4>";
					echo "</div>";
					
				}
			}
		}
	}
	else
	{
		header("Location:home.html");
	}
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

	
		
		
</body>
</html>
