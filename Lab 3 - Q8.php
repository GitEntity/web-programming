<?php
// define array
$arrColours = array("Red","Green","Blue","Yellow","White",
					"Yellow","Green","Blue","Yellow","Grey",
					"Red","Yellow","Blue","Yellow","White");
					
// iterate through array using "foreach" (array as value)
$intCount = 0;
foreach($arrColours as $strColour)
	echo "<p>".$intCount++." $strColour</p>";
	
echo "<hr>";

/* count occurences of each colour defined in the array
   from question 7 (Red,Green,Blue,Yellow,White)*/
$arrCount = array_count_values($arrColours);

foreach($arrCount as $strColour => $intCount)
	echo "<p>$strColour occurs $intCount times</p>";
?>