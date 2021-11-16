<!-- 4. WAP to read an amount in Rs. And find out number of 100, 50, 20, 10, 5, 2 rupee notes. -->
<?php
$amount_rs=346;
echo "total rs:" .$total_rs."<br>";
$rupessof100 =floar($total_rs/100);
$remainder = $total_rs%100;

$rupessof50 =floor($remainder/50);
$remainder = $remainder%50;

$rupessof20 = floor($remainder/20);
$remainder =$remainder%20;

$rupessof10 =floor($remainder/10);
$remainder =$remainder%10;


$rupessof10 =floor($remainder/5);
$remainder =$remainder%5;


$rupessof10 =floor($remainder/2);
$remainder =$remainder%2;

$rupessof1 = $remainder;

echo "<br> rupessof100:" .$rupessof100."<br>";
echo "<br> rupessof100:" .$rupessof50."<br>";
echo "<br> rupessof100:" .$rupessof20."<br>";
echo "<br> rupessof100:" .$rupessof10."<br>";
echo "<br> rupessof100:" .$rupessof5."<br>";
echo "<br> rupessof100:" .$rupessof2."<br>";
?>


