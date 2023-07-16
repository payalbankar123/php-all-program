 <?php
  function addition($a=200,$b=150)
  {
    $c=$a+$b;
    $d=$a-$b;
    $e=$a*$b;
    $f=$a/$b;
      echo("<br>Addition=".$c);
      echo("<br>Substraction=".$d);
      echo("<br>Multiplication=".$e);
      echo("<br>Division=".$f);
  }
  addition();
?>
