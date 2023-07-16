<?php
  function Swapping1($a,$b)
  {
     $temp=$a;
     $a=$b;
     $b=$temp;
       echo("Swapping using Call By Value:"."<br>");
       echo("Value of First element after Swapping :".$a."<br>");
       echo("Value of second element after Swapping :".$b."<br>");
  }
  function Swapping2(&$a,&$b)
  {
     $temp=$a;
     $a=$b;
     $b=$temp;
       echo("Swapping using Call By Raference:"."<br>");
       echo("Value of First element after Swapping :".$a."<br>");
       echo("Value of second element after Swapping :".$b."<br>");
  }

 echo(Swapping1(90,180));
  $a=50;
  $b=100;
 echo(Swapping2($a,$b));
?>
