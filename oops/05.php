<?php
class A
{  
    
    function fun1(){  
        echo "Aditya";  
  }  
}
class B extends A
{  

    function fun2(){  
        echo "Dhar";  
  }  
}
class C extends B
{
    function fun3(){  
        echo "Dwivedi";  
  }  
}
$obj= new C();
$obj->fun3();
echo "<br>";
$obj->fun2(); 
?>

