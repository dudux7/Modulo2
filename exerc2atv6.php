<?php
    echo "digite o primeiro numero: ";
    $num1 = readline();

    echo "digite o segundo numero: ";
    $num2 = readline();

    if ($num1 != $num2) {
        if ($num1 > $num2) {
            echo "o maior numero entre os 2 é o: $num1\n";
        }else{
            echo "o maior numero entre os 2 é o: $num2\n";
        }
    }else {
        echo " digite valores diferentes\n";
    }

    ?>
