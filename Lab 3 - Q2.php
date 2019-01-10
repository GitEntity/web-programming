<?php
// define multidimensional array
$food = array("fruits" => array("apple","orange","banana"),
			  "vegetables" => array("carrot","tomato","pepper"));
	  
// display number of elements (using count())	  
echo count($food);
echo "<hr>";

// display number of elements (using COUNT_RECURSIVE argument)
echo count($food, COUNT_RECURSIVE);

// print structure of array
echo "<hr>";
print_r ($food);
echo "<hr>";

// retrieve tomato
echo $food["vegetables"][1];

// retrieve orange
echo "<hr>";
echo $food["fruits"][1];
?>
