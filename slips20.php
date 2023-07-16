<html>
<body>
<form  method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
enter number to reverce=
<input type="text" name="t1" value=<?php echo($_POST['t1']?>
<input type="submit">
</form>
</body>
</html>

<?php
$n=$_POST["t1"];
$sum=0;
while($n>0)
{
$d=$n%10;
$sum=$sum+$d;
$n=$n/10;
}
echo"sum of digit=".$sum;
?>
