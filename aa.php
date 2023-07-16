<html>
<body>
<form mathod="post" action"aa.php">
enter first string=
<input type="text" name="t1"><br>
enter secound string=
<input type="text" name="t2">
<br>
replacing string=
<input type="text" name="t3"><br> 
<input type="submit" value="ok">
</form>
</body>
</html>


<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];

$cnt=0;
echo"<br> first pos=".strpos($s1,$s2);

echo("last occrse=".strrpos($s1,$s2));

for($i=0;$i<strlen($s1);$i++)
{
 if($s1[$i]==$s2)
$cnt++;
}
echo("<br> total occurances=".$cnt);
$s1=str_replace($s2,s3,$s1);
echo("<br> replacing string=".$s1);

?>


