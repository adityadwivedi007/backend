<?php
class demo{
    function foo(){
        echo "it is pre class ";
    }
}
class b extends demo{
    function bar(){
        echo "it is pro object";
    }
}
$c =new bar;
$c->bar();
?>