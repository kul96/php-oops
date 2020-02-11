<?php
  namespace Ns1{ 
   class Cal{
     public function show(){
           echo "this is show function <br>";
      } 

     public function add($a,$b)
     {    
          echo ($a+$b);
     }
     public function sub($a,$b)
     {
          return ($a-$b);
     }
     public function mul($a,$b)
     {
          return ($a*$b);
     }
     public function div($a,$b)
     {   try {
          $c=($a/$b);
          return $c;
          }catch (Throwable $th) {
            throw $th;
          }
           
     }
   }  
 #$obj =  new Cal();
 #$obj->show();
}
?>