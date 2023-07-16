<html>
<body>
<form method="POST" action="assig1setB3.PHP">
data structure=
<input type="number" name="t1"><br>
digital marketing=
<input type="number" name="t2"><br>
php=
<input type="number" name="t3"><br>
Software eng...=
<input type="number" name="t4"><br>
bigdata=
<input type="number" name="t5"><br>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$t=$a+$b+$c+$d+$e;
$p=$t/5;
echo"<br> total marks=$t";
echo"<br> sspersentage=$p";
?>
