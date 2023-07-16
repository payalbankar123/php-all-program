<?php
$s1="cdj college of shrirampure";
$s2="college";
$s3=strtoupper($s1);
$s4=strtolower($s2);
echo"<br>upper case string=$s3";
echo("<br>loewr case string=$s4");
echo"<br>first position occurese=";
echo strrpos($s1,$s2);
echo"<br>last potion occurese=";
echo strripos($s1,$s2);
?>
