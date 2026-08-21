<?php 
    $n = 20;
    while ($n >= 0) {
        if ($n%5 == 0 && $n != 0) {
            echo $n . " - é multiplo de 5\n";
        } else {
            echo $n . "\n";
        }
        $n--;
    }

    echo "CONTAGEM ENCERRADA!";
?>