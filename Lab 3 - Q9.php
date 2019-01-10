<?php
// define array
$arrColours = array ("Red","Green","Blue","Yellow","White");

// display original array order
echo "<p>";
foreach($arrColours as $strColour)
	echo "$strColour ";
echo "</p>";

// sort array elements in ascending, alphabetical order (using sort())
sort($arrColours);
echo "<p>";
foreach($arrColours as $strColour)
	echo "$strColour ";
echo "</p>";

// sort array elements in descending, alphabetical order (using rsort())
rsort($arrColours);
echo "<p>";
foreach($arrColours as $strColour)
	echo "$strColour ";
echo "</p>";
?>