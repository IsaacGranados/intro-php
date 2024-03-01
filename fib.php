<?php
$limite=30;
$a=0;
$b=1;
$auxuliar;
echo"serie de fibonacci\n";
for ($i=0; $i < $limite ; $i++) { 
    $auxuliar=$a;
    $a=$b;
$b=$auxuliar + $a;
echo"-- $a\n";
}
?>