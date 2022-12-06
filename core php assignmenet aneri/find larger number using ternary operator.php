<?php
// PHP program to find largest among three
// numbers using ternary operator
 
// variable declaration

$n1 = 5; $n2 = 10; $n3 = 15;
 
// Largest among n1, n2 and n3
$max = ($n1 > $n2) ? ($n1 > $n3 ? $n1 : $n3) :
                     ($n2 > $n3 ? $n2 : $n3);
 
// Print the largest number
echo "Largest number among ". $n1 . ", ". $n2 .
                   " and " . $n3. " is " .$max;
?>