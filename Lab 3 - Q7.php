<?php
// initialize array
$arrColours = array(0=>"Red",2=>"Green",3=>"Blue",5=>"",1=>"Yellow",4=>"White");

// iterate through array using "foreach" (array as value)
$intCount = 0;
foreach($arrColours as $strColour)
	echo "<p>".$intCount++." $strColour</p>";
	
echo "<hr>";

// iterate through array using "foreach" (array as key => value)
foreach($arrColours as $intKey => $strColour)
	echo "<p>$intKey $strColour</p>";
?>