<?php
  $num1=55;
  $num2=12;
  $num3=100;
   function Maximum($num1,$num2,$num3)
   {
      if($num1>$num2 && $num1>$num3)
      {
         echo("Maximum is:".$num1);
      }
      elseif($num2>$num1 && $num2>$num3)
      {
         echo("Maximum is:".$num2);
      }
      else
      {
         echo("Maximum is:".$num3);
      }
   }
  echo("First Value is:".$num1."<br>");
  echo("Second Value is:".$num2."<br>");
  echo("Third Value is:".$num3."<br>");
  echo(Maximum(55,12,100));
?>
