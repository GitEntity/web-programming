<?php
//define multidimensional array
$arrCars = array(array("Ford","Mazda","Renault","Vauxhall","Toyota"),
				 array("Blue","Black","Red","Green","Red"),
				 array(4,4,2,3,2));
				 
for ($intCount = 0; $intCount < 5; $intCount++)
{
	$strMake = 	   $arrCars[0][$intCount]; // iterate through the 1st array
	$strColour =   $arrCars[1][$intCount]; // iterate through the 2nd array
	$intQuantity = $arrCars[2][$intCount]; // iterate through the 3rd array
	
	// output
	echo "<p>Make: $strMake 
		  <hr> Colour: $strColour 
		  <hr> Quantity: $intQuantity 
		  <hr size=20 noshade></p>";
}
?>