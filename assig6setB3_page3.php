<?php
session_start();
$proname=$_POST['text1']; 
$date=$_POST['text2']; 
$totalsale=$_POST['text3'];
$_SESSION['text1']=$proname; 
$_SESSION['text2']=$date;
$_SESSION['text3']=$totalsale;
?>
<html>
<center>
<table border="1" cellpadding="20px" cellspacing="20px" frame="void"> <tr>
<th colspan="3">Highest Sold Products</th>
</tr>
<tr> <th>Product Name</th>
<th>Total Quantity</th>
<th>Total Sold</th>
</tr>
<td><?php echo $_SESSION['t1']; ?></td>
<td><?php echo $_SESSION['t2']; ?></td>
<td><?php echo $_SESSION['t3']; ?></td>
</tr>
<tr> <th colspan="3">Latest Seles Products</th>
</tr>
<th>Product Name</th> <th>Date</th>
<th>Total Sale</th>
</tr>
<tr>
<td><?php echo $_SESSION['text1']; ?></td> 
<td><?php echo $_SESSION['text2']; ?></td>
<td><?php echo $_SESSION['text3']; ?></td>
</tr> </table>
</center>
</html>
