<?php
    $numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];

    $num2 = null;
    $num3 = null;
    foreach ($numeros as $key => $num) {
       if ($num2 < $num) {
            $num2 = $num;
            $num2P = $key;
       }

       if ($num3 == null || $num3 > $num) {
            $num3 = $num;
            $num3P = $key;
       }
    }

    echo "Número maior: $num2\nNúmero menor: $num3\nPosição do maior número: $num2P \nPosição do menor número: $num3P";
?>