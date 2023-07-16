<?php
if(isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3']))
{
setcookie("t1",$_POST['t1'], time()+30*24*60*60*60); 
setcookie("t2",$_POST['t2'], time()+30*24*60*60*60);
setcookie("t3",$_POST['t3'], time()+30*24*60*60*60);
}
?>
<html>
<form action="assig6setA1_page3.php" method="POST">
<label><h1><font color='indigo'>Enter Subject Marks:</h1></label><br>
<label>PHP:</label><br>
<input type="text" name="php" placeholder="Enter marks..."/>
<br><br>
<label>DS:</label><br>
<input type="text" name="ds" placeholder="Enter marks...">
<br><br>
<label>CPP:</label><br>
<input type="text" name="cpp" placeholder="Enter marks...">
<br><br>
<label>RDBMS:</label><br>
<input type="text" name="rdbms" placeholder="Enter marks...">
<br><br>
<input type="submit" name="submit"/>
</form> 
</html>
