<html>
<body>
<form method="POST" action="assig2setA3.php">
enter persentage=<input type="text" name="t1">
<input type="submit" value"ok">
</form>
</body>
</html>
<?php
$p=$_POST["t1"];
if($p<=40)
 echo"fail";
elseif($p>=40 &$p<=50)
echo"pass class";
elseif($p>=50 &$p<=60)
echo"higher secound class";
elseif($p>=60 &$p<=70)
echo"first class";
elseif($p>=70 &$p<=100)
echo"first class with distinction";
?>
