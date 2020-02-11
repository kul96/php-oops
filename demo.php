<?php 
class Demo
{
	private $name,$rollno;

    function getData($name,$rollno){
    	$this->name =  $name;
    	$this->rollno = $rollno;
    }
    
    function showData(){
    	echo "name = ".$this->name."\n";
    	echo "rollno = ".$this->rollno;
    }
 
}

$obj = new Demo();
$obj->getData("kuldeep",120);
$obj->showData();
 
 ?>