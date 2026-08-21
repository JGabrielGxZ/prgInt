<?php
    $resultado = 5;
    $numA = $resultado;
    $valor = $numA;
    
    for ($i=$resultado - 1; $i > 0; $i--) { 
        $valor = $valor . " x " . $i;
        $resultado = $resultado * $i;
        
    }

    echo $numA . "!" . " = " .  $valor . " = " . $resultado;
?>