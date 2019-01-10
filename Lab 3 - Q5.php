<?php
// define array
$arrColours = array(0=>"Red", 2=>"Green", 3=>"Blue", 1=>"Yellow", 4=>"White");

echo "<p>";
$strColour = reset($arrColours);
echo "Reset: $strColour <hr>";

$strColour = next($arrColours);
echo "Next: $strColour <hr>";

$strColour = next($arrColours);
echo "Next: $strColour <hr>";

$strColour = reset($arrColours);
echo "Reset: $strColour <hr>";

$strColour = current($arrColours);
echo "Current: $strColour <hr>";

$strColour = end($arrColours);
echo "End: $strColour <hr>";
echo "</p>";
?>
