<?php
#inheritance
class A{
 public $name,$roll;
 function getData($value,$roll)
 {
 	$this->name = $value;
 	$this->roll = $roll;
 }

 public function showData()
   {
   	echo "<br><br><br>name = ".$this->name."<br> ";
   	echo "roll = ".$this->roll."<br>";
   }  

}
 
class B extends A
{
	 
}

$b = new B();
$b->getData("kuldeep",174025);
$b->showData();


/**
 * call parent class method in child class
 */
class P
{
	function f2()
	 { echo "<br>parent";
	 } 
    function parentCall()
	 {
	 	self::f2();
	 }
}
 
class C1 extends P
{ 
   function f2()
   { echo "<br> child";
   	# code...
   }
   function childCall()
   {
   	 parent::parentCall();
   }
}

$a = new C1();
$a->childCall();
#$b = new P();
#$a->P->f2();

?>