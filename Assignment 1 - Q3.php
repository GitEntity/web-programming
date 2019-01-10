<h3>Please select your favorite color:</h3>
<form action="" method="post">
	<input type="checkbox" name="b" value="Blue" checked>Blue
	<input type="checkbox" name="g" value="Green">Green
	<input type="checkbox" name="y" value="Yellow">Yellow
	<input type="checkbox" name="r" value="Red">Red
	<br>
	<br>
	<input type="submit" name="Submit">
</form>

<?php
/* determine which colors were selected
   (individual control structures needed for multiple selection)
*/
if (isset($_POST["Submit"]))
{
	echo "<p>Your favorite color(s) are </p>";
	if (isset($_POST["b"]))
	{
		$b = $_POST["b"];
		echo "<p>$b</p>";
	}
	if (isset($_POST["g"]))
	{
		$g = $_POST["g"];
		echo "<p>$g</p>";
	}
	if (isset($_POST["y"]))
	{
		$y = $_POST["y"];
		echo "<p>$y</p>";
	}
	if (isset($_POST["r"]))
	{
		$r = $_POST["r"];
		echo "<p>$r</p>";
	}
}
?>