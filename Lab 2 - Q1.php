<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<p>
		<label for="countryName">Country: <label>
		<input type="text" name="countryName" id="countryName"/>
	</p>
	
	<p>
		<input type="submit"/>
	</p>
</form>

<?php
if (isset ($_POST["countryName"]))
	$country = $_POST ["countryName"];

switch ($country)
{
	case "UK":
		echo "The capital of $country is London";
		break;
		
	case "Canada":
		echo "The capital of $country is Ottawa";
		break;
		
	case "Portugal":
		echo "The capital of $country is Lisbon";
		break;
		
	default:
		echo "The capital is unknown or not listed.";
}
?>
