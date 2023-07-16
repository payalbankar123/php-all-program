<?php
  class book 
  {
    public $book_id,$book_name,$Publication,$Author,$book_price;
    function accept($book_id,$book_name,$Publication,$Author,$book_price)
    {
      $this->book_id=$book_id;
      $this->book_name=$book_name;
      $this->Publication=$Publication;
      $this->Author=$Author;
      $this->book_price=$book_price;
    }
    function display()
    {
      echo("<br> Book ID=".$this->book_id);
      echo("<br> Book Name=".$this->book_name);
      echo("<br> Publication=".$this->Publication);
      echo("<br> Author=".$this->Author);
      echo("<br> Book Price=".$this->book_price);
    }
  }
 $ob=new book();
 $ob->accept(14408,"PHP","Nirali Prakashan","Swati Jadhav",250);
 $ob->display();
?>
