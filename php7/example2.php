<?php
function generator(){
    yield "hi";
    echo "<br>";
    yield "heeeeeeeeee";
    echo "<br>";
    yield "tola";
    echo "<br>";
}
function generator1(){
    yield "hyeee";
    yield "helllllllllllllllll";
    yield "bolaa...";
}
function generator2(){
    yield "heloooooo00000";
    yield "hi";
    yield "byeeeeeeeee";
    yield from generator();
    yield "tatatatatatata";
    yield from generator1();
    yield "quit";
}
foreach(generator() as $value){
    echo $value,PHP_EOL;
}
foreach(generator2() as $value){
    echo $value,PHP_EOL;
}
?>