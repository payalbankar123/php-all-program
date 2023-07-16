<?php
if(isset($_POST['php']) && isset($_POST['ds']) && isset($_POST['cpp']) && isset($_POST['rdbms']))
setcookie('php',$_POST['php'],time()+84600*120); 
setcookie('ds',$_POST['ds'],time()+84600*120); 
setcookie('cpp',$_POST['cpp'],time()+84600*120); 
setcookie('rdbms',$_POST['rdbms'],time()+84600*120);
?>
<table border="1">
<tr>
<th>Seat No</th>
<th>Student Name</th> 
<th>Class</th> 
<th>PHP</th>
<th>DS</th> 
<th>CPP</th>
<th>RDBMS</th>
 <th>Total</th>
</tr>
 <tr>
<td>
<?php 
echo $_COOKIE['t1']; 
?>
</td> 
<td>
<?php 
echo $_COOKIE['t2'];
?>
</td>
<td>
<?php 
echo $_COOKIE['t3']; 
?>
</td>
<td>
<?php 
echo $_COOKIE['php'];
?>
</td> 
<td>
<?php 
echo $_COOKIE['ds'];
?>
</td>
<td>
<?php 
echo $_COOKIE['cpp']; 
?></td>
<td>
<?php 
echo $_COOKIE['rdbms']; 
?></td>
<td>
<?php 
echo $_COOKIE['php']+$_COOKIE ['ds']+$_COOKIE['cpp']+$_COOKIE['rdbms']; 
?></td>
</tr>
</table>
