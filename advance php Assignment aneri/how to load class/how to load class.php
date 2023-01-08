<?php
//php file should contain the Contact class. Before using a class, you need to: First, define the class in a file. 
//Second, load it using the require , require_once , include , or include_once statement

// If a class is not declared, PHP will run a function (one global function; not a class method) named "__autoload()" if there is one declared,
// and will retry to load the class again. It is expected of the __autoload() function to do whatever is necesary to load the class given to 
// it as a first argument.

spl_autoload_register(function($class_name)
{
    include 'class/'.$class_name . '.php';
});

$obj = new weekday();

?>