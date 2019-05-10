<?php
include 'FullName.php'; 

class MyName extends FullName {
   function fullName() {
      return "\n Adib";
   }
}

$foo = new MyName;
$bar = new FullName;
echo($foo->fullName()); //"Foo"
echo($bar->fullName()); //"Bar"
?>