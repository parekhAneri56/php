<?php 

function name(&$fname) //&$fname this is a reference variable
{
   
    echo "My firstname is :aneri parikh"."<br>";
}
$lname="My last name is: Patel";
name($fname);
echo $lname;
?>