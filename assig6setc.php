<html>
<head><h1><center><font color="Black" face="Calisto MTBold">Avatar.com</font>
</h1></center></head> <body bgcolor="indigo">
<fieldset>
<legend>Online Shopping Form</legend> 
<form action="site1.php" method="POST">
<label>Customer name: </label><br> 
<input type="text" name="q1"><br><br>
<label>Email: </label><br> 
<input type="email" name="q2"><br><br>
<label>Shipping Address </label><br> 
<input type="address" name="q3"><br><br>
<label>Mode of Payment:</label><br>
<select name="q4"> 
<option name="q4" value="Google Pay">Google Pay</option>
<option name="q4" value="Phone Pay">Phone Pay</option> 
<option name="q4" value="Paytm">Paytm </option>
<option name="q4" value="Bhim Pay">Bhim Pay</option>
</select><br><br>
<input type="submit" name="submit" value="Register">
</fieldset>
</form>
</body> 
</html>

<?php
if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']))
{
setcookie('q1',$_POST['q1'],time()+84600*120); 
setcookie('q2',$_POST['q2'],time()+84600*120);
setcookie('q3',$_POST['q3'],time()+84600*120); 
setcookie('q4',$_POST['q4'],time()+84600*120);
}
?>
<html>
<frameset cols="33.33%,33.33%,*">
<frame src="tshirt.php">
<frame src="hoodie.php">
<frame src="shoes.php">
</frameset>
</html>


<html>
<body>
<center>
<form action="#" method="POST">
<br><br>
<br><br>
<br><br>
<img src="tshirt.jpg" height="200" width="200">
<br><br>
<label>Price:</label><br>
<input type="text" name="text1"><br><br>
<label>Quantity:</label><br>
<select name="list">
<option value="1" name="list">1</option>
<option value="2" name="list">2</option>
<option value="3" name="list">3</option> 
<option value="4" name="list">4</option>
<option value="5" name="list">5</option>
</select><br><br>
<label>Colour:</label><br>
<select name="colour">
<option value="1" name="colour">voilet</option>
<option value="2" name="colour">black</option>
<option value="3" name="colour">indigo</option> 
<option value="4" name="colour">blue</option>
<option value="5" name="colour">red</option>
<option value="6" name="colour">pink</option>
</select><br><br>
<label>Size:</label><br>
<select name="Size">
<option value="1" name="size">S</option>
<option value="2" name="size">M</option>
<option value="3" name="size">L</option> 
<option value="4" name="size">XS</option>
<option value="4" name="size">XL</option>
<option value="4" name="size">XXL</option>
</select><br><br>
<input type="submit" value="submit">
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['price']) && isset($_POST['list']) && isset($_POST['color']) &&
isset($_POST['size']))
{
setcookie('price',$_POST['price'], time()+84600*120);
setcookie('list', $_POST['list'],time()+84600*120);
setcookie('list1',$_POST['color'],time()+84600*120); 
setcookie('list2',$_POST['size'],time()+84600*120);
}
?>

<html>
<body>
    <form action="#" method="POST">
<center>
<br><br>
<br><br>
<br><br>
<img src="hoodie.jpg" height="200" width="200">
<br><br>
<label>Price:</label><br>
<input type="text" name="text1"><br><br>
<label>Quantity:</label><br>
<select name="list">
<option value="1" name="list">1</option>
<option value="2" name="list">2</option>
<option value="3" name="list">3</option> 
<option value="4" name="list">4</option>
<option value="5" name="list">5</option>
</select><br><br>
<label>Colour:</label><br>
<select name="colour">
<option value="1" name="colour">voilet</option>
<option value="2" name="colour">black</option>
<option value="3" name="colour">indigo</option> 
<option value="4" name="colour">blue</option>
<option value="5" name="colour">red</option>
<option value="6" name="colour">pink</option>
</select><br><br>
<label>Size:</label><br>
<select name="Size">
<option value="1" name="size">S</option>
<option value="2" name="size">M</option>
<option value="3" name="size">L</option> 
<option value="4" name="size">XS</option>
<option value="5" name="size">XL</option>
<option value="6" name="size">XXL</option>
</select><br><br>
<input type="submit" value="Add to cart">
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['price']) && isset($_POST['list']) && isset($_POST['color']) &&
isset($_POST['size']))
{
setcookie('price',$_POST['price'], time()+84600*120);
setcookie('list', $_POST['list'],time()+84600*120);
setcookie('list1',$_POST['color'],time()+84600*120); 
setcookie('list2',$_POST['size'],time()+84600*120);
}
?>

<html>
<body >
    <form action="fianl.php" method="POST">
<center>
<br><br>
<br><br>
<br><br>
<img src="shoes.jpg" height="200" width="200">
<br><br>
<label>Price:</label><br>
<input type="text" name="text1"><br><br>
<label>Quantity:</label><br>
<select name="list">
<option value="1" name="list">1</option>
<option value="2" name="list">2</option>
<option value="3" name="list">3</option> 
<option value="4" name="list">4</option>
<option value="5" name="list">5</option>
</select><br><br>
<label>Colour:</label><br>
<select name="colour">
<option value="1" name="colour">voilet</option>
<option value="2" name="colour">black</option>
<option value="3" name="colour">indigo</option> 
<option value="4" name="colour">blue</option>
<option value="5" name="colour">red</option>
<option value="6" name="colour">pink</option>
</select><br><br>
<label>Size:</label><br>
<select name="Size">
<option value="1" name="size">S</option>
<option value="2" name="size">M</option>
<option value="3" name="size">L</option> 
<option value="4" name="size">XS</option>
<option value="5" name="size">XL</option>
<option value="6" name="size">XXL</option>
</select><br><br>
<input type="submit" value="Add to cart">
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['price']) && isset($_POST['list']) && isset($_POST['color']) &&
isset($_POST['size']))
{
setcookie('price',$_POST['price'], time()+84600*120);
setcookie('list', $_POST['list'],time()+84600*120);
setcookie('list1',$_POST['color'],time()+84600*120); 
setcookie('list2',$_POST['size'],time()+84600*120);
}
?>

<html>
<fieldset>
<center><h1>Bill</h1><br> <br><br>
<table border="1">
<tr>
<th colspan="18">Customer Information</th>
</tr>
<tr>
<th rowspan="3">Customer Name</th> 
<th rowspan="3">Email</th>
<th rowspan="3">Shipping Address</th>
 <th colspan="11">Product Details</th>
<th rowspan="3">Mode of Payment</th>
<th rowspan="3">Total</th>
</tr>
<tr>
<th colspan="4">T-Shirt</th>
<th colspan="4">Hoodie</th>
<th colspan="3">Shoes</th>
</tr>
<tr>
<th>Cost</th>
<th>Quantity</th> 
<th>Color</th> 
<th>Size</th>
<th>Cost</th>
<th>Color</th>
<th>Size</th>
<th>Cost</th> 
<th>Quantity</th> 
<th>size</th>
</th>
<tr><td><?php echo $_COOKIE['q1']; ?></td>
<td><?php echo $_COOKIE ['q2']; ?></td>
<td><?php echo $_COOKIE['q3']; ?></td>
<td><?php echo $_COOKIE['price']; ?></td>
<td><?php echo $_COOKIE['list'];?></td>
<td><?php echo $_COOKIE['color']; ?></td>
<td><?php echo $_COOKIE['size']; ?></td>
<td><?php echo $_COOKIE["price"]; ?></td>
<td><?php echo $_COOKIE['List']; ?></td>
<td><?php echo $_COOKIE['color']; ?></td>
<td><?php echo $_COOKIE['size']; ?></td>
<td><?php echo $_COOKIE['price']; ?></td>
<td><?php echo $_COOKIE['list']; ?></td>
<td><?php echo $_COOKIE['color']; ?></td>
<td><?php echo $_COOKIE['size']; ?></td>
<td><?php echo $_COOKIE['price']+$_COOKIE ['price']+$_COOKIE['price']; ?></td>
</tr> </table>
<br>
<u>Your Total Shipping Charges Are :
<?php echo $_COOKIE['cost']+$_COOKIE['Price']+$_COOKIE['price']; ?></u><br><br>
<b>Thank You for Visiting Us..!</b>
</fieldset>
</center>
</html
