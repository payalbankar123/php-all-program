
<?php
if(isset($_GET['s1']) && isset($_GET['s2']) && isset($_GET['s3']) && isset($_GET['s4']))
{
setcookie("s1",$_GET['s1'],time()+84600*120);
setcookie("s2",$_GET['s2'],time()+84600*120); 
setcookie("s3",$_GET['s3'],time()+84600*120);
setcookie("s4",$_GET['s4'],time()+84600*120);
}
?>
<html>
<table border=1>
<tr>
<th>Font Name</th>
<th>Font Size</th>
<th>Font Color</th>
<th>Background color</th>
</tr>
<tr>
<td><?php echo $_COOKIE['s1']; ?></td>
<td><?php echo $_COOKIE['s2']; ?></td>
<td><?php echo $_COOKIE['s3']; ?></td>
<td><?php echo $_COOKIE['s4']; ?></td>
</tr>
</table> <form action="assig6setA3_page3.php"> <input type="submit" value="Next Page">
</form>
</html>
