<?php
session_start();
$pname=$_POST['t1'];
$totalq=$_POST['t2'];
$totals=$_POST['t3'];
$_SESSION['t1']=$pname;
$_SESSION['t2']=$totalq;
$_SESSION['t3']=$totals;
?>
<html>
<head><h1>Inventory management system</h1></head>
<fieldset>
<legend>latest sales Product Details:</legend>
<form action="assig6setB3_page3.php" method="post"> 
<label>Product Name :</label><br>
<input type="text" name="text1"><br>
<label>Date:</label><br>
<input type="date" name="text2"><br>
<label>Total Sell:</label><br>
<input type="text" name="text3"><br>
<br><br>
<input type="submit" name="submit" value="Submit"/> </fieldset>
</body> 
</form>
</html>
