<fieldset>
<legend>Form</legend>
<form   echo $_SERVER['PHP_SELF'] ?>" method="POST">
<input type="text" name="tbl" value="<?php   echo $_POST['tb1'];?>" placeholder:" Enter a Number.. "?><br><br> <label>Select Operation :</label><br>
<input type="radio" name="rdl" value="1"/>Check Palindrome<br>
<input type="radio" name="rdl" value="2"/>Reverse Number Using Recusrsion<br><br> <input type="submit" name="submit" value="check"/>
</fieldset>
</form>
</html> <?php if(isset($_POST['submit']) && isset($_POST['rd1'])){ $number=$_POST['tb1'];
 
echo"<u><h3>Result :</h3></u>"; 
switch($choice)
{ 
case 1: $sum=O; while(floor($number))
{
$remainder=$number%l();
 10+$remainder; $number=$number/10;

if($_POST['tb1']==$sum){ echo"Number is Palindrome";
echo"Number is not palindrome";
break; 
}
}
case 2:
function reverseNum($number){ $rev_num=O; while($number>l)
{
$rev_num=$rev_num*10+$number%10;
$number=(int)$number/10; return $rev_num;
echo "Reverse of ".$number." is :".reverseNum($number); 
break;
