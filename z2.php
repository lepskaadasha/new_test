<?php 
    $res = 0;
    $a1 = (int)$_POST["a1"];
    $a2 = (int)$_POST["a2"];
    $a3 = (int)$_POST["a3"];
    $res += $a2;
    if ($a1 == 24) $res++;
    if ($a3 == 3) $res ++;
    echo $res;
?>