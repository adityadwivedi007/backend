
<?php

// <!-- WAP to read three numbers and find out maximum. -->
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
 
if($a > $b  &&  $a>$c)
{
 echo "First number is max";
}
elseif($b>$a  &&  $b>$c)
{
    
    echo "second number is max";
}
else{

    echo "thrid number is max";
}

?>
