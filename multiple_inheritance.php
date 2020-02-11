<?php 
 # multiple inheritance not supported by php
 class A{
    function f1()
    {
       echo "hii this f1 form class A <br>";
    }
    function f2()
    {
       echo "hii this f2 from class A<br>";
    }
    function common(){
        echo "common function of class A";
    }
 }
 # use trait insiste of multiple inheritance
 trait B{
     function f3(){
         echo "this is f3 form trait<br>";
     }
     function common(){
         echo "common function of trait";
     }
 }

 # how to use trait 
 class Child extends A{
   use B;
   function f4(){
       echo "this is f4 from class child<br>";
   }
 }
 $obj = new Child();
 $obj->f1();
 $obj->f2();
 $obj->f3();
 $obj->f4();
 $obj->common();
# trait function got higher prority than parent class

 

?>