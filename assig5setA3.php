<html>
<bdy>
<form method="post" action="assig5setA3.php">
<h5>employess details</h5>
name<input type="text" name="t1"><br>
address<input type="text" name="t2"><br>
<h5>earning ddetails</h5>
basic <input type="text" name="t3"><br>
DA <input type="text" name="t4"><br>
HRA <input type="text" name="t5"><br>
<INPUT TYPE="SUBMIT" VALUE="ok">
</form>
</body>
</html>

<?php
$name=$_POST["t1"];
$address=$_POST["t2"];
$basic=$_POST["t3"];
$da=$_POST["t4"];
$hra=$_POST["t5"];
echo("<table border=1>");
echo("<tr><td>name</td><td>address</td><td>bacic</td><td>da</td><td>hra</td></tr>");
echo("<tr><td>$name</td><td>$address</td><td>$basic</td><td>$da</td><td>$hra</td></tr>");
echo("</table>");
?>