  <?php
  class fruit 
  {
    public $fname,$fcolor,$fprice;
    function accept($fname,$fcolor,$fprice)
    {
      $this->fname=$fname;
      $this->fcolor=$fcolor;
      $this->fprice=$fprice;
    }
    function display()
    {
      echo("<br> Fruit Name=".$this->fname);
      echo("<br> Fruit color=".$this->fcolor);
      echo("<br> Fruit Price=".$this->fprice);
    }
  }
 $ob=new fruit();
 $ob->accept("apple","red",330);
 $ob->display();
?>
