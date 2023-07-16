<html>
<form method="post" action="assig5setA2.php">
enter name<input type="text" name="t1"><br>
enter address<input type="text" name="t2"><br>
enter pincode<input type="text" name="t3"><br>
gender
<input type="radio" name="r1">male<br>
<input type="radio" name="r1">female<br>
<input type="submit" value="ok">
</form>
</html>
<?php
$name=$_POST["t1"];
$add=$_POST["t2"];
$pincode=$_POST["t3"];
$gender=$_POST["r1"];
if(empty($name)||empty($add)||empty($pincode)||empty($gender))
echo"all field are required.........";
else
{
 echo("<br>name=".$name);
 echo("<br>address=".$add);
 echo("<br>pincode=".$pincode);
 echo("<br>gender=".$gender);
}
?>

