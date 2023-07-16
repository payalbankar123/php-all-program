<?php
$a=array(array(10,20,30,40),
 array("sakshi","keshav","nadu","aman"),
 array("pune","nashik","dhili","nager")
);
print_r($a);
$f=0;
foreach($a as $v)
{
if(array_search("pune",$v))
 $f=10;
}
if($f==1)
echo"<br> number found in array";
else 
echo"<br>number not found in array";
?>
