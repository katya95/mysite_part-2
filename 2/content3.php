
<?php
class Flag{
 public $name = 'user';
  public $a = 0;
 public static $myStatic = false;
 
  function setA ($value) {
     $this->a = $value;
  }

  function getA () {
     return $this->a;
  }
   function setUser ($value) {
     $this->name = $value;
  }

  function getUser () {
     return $this->name;
  }
  
}



?>