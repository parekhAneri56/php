<?php
   class grandma{
      public function __construct(){
         echo "I am in Tops technology "."
";
      }
   }
   class mummy extends grandma{
      public function __construct(){
         parent::__construct();
         echo "I am not in Tops technology";
      }
   }
$obj = new mummy();
?>