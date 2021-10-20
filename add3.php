<!-- . WAP to read number of hours, minutes, and seconds and convert them into seconds. -->
<?php
$t_seconds =6023;

$secs =$t_seconds% 60;
$t_min = floor($t_seconds/60);

$min = $t_min%60;

$hours = floor($t_min/60) ;
echo "hours ".$hours." ";
echo "min " .$min." ";
echo "second ".$secs ;
?>

