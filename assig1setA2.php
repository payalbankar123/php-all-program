<html>
<body>
<form method="POST" action="assig1setA2.php">
enter no a=<input type="number" name="t1"><br>
enter no b=<input type="number" name="t2"><br>
<input type="submit" value="swap">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
echo"<br> number before swaping is =$a";
echo"<br> number before swaping is =$b";
$temp=$a;
$a=$b;
$b=$temp;
echo"<br>number after swaping is=$a";
echo"<br>number after swaping is=$b";
?>