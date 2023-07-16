<html>
<body>
<form method="POST" action="assig2setC2.php">
enter day=
<input type="text" name="t1">
<input type="submit" value="ok">
<?form>
</body>
</html>

<?php
 $d=$_POST["t1"];
switch($d)
{
 case "monday"; echo("<body bgcolor=red>");
 case "tuesday"; echo("<body bgcolor=blue>");
 case "wednesday"; echo("<body bgcolor=pink>");
 case "thursday"; echo("<body bgcolor=yellow>");
 case "friday"; echo("<body bgcolor=green>");
 case "saturday"; echo("<body bgcolor=black>");
 case "sunday"; echo("<body bgcolor=orange>");
}
?>