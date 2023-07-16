<?php
echo"perfect numbers=<br>";
for($i=1;$i<100;$i++)
{
$d=0;
 for($j=1;$j<$i;$j++)
{
 if($i%$j==0)
{
 $d=$d+$j;
}
}
if($i==$d)
{
echo"<br>$d";
}
}
?>