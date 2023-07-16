<?php class employee{ public $code,$name,$des; function _construct($a,$b,$c){
$this->code=$a;
$this->name=$b;
$this->des=$c;
public function disemp(){ echo "<td>". $this->code   	 
public function getname(){ return $this->name;
public function display_name(){ echo $this->name;
class emp_acc extends employee{ public $ano, $jdate; function _construct($a,$b,$c,$d,$e){ parent:: construct($a,$b,$c); $this->ano=$d;

$this->jdate=$e;
public function disacc(){ echo "<td>". $this->ano ."</td><td>".$this->jdate."</td>";
class emp_sal extends emp_acc{ public $bs, $earn, $ded, $total; function _construct($a,$b,$c,$d,$e,$f,$g,$h){ parent:: construct($a,$b,$c,$d,$e); $this->bs=$f;
$this->earn=$g;
$this->ded=$h;
$this->total = $this->bs+$this->earn-$this->ded;
public function dissal(){ echo "<td>" .$this->bs ."</td><td>" .$this->earn. "</td><td>" .$this->ded. 'k/td><td>" .$this-
	>total.	 
$e1[0]=new emp_sal(l,
$el[l]-new emp_sal(2,
$e1[2]=new emp_sal(3,
$e1[3]-new emp_sal(4,
$e1[4]=new emp_sal(5," 
 
$flag=O;
function mastertable($el){ echo 'ktable border='l'> <tr><th>emp code</th>
<th>emp name</th><th>designation</th>
<th>account no</th><th>joining date</th>
<th>basic pay</th><th>earning</th>
<th>deduction</th><th>total salary</th></tr>"; for($i=0; $i<5; echo
$el[$i]->disemp();
$el[$i]->disacc(); $el[$i]->dissal(); echo	 
echo"</table>";
switch($ch){ case 1 : mastertable($el); break; case 2 : echo "sorted details <br>"; function srt($a,$b){
return strcmp($a->code,$b->code);
mastertable($el); usort($el, "srt"); break; case 3 :
 
$t=$el[$i]->getname(); if($t==$nm){ $flag=l; break;
if($flag==O){ echo'kscript>alert('Entry Not Found.. 
if($flag==l){ echo"<script>alert('Entry Found..!'); window.location='goal.html'</script>";
break; case 4 : echo   Salary :</h2><u>"; echo "<table border='l'>
<th>Employee name</th>
<th>Basic pay</th>
<th>Earning</th>
<th>Deduction</th>
<th>Total salary</th>
 $i<5;  echo "<tr><td>";
$el[$i]->display_name(); echo "</td>";
$el[$i]->dissal();
echo "</tr></table>"; break;

