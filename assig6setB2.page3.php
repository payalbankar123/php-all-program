<?php
setcookie("p1",$_POST['p1'],time()+84600*1200); 
setcookie("p2",$_POST['p2'],time()+84600*1200); 
setcookie("info",$_POST['info'],time()+84600*1200);
?>
<?php
echo "<h1>Patient Details:</h1>";
echo "Patient Name:".$_COOKIE['B1']."<br>"; 
echo "Patient Address:".$_COOKIE['B2']."<br>" ;
echo "Patient Birthdate:".$_COOKIE['B3']."<br>";
echo "Patient Mobile No.:".$_COOKIE['B4']."<br>";
echo "<hr>";
echo "<h1>Health Details:</h1>"; 
echo "Patient Medicare No :".$_COOKIE['p1']."<br>"; 
echo "Patient Health Fund :".$_COOKIE['p2']."<br>";
echo "Patient Critical Info:".$_COOKIE['info']."<br>";
?>
