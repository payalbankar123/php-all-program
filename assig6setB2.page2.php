<?php
setcookie("B1",$_GET['B1'],time()+84600*1200);
setcookie("B2",$_GET['B2'],time()+84600*1200);
setcookie("B3",$_GET['B3'],time()+84600*1200);
setcookie("B4",$_GET['B4'], time()+84600*1200);
?>
<html>
<head><h1><center>Patient Details<center></h1></head> <body bgcolor="red">
<fieldset>
<legend>Registration Form</legend>
<form action="assig6setB2.page3.php" method="post">
<label>Medicare No:</label><br> 
<input type="text" name="p1"  maxlength="8"/><br>
<label> Health Fund :</label><br>
<input type="text" name="p2"><br> 
<label><b>Critical Information:</b></label><br>
<select name="info">
<option name="op1" value="Accident">Accident</option> 
<option name="op1" value="Accident">Fracture</option>
 <option name="op1" value="Accident">Bone Broke</option>
 </select><br>
<br><br>
<input type="submit" name="submit" value="Register"/> 
</fieldset>
</form>
</body>
<html>
