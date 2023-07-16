<?php
$name=$_POST["t1"];
$q1=$_POST["r1"];
$q2=$_POST["r2"];
$q3=$_POST["r3"];
$q4=$_POST["r4"];
$q5=$_POST["r5"];
$total=$q1+$q2+$q3+$q4+$q5;
echo"<table border=1>";
echo("<caption>$name</caption>");
echo("<tr><th>que no<th>marks</tr>");
echo("<tr><td>1<td>$q1</tr>");
echo("<tr><td>2<td>$q2</tr>");
echo("<tr><td>3<td>$q3</tr>");
echo("<tr><td>4<td>$q4</tr>");
echo("<tr><td>5<td>$q5</tr>");
echo("<tr><td> total marks<td>$total</tr>");
echo("</table>");
?>