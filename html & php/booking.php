<?php
	session_start();
	
	$userName="";
	
	//check if the session variable is available
	if(!isset($_SESSION["userName"]))
	{
		header("Location:login.php"); //redirect to the login page
	}
 
?>

<!DOCTYPE html>

<html>
	<head>

		<title>Booking Details</title>	
		<link rel="stylesheet" href="../css/home.css">
		<link rel="stylesheet" href="../css/booking.css">
		
		<script src = "../js/booking.js"></script> 
		 
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

					<!-- Create Login and User button -->
					<li>
					<?php
						
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
		<div id="cover">
		
		<center><h1>Booking Details</h1>	</center>
	
			<form method="POST" action="bookingSubmit.php">
			
				
				<input id="tour" name="tourName" style="font-size:40px; border:none; color:green; padding-top:25px; padding-bottom:25px; font-weight:bold;" ><br><br>
				
				
				Select Tour Date &emsp;&ensp;&nbsp; : &emsp;&emsp;<input type="date" name="date" required><br><br>
				
				
				Number of Visitors &emsp; :&emsp;&emsp;
				<select id="noOfVisitors" name="noOfVisitors" onchange="getTotal()" required>
				<?php
					for($i=1; $i<=50; $i++) //to add numbers 1 to 50
					{?>
						<option value= <?php echo $i; ?>> <?php echo $i; ?></option> 
				<?php
					}
				?>
				</select>
				<br><br><br>
				
				
				Full Name : <input type="text" name="fullname" required><br>
				
				Address : <input type="text" name="address" required><br>
				
				Country : <input type="text" name="country" required><br>
				
				Email Address : <input type="text" name="email" ><br>
				
				Contact Number : <input type="text" name="phone" required> <br><br><br>
				
				
				<h3><b>Payment Method</b></h3><br>
					
					<input type="radio" class="method" name="method" onclick="getCardDetails()" required>Card Payment<br>
					<input type="text" class="detail" placeholder="Name on card" disabled required><br>
					<input type="text" class="detail" placeholder="Card number" disabled required><br>
					<input type="text" class="detail" placeholder="Expiry date" disabled required><br>
					<input type="text" class="detail" placeholder="CVC" disabled required><br><br><br>
					
					<input type="radio" class="method" name="method" onclick="getCardDetails()" required>Paypal<br>
					<input type="text" class="detail" placeholder="Paypal Address" disabled required><br><br>
				<input type="submit" value="Submit">
			
			</form>
	
		
			<div id="amount">
				<p>Price Per Person&emsp;&emsp;&emsp;&emsp;&emsp;  US $<span id="price"></span></p><br>
				<p id="tamount">Total&emsp;&emsp;&emsp;&emsp;&ensp;        <span id="total" ></span></p>
				
			</div>
		
		</div>
		
		
		
		
		<script>
			var tourname = sessionStorage.getItem("tourName");
			var pricevalue = sessionStorage.getItem("priceValue");
 
			document.getElementById("tour").value = tourname;
			document.getElementById("price").innerHTML = pricevalue;
 
			var resetTour = 0;
			var resetPrice = 0;
		 
			sessionStorage.setItem("tourName", resetTour);
			sessionStorage.setItem("priceValue", resetPrice);
	 
		</script>
		
		
		
	
		
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