<?php
/*Use array_rand() function to get random value out of an array in PHP.
PHP | array_rand() Function: The array_rand() function is an inbuilt function in PHP which is used to fetch a random number of elements 
from an array. The element is a key and can return one or more than one key.*/
// Declare an associative array
$arr = array( "a"=>"21", "b"=>"31", "c"=>"7", "d"=>"20" );

// Use array_rand function to returns random key
$key = array_rand($arr);

// Display the random array element
echo $arr[$key];

?>
