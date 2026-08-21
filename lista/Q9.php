<?php 
    $num = 5667;
    for ($i=$num - 1; $i >= 2; $i--) { 
        if ($num%$i == 0) {
            echo "$num não é primo";
            exit;
        }
    }

    echo "$num é primo";
?>