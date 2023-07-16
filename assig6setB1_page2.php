<?php
session_start();
$name=$_POST["t1"];
$add=$_POST["t2"];
$dob=$_POST["t3"];
$mob=$_PPOST["t4"];

$_SESSION["name"]=$name;
$_SESSION["add"]=$add;
$_SESSION=["dob"]=$dob;
$_SESSION=["mob"]=$mob;
$_SESSION=["start"]=time();
?>
<html>
<body>
<h1>flight detailks</h1>
<form method="post" action="assig3setB1_page3.php">
flight name=<input type="text" name="t1">
source<input type="text" name="t2">
<br>
destination
<input type="text" name="t3"><br>
departure date=
<input type="date" name="t4"><br>
departure time=
<input type="time" name="t5"><br>
charges=<input type="text" name="t6"><br>
<input type="submit" value="next">
</form>
</body>
</html>

