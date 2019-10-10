<?php
  include '/home/sanket/Aditi/Spring 19/PHP/ParentClass.php';
/*
 */
class ChildClass extends ParentClass
{
  public function parentFunc()
  {
    // code...
    return $this->parent;
  }
  public $name = "I come from Child Class.";
  //echo $name;
}


 ?>
