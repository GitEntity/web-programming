<form action="" method="post">

	<p>	
	<label for="Amount">Amount:</label>
	<input type="number" name="Amount" id="Amount">CAD</input>
	</p><p>
	<label for="interest">Interest Rate:</label>
	<input type="number" name="interest" id="interest">%</input>
	</p><p>
	<label for="time">Duration (Year):</label>
	<input type="number" name="time" id="time">Year</input>
</p>

<p>
	<input type="submit" name="Submit"></input>
</p>
</form>

<?php
// calculates appreciated amount of interest on a deposited amount of 1000 CAD after 5 years
if (isset($_POST["Submit"]))
{
	$interest = $_POST["interest"];
	$amount = $_POST["Amount"];
	$time = $_POST["time"];
	$amount = $amount * (pow(1+ ($interest/100.0),$time));
	
	echo "<br>The appreciated amount 5 years after deposit at $interest % interest will be ".round($amount,2)." CAD";
}
?>