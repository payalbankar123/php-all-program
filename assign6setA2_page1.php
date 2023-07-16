<?php
session_start();
?>
<html>
<fieldset> <form method="post" action="assig6setA2_page2.php">
<b>Username</b><br>
<input type="text" name="t1" 
value="<?php if(isset($_POST['t1'])) echo $_POST['t1']; ?>"><br><br>
<b>Password</b><br> <input type="password" name="t2"
 value="<?php if(isset($_POST['t2'])) echo $_POST['t2']; ?>"><br><br
</fieldset>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['t1'];
$pwd=$_POST['t2'];
if(($name=="Shiva")&& ($pwd=="894"))
echo "<script>window.location='page1.php'</script>";
}
else
{
$_SESSION['chance']++;
echo "wrong username & password<br>Chance :".$_SESSION['chance']." Try Again...!";
} 
if($_SESSION['chance']==3)
{
echo "<br> sorry....Your chances are finished<br>You Must Login Again...";
echo"<script>alert('Your chances are finished login again..!');
window.location='nwe1.php';</script>";
}
?>


