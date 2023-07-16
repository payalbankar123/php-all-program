<html>
<head> <h1>arithmestic operation</h2></head
<body bgcolor="red">
<form method="POST" action="assig2setA2.php">
number1=
<input type=number" name="t1"><br>
number2=
<input type=number" name="t2"><br>
<label> select option below</lable><br>
<input type="radio" name="ch" value="addition"> addition <br>
<input type="radio" name="ch" value="subtraction"> subtraction <br>
<input type="radio" name="ch" value="multipication"> multipication <br>
<input type="radio" name="ch" value="division"> division <br>

<input type="submit" value="ok">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["ch"];
switch($c)
{
 case 'addition': echo"addtion=".($a+$b);
                  break;
case 'subtraction': echo"subtraction=".($a-$b);
                  break;
case 'multipication': echo"multipication=".($a*$b);
                  break;
case 'division': echo"division=".($a/$b);
                  break;
default :echo"invalid";
}
?>