<?php
session_start();
if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"])
{
	echo "Correct code entered.";
	
	// redirect user/do something
	header("Location: http://uoit.ca/");
}
else
{
	// print message and exit script
	die("Wrong code entered.");
}
?>
