<!DOCTYPE html>
<html>
	<head>
		<!--(a)-->
		<title>Booking Submitted</title>	
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/bookingSubmit.css">
		
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
							echo "<a href='login.html' id='signup-btn'>LOGIN</a>";
						}
						
					?>
					</li>	
			</ul>
		</div>


<?php
	require 'config.php';
	
	$tour = $_POST["tourName"];
	$Tdate = $_POST["date"];
	$Visitors = $_POST["noOfVisitors"];
	$Cname = $_POST["fullname"];
	$Caddress = $_POST["address"];
	$Ccontry = $_POST["country"];
	$Cemail = $_POST["email"];
	$Cphone = $_POST["phone"];
	
	$sql = "INSERT INTO Booking(TourPackage,TourDate,NoOfVisitors,Name,Address,Country,EmailAddress,PhoneNumber)VALUES('$tour','$Tdate',$Visitors,'$Cname','$Caddress','$Ccontry','$Cemail','$Cphone')";
	
	if($con->query($sql))
	{
?>
		<center>
		<div  id="bookingDetails" >
<?php
			echo "<center><h2 style='font-size:30px; text-align:left;'>Booking Details</h2></center><br>";
			echo "<h4>Tour Package        &nbsp;&nbsp;&emsp;&emsp;&emsp;  :  ".$tour."</h4>";
			echo "<h4>Tour Date           &ensp; <span>                   :  ".$Tdate."</h&ensp;&nbsp;4>";
			echo "<h4>Number of Visitors  &emsp;                          :  ".$Visitors."</h4>";
			echo "<h4>Full Name           &nbsp; <span>                   :  ".$Cname."</h4>";
			echo "<h4>Address             &emsp; <span>                   :  ".$Caddress."</h4>";
			echo "<h4>Country             &emsp; <span>                   :  ".$Ccontry."</h4>";
			echo "<h4>Email               &emsp;&emsp;&nbsp; <span>             :  ".$Cemail."</h4>";
			echo "<h4>Phone Number        &emsp;&emsp;&ensp;&nbsp;             :  ".$Cphone."</h4><br>";
			echo "<center><h2>Booking details successfully submitted</h2></center>";
			echo "<center><h2>Thank You!</h2></center>";
		echo "</div>";
		echo "</center>";
	}
	else{
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







