<?php
echo"armstrong numbers=<br>";
for($i=1;$i<200;$i++)
{
 $s=0;
 $n=$i;
 while($n!=0)
 { 
 $d=$n%10;
 $s=$s+($d*$d*$d);
 $n=(int)$n/10;
 }
 if($i==$s)
 echo"<br>$s";
}
?>