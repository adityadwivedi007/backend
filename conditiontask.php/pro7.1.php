<!-- cost and selling prize -->
<?php


$costPrice = 1500;
$sellingPrice = 2000;
 
if ($sellingPrice == $costPrice)
    echo "No profit no Loss";
 
else if ($sellingPrice > $costPrice)
    echo Profit($costPrice,$sellingPrice)." Profit ";
 
else
    echo Loss($costPrice, $sellingPrice)." Loss ";
?>
