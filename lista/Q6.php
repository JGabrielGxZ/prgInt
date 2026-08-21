<?php
    $a = 40;
    $b = 39;
    $c = 40;

    if ($a > $b && $a > $c) {
        $maior = $a;
    } elseif ($b > $a && $b > $c) {
        $maior = $b;
    } elseif ($c > $a && $c > $b) {
        $maior = $c;
    } else {
        $maior = "Pelo menos 2 números são iguais!";
    }
    
    echo $maior;

?>