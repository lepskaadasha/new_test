<?php 
    $a = (int)$_POST["a"];
    $b = (int)$_POST["b"];
    $res = ((2/($a*$a + 25))+$b)/(sqrt($b) + (($a+$b)/2));
    echo $res;
?>