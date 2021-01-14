<?php 
    $f = (int)$_POST['f'];
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $y = (int)$_POST['y'];
    $h = (int)$_POST['h'];
    if ($f == 1) {
        $res = $a * $h;
        echo $res;
    } else {
        if ($f == 2) {
            $res = $a * $b * sin($y);
            echo $res;
        } else echo 'error';
    }
?>