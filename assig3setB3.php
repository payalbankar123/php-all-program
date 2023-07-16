<?php
$ch=3;
$a=array("payal"=>"75.30","shruti"=>"66.10","chaitrali"=>"80","sayali"=>"80.30");
$b=array("rupali"=>"55.30","komal"=>"80.30","chaitrali"=>"78.30","sarika"=>"70.21");
switch($ch)
{
 case 1:sort($a);
 echo"<br> sorting changing keys in assending order=";
 print_r($a);
 rsort($a);
 echo"<br> sorting changing keys in desending oreder=";
 print_r($a);
 break;
 case 2: krsort($a);
 echo"<br>sorting withought changing keys=";
 print_r($a);
 break;
 case 3:$c=array_intersect($a,$b);
 echo"<br>inter section of two arrays=";
 print_r($c);
 break;
 case 4:$m=array_merge($a,$b);
 $u=array_unique($m);
 echo"<br> union of two array=";
 print_r($u);
 break;
}
?>