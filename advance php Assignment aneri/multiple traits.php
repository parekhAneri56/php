<?php
trait message1 {
  public function msg1() {
    echo "Technology is fun! "; 
  }
}

trait message2 {
  public function msg2() {
    echo "Technology is useful or not!"; 
  }
}
class Welcome {
  use message1, message2;
}

$obj2 = new Welcome();
$obj2->msg1();
$obj2->msg2();
?>