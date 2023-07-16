<html>
<body>
<form method="post" action="assig5setC.php">
enter name
<input type="text" name="t1"><br>
enter age=<input type="text" name="t2"><br>
<input type="submit" value="next">
</form>
</body>
</html>
<?php
$name=$_POST["t1"];
$age=$_POST["t2"];
if($age<18)
 echo("hello $name you are not authorized to this visit the side");
else
echo("welcome $name to this site");
?>
