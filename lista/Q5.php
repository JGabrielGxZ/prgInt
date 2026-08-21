<?php
    $num = 30;


    if ($num%3 == 0 && $num%5 == 0) {
        echo "O Anchieto " . $num . " é multiplo de 5 e de 3!\n";
    } elseif ($num%3 == 0) {
        echo "O Anchieto " . $num . " é multiplo de 3!\n"; 
    } elseif ($num%5 == 0) {
        echo "O Anchieto " . $num . " é multiplo de 5!\n"; 
    } else {
        echo "O Anchieto " . $num . " não é multiplo de 5 e nem de 3!\n";
    }

    

    
    
    

?>