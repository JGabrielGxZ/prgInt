<?php 

    $a = 0;
    $b = 1;
    $c;
    echo "$a $b";
    for ($i=0; $i <= 12 ; $i++) { 
        $c = $a + $b;
        $a = $b;
        $b = $c;
        echo " $c";
    }
    
?>
