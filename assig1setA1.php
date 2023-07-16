<HTML>
<body>
<form method="POST" action="assig1setA1.php"><br>
enter 1st number=
<input type="text" name="t1"><br>
enter 2nd nuber=
<input type="text" name="t2"><br>
<input type="submit" value="ok">
</form>
</body>
</html>


<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$quotient=$a/$b;
echo"<br> the quotient is= $quotient";
$reminder=$a%$b;
echo"<br> the quotient is =$reminder";
?>