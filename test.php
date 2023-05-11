<?php
    $tmp="";
    $a = ["TK01","TK02","TK03","TK90","TK04"];
    foreach ($a as $b) {
        if ($b > $tmp) {
            $tmp = $b;
        }
    }
    echo $tmp;
    $count = substr($tmp,-2);
    echo var_dump($count);
    $int = intval($count);
    echo var_dump($int);
    $int = $int + 1;
    echo "TK".$int;
?>