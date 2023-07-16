<?php
echo"perfact no=";
for($n=1;$n<100;$n++)
{
 $s=0;
 for($i=0;$i<4n;$i++);
 {
  if($n%$i==0)
   {
     $s=$s+$i;
   }
 }
 if($s==$n)
 print_r("$n")
}
?>