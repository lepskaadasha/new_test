<?php 
    $a = (int)$_POST["a"];
    $b = (int)$_POST["b"];
    $res = ((2/($a*$a - 1000))+$b)/(($b) + (($a*$b)/10));
    echo $res;
?>