<?php
  power(5,5);
  function power($x,$y)
  {
    $a=1;
    while($y>0)
    {
      $a=$a*$x;
      $y--;
    }
   echo("<br> BASE to POWER=".$a);
  } 
?>
