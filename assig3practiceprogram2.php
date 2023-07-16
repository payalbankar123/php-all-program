<html>
<body>
<form method="POST" action="assig3practiceprogram2.php">
enter string=
<input type="text" name="t1">
<br>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
$s=$_POST["t1"];
$c1=0;
$c2=0;
$c3=0;
$c4=0;
$c5=0;

for($i=0;$i<strlen($s);$i++)
{
 if($s[$i]=='a'||$s[$i]=='A')
 $c1++;

 if($s[$i]=='e'||$s[$i]=='E')
 $c2++;

 if($s[$i]=='o'||$s[$i]=='O')
 $c3++;

 if($s[$i]=='i'||$s[$i]=='I'
 $c4++;

 if($s[$i]=='u'||$s[$i]=='U'
 $c5++;
}
echo"<br> a count=$c1";
echo"<br> e count=$c2";
echo"<br> o count=$c3";
echo"<br> i count=$c4";
echo"<br> u count=$c5";
?>

