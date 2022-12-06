<?php
	session_start();
	
	
	if(isset($_POST["logoff"]))
	{
		//destroy the session
		session_destroy();
		header("Location:login.php");//redirect to the login page
	}
	else
	{
		header("Location:home.php"); //redirect to the home page
	}
?>