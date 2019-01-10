<?php
// prints the odd numbers between 1 and 50
for ($num = 1; $num < 51; $num++)
{
	if (!($num % 2 == 0))
	{
		echo $num."\t\t";
	}
}
?>