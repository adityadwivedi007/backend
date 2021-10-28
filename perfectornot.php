<!-- WAP to read a number and check whether it is Perfect or not.(using for loop) -->
<?php
$num = 6;
$compair =0;
for($i=1;$i<=$num/2;$i++)
{
    if ($num %$i ==0 ){
        $compair +=$i;
    }
    
} 
 if($compair == $num )
 {
     echo "this is not perfect number ";
 }
?>