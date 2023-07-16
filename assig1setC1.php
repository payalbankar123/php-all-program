<html>
<body>
<form method="POST" action="assig1setC1.php">
NAME=
<input type="text" name="t1"><br>
address=
<input type="text" name="t2"><br>
contact no=
<input type="number" name="t3"><br>
source=
<input type="text" name="t4"><br>
destination=
<input type="text" name="t5"><br>
date of journey=
<input type="date" name="t6"><br>
gender=<br>
<input type="radio" name="r1" value="male"> male<br>
<input type="radio" name="r1" value="female">female<br>
number of person=
<input type="text" name="t7"><br>
price of tiket=
<input type="text" name="t8"><br>
<input type="submit" name="ok"><br>
</form>
</body>
</html>
<?php
$name=$_POST["t1"];
$add=$_POST["t2"];
$phno=$_POST["t3"];
$source=$_POST["t4"];
$d=$_POST["t5"];
$doj=$_POST["t6"];
$g=$_POST["r1"];
$num=$_POST["t7"];
$price=$_POST["t8"];
$total=$num*$price;

echo("<br> name=$name");
echo("<br> address=$add");
echo("<br> phone no=$phno");
echo("<br> source=$source");
echo("<br> destination=$d");
echo("<br> date of jou=$doj");
echo("<br> gender=$g");
echo("<br> number of person=$num");
echo("<br> price of tiket=$price");
echo("<br> total=$total");
?>


