 <?php
  function EvenOdd()
  {
    for($i=1;$i<=50;$i++)
    {
      if($i%2==0)
      {
        echo("Even Number:".$i."<br>");
      }
      if($i%2==1)
      {
        echo("Odd Number:".$i."<br>");
      }
    }
  }
 echo(EvenOdd());
?>
