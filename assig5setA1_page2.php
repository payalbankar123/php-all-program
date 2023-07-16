<?php
$fn=$_POST["t1"];
$bg=$_POST["t2"];
$msg=$_POST["t3"];
echo("<body bgcolor='$bg'>");
echo("<font face='$fn'>");
echo($msg);
echo("</font>");
echo("</body>");
?>