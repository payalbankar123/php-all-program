<?php
echo"prime numbers=<br>";
for($i=1;$i<50;$i++)
{
$f=0;
for($j=2;$j<$i/2;$j++)
{
if($i%$j==0)
{
$f=1;
break;
}
}
if($f==0)
echo("<br>$i");
}

