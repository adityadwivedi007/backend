<?php
abstract class base{
    abstract function pr();
}
class derived extends base{
    function pr(){
        echo "derived class";
    }
}
$b= new derived;
$b->pr();
?>