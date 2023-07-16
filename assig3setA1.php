<?php
$a=array(10,20,30,40);
$b=array(10,20,50,60);
$c=array_merge($a,$b);
$c=array_unique($c);
   echo("union");
print_r($c);

 shuffle($a);
  echo("<br>randam order=");
 print_r($a);
?>