<?php
/* Program calculates the sum of elements in an array
   using both a "for" loop and a "foreach" statement */

// define array
$nums = [1,2,3,4,5,6,7,8,9,10];

// using the "for" loop

// initialize variables
$y = count ($nums); // count array elements
$x = 0; // holds sum of elements

echo "The number of elements in the array is: ".$y;
echo "<hr>";

for ($i = 0; $i < $y; ++$i)
{
    $x += $nums[$i];
    echo "<hr>";
    echo $x;
}

// output
echo "<hr size=20 noshade>^ The sum of elements (using for loop) is: ".$x;

// using the "foreach" statement

//initialize variables
$x = 0; // holds sum

foreach($nums as $key => $value)
{
    $x += $nums[$key];
    echo "<hr>";
    echo $x;
}

// output
echo "<hr size=30 noshade>^ The sum of elements (using foreach) is: ".$x;
?>
