<?php

//From PHP 5 onwards, it is possible to iterate through list of all visible items of an object. 
//Iteration can be performed using foreach loop as well as iterator interface. 
//There is also IteratorAggregate interface in PHP, that can be used for this purpose

class myclass{
   private $var;
   protected $var1;
   public $x, $y, $z;
   public function __construct(){
      $this->var="private variable";
      $this->var1=TRUE;
      $this->x=100;
      $this->y=200;
      $this->z=300;
   }
   public function iterate(){
      foreach ($this as $key => $value) {
         print "$key => $value";
      }
   }
}
$obj = new myclass();
foreach($obj as $key => $value) {
   print "$key => $value";
}
echo "";
$obj->iterate();
?>
