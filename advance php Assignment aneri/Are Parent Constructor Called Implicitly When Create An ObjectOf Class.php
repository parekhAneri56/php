<?php
//Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, 
//a call to parent::__construct() within the child constructor is required.

class grandpa{
    public function __construct(){
       echo "I am in Tops technology "."
";
    }
 }
 class papa extends grandpa{
    public function __construct(){
    echo "I am not in Tops technology";
    parent::__construct();
    }
 }
$obj = new papa();
?>