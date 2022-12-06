function passTourName(button)
{
				
			var tour = document.getElementsByClassName("tourname");
			var btn = document.getElementsByClassName("bookBtn");
			var price = document.getElementsByClassName("price");

			
			if(button == "btn1")
				var t = tour[0].innerHTML;
			
			else if(button == "btn2")
				var t = tour[1].innerHTML;
		
			else if(button == "btn3")
				var t = tour[2].innerHTML;
						
			else if(button == "btn4")
				var t = tour[3].innerHTML;
				
			else if(button == "btn5")
				var t = tour[4].innerHTML;
				
			else if(button == "btn6")
				var t = tour[5].innerHTML;
			
			else if(button == "btn7")
				var t = tour[6].innerHTML;

			else if(button == "btn8")
				var t = tour[7].innerHTML;
			
			else if(button == "btn9")
				var t = tour[8].innerHTML;

			sessionStorage.setItem("tourName",t);
			
	
			
			
			
			if(button == "btn1")
				var p = price[0].innerHTML;
							
			else if(button == "btn2")
				var p = price[1].innerHTML;			
			
			else if(button == "btn3")
				var p = price[2].innerHTML;
									
			else if(button == "btn4")
				var p = price[3].innerHTML;
				
			else if(button == "btn5")
				var p = price[4].innerHTML;
							
			else if(button == "btn6")
				var p = price[5].innerHTML;
					
			else if(button == "btn7")
				var p = price[6].innerHTML;
					
			else if(button == "btn8")
				var p = price[7].innerHTML;			
			
			else if(button == "btn9")
				var p = price[8].innerHTML;			
			
			
			sessionStorage.setItem("priceValue",p);
			
					
			window.location.href="booking.php";	
}		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			