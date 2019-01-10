<h1>Please select your favorite color:</h1>
<form action="" method="post">
	<input type="radio" name="color" value="Blue" checked>Blue
	<input type="radio" name="color" value="Green">Green
	<input type="radio" name="color" value="Yellow">Yellow
	<input type="radio" name="color" value="Red">Red
	<br>
	<br>
	<input type="submit" name="Submit">
</form>

<?php
if (isset($_POST["Submit"]))
{
	$color = $_POST["color"];
	echo "<p>Your favorite color is $color</p>";
}
?>