<?php
// define array
$arrColours = array(0=>"Red", 2=>"Green", 3=>"Blue", 1=>"Yellow", 4=>"White");

// count number of elements
$intSize = count($arrColours);

echo "<p>";
for($intCount = 0; $intCount < $intSize; $intCount++)
	echo $arrColours[$intCount]." ";
echo "</p>";

// replace Blue for Purple
echo "<p>";
for($intCount = 0; $intCount < $intSize; $intCount++)
{
	if ($arrColours[$intCount] == "Blue")
		$arrColours[$intCount] = "Purple";
		
	echo $arrColours[$intCount]." ";
}
echo "</p>";
?>