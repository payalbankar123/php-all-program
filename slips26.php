<html>
<head>
<script type="text/javascript">

  function Addition()
  {
              var ob=false;
              ob=new XMLHttpRequest();
 
              var no1=document.getElementById("no1").value;
              var no2=document.getElementById("no2").value;
 
              ob.open("GET","SLIP26-p2-q1.php?num1="+no1+"&num2="+no2);
              ob.send();       
 
              ob.onreadystatechange=function()
              {
                          if(ob.readyState==4 && ob.status==200)
                          document.getElementById("add").innerHTML=ob.responseText;                }          
  }
 
</script>
</head>

<body>

Enter first no :<input type=text name=no1 id="no1"><br>
Enter second no :<input type=text name=no2 id="no2"><br>
<input type=button name=submit value=add onClick="Addition()"><br>
<span id="add"></span>

<body>
</html>
<?php
  $n1=$_GET['num1'];
  $n2=$_GET['num2'];

if((!empty($n1)) && (!empty($n2)))
  {
              $add=$n1+$n2;
              echo "Addition = ".$add;
  }
  else "enter both nos";
?>
