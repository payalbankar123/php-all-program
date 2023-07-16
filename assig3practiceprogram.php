<?php
$a=array(10,20,30,40,-10,-20,-30);
function check($n)
{
if($n>0)
echo"<br> positive number $n";
else
echo"<br> negative number $n";
}
array_walk($a,'check');
$s=array_sum($a);
$n=count($a);
echo("<br> array average=".($s/$n));
echo"<br>array sum=$s";

?>