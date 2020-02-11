<?php
 abstract class Abs
{
     abstract function f1();
     #abstract function f2();
     
}
class B extends Abs{
    function f1(){
        echo "hiii";
    }
}
 $a =new B();
 $a->f1();

?>