<?php
class Fruit{
    public $name;

function set_name($name){
  $this->name =$name;
  }
  function get_name(){
      return $this->name;
   }
}
$apple =new Fruit();
$banana =new Fruit();
$apple->set_name('Apple');
$apple->set_name('banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
