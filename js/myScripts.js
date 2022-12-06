function checkPassword()
{
	if(document.getElementById("psw").value!=document.getElementById("confirmpsw").value)
	{
		alert("Password Mismatch!");
		return false;
	}
	else{
		alert("Success!");
		return true;
	}
}