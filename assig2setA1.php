<HTML>
<BODY>
<FORM METHOD="POST" ACTION="assig2setA1.php">
enter year
<input type="text" name="t1"><br>
<input type="submit" value="check">
</form>
</body>
</html>

<?php
$y=$_POST["t1"];
if($y%4==0)
 echo"leap year";
else
 echo"not leap year";
?>