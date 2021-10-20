<?php

$d = 567;
$y = 0;
$w = 0;

$y = ($d / 365);
$w =(($d % 365) / 7);
$d = ($d - (($y * 365) + ($w)));

echo $y . " Year, " . $w . " Weeks, and " . $d . " Days\n";

?>