<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
	<p>
		<label for="strFirstname">Firstname: </label>
		<input type="text" name="strFirstname" id="strFirstname"/>
	</p>
	
	<p>
		<label for="strSurname">Surname: </label>
		<input type="text" name="strSurname" id="strSurname"/>
	</p>
	
	<p>
		<label for="strUsername">Username: </label>
		<input type="text" name="strUsername" id="strUsername"/>
	</p>
		
	<p>
		<label for="strPassword">Password: </label>
		<input type="password" name="strPassword" id="strPassword"/>
	</p>
	
	<p>
		<input type="submit"/>
	</p>
</form>

<?php
	if (isset($_POST['Submit']))
	{
		$strFirstname=$_POST ["strFirstname"];
		$strSurname=$_POST ["strSurname"];
		$strUsername=$_POST ["strUsername"];
		$strPassword=$_POST ["strPassword"];

		echo "<p>Greetings $strFirstname $strSurname</p>";
		echo "<p>Your username is $Username and your password is $strPassword</p>";
		echo "<p> <hr> End of Lab1-2 Script Processes <hr> </p>";
	}
?>
