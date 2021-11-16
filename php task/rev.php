<!-- WAP to read a number and print its reverse.(using while loop) -->
<?php
$num = $_GET['rev'];
$rev =0;


while($num>1)
{
$rem =$num % 10;
$rev =($rev*10)+$rem;
$num =(int($num/10));

}
echo "reverse number ".$rev;
?>