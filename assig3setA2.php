<?php
$a=array("payal"=>"72","chaitrali"=>"75","shruti"=>"70","komal"=>"90","sayli"=>"60");

echo("<br> display along with key=<br>");
print_r($a);

echo("<br> size of array=".count($a));
unset($a['sayli']);

echo("<br> after delete=<br>");
print_r($a);

$b=array_reverse($a);
echo("<br> reverse array=<br>");
print_r($b);

shuffle($a);
echo("<br> random array=<br>");
print_r($a);
?>