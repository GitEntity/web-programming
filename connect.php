<?php
//connect.php
$server = 'localhost:3306';
$username   = 'root';
$password   = '';
$database   = 'forum';
 
	if(!mysql_connect($server, $username,  $password))
	{
		exit('Error: could not establish database connection');
	}
	if(!mysql_select_db($database))
	{
		exit('Error: could not select the database');
	}
?>