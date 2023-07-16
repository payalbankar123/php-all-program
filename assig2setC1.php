<?php
 $n=345;
$r=0;
echo("number in digit=".$n);
echo("<br>");
 while((int)$n>0)
{
 $d=$n%10;
 $r=$r*10+$d;
 $n=(int)$n/10;
 } 
echo"<br> number in word=";
while((int)$r>0)
{
 $b=$r%10;
 $r=(int)$r/10;
switch($b)
{
 case 1: echo("one&nbsp");
 break;
 case 2: echo("two&nbsp");
 break;
 case 3: echo("three&nbsp");
 break;
 case 4: echo("four&nbsp");
 break;
 case 5:echo ("five&nbsp");
 break;
 case 6:echo ("six&nbsp");
 break;
 case 7:echo ("seven&nbsp");
 break;
 case 8:echo ("eight&nbsp");
 break;
 case 9:echo ("nine&nbsp");
 break;
 case 0:echo ("zero&nbsp");
 break;
}
}
?>