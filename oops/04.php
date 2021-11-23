<?php  
    class a  
        {  
            function fun1(){  
                echo "Aditya";  
          }  
        }  
        class b extends a  
        {  
            function fun2()  
            {  
                echo "Dwivedi";  
            }  
        }  
        $obj= new b();  
        $obj->fun1();  
    ?>  