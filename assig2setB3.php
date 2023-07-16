<html>
<body>
<form method="POST" action="assig2setB3.php">
enter no=
<input type="text" name="t1">
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
$n=$_POST["t1"];
$r=0;
while((int)$n>0)
{
$d=$n%10;
$n=((int)$n/10);
$r=$r*10+$d;
}
echo"reverce no=$r";
?>