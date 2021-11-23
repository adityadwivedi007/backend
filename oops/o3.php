<?php
class F{
  public $name;


  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }

}
$n = new F("Aditya is student");
echo $n->get_name();
?>
 


