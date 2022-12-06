function getTotal()
{
	var p = document.getElementById("price").innerHTML;
	var v = document.getElementById("noOfVisitors").value;
	
	var t = v * p;
	
	document.getElementById("total").innerHTML = "US $"+t;
	

}

function getCardDetails()
{
	var Method = document.getElementsByClassName("method");
	var Detail = document.getElementsByClassName("detail");
	
	if(Method[0].checked)
	{
		for(var i=0; i<4; i++){
			Detail[i].disabled = false;
		}
	}
	else
	{
		for(var i=0; i<4; i++){
			Detail[i].disabled = true;
		}
	}		
	
	
	
	if(Method[1].checked)
	{
		Detail[4].disabled = false;
	}
	else
		Detail[4].disabled = true;
}

 