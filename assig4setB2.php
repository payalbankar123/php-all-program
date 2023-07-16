  <?php
 class student
 {
   public $rno,$smane,$per;
   function accept($rno,$sname,$per)
   {
     $this->rno=$rno;
     $this->sname=$sname;
     $this->per=$per;
   } 
   function display()
   {
     echo("<br> Roll No=".$this->rno);
     echo("<br> Student Name=".$this->sname);
     echo("<br> Student Percentage=".$this->per);
   }
 }
  $ob=new student();
  $ob->accept(101,"payal","72.80");
  $ob->display();
?>
