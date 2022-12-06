<?php
/* This method discuss the shuffle() function to get random value out of an array in PHP.
PHP | shuffle() Function: The shuffle() Function is an inbuilt function in PHP which is used to shuffle or randomize the order of the elements
 in an array. This function assigns new keys for the elements in the array. It will also remove any existing keys, rather than just reordering
  the keys and assigns numeric keys starting from zero. 
  Syntax: bool shuffle( $array )
    */
// Declare an associative array
$arr = array( "a"=>"21", "b"=>"31", "c"=>"7", "d"=>"20" );

// Use shuffle function to randomly assign numeric
// key to all elements of array.
shuffle($arr);

// Display the first shuffle element of array
echo $arr[0];

?>

