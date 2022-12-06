<?php

// PHP program to separate odd-even indexed
// elements of an array

// input array
$input = array(4, 3, 6, 5, 8, 7, 2);

// comparator function to filter odd elements
function oddCmp($input)
{
	return ($input & 1);
}
function evenCmp($input)
{
	return !($input & 1);
}

// filter odd-index elements
$odd = array_filter($input, "oddCmp");

$even = array_filter($input, "evenCmp");

// re-index odd array by use of array_values()
$odd = array_values(array_filter($odd));

$even = array_values(array_filter($even));

// print odd-indexed array
print"Odd array :\n";
print_r($odd);

// print even-indexed array
print"\nEven array :\n";
print_r($even);

?>
