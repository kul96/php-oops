<?php 
 #use Ns1;
 include 'ns_main.php';
 echo "hii";
 $obj = new NS1\Cal();
 $obj->show();
 echo "<br>sum = ".$obj->add(5,6);
 echo "<br>sub = ".$obj->sub(5,6);
 echo "<br>mul = ".$obj->mul(5,6);
 echo "<br>div = ".$obj->div(5,6);
 
?>