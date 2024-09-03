<?php

    echo " digite um numero";
    $num = readline();

    if ($num >= 30 and $num <= 90 ) {
        echo "o número $num está entre 30 e 90";
    }elseif ($num > 120) {
        echo "o número $num é maior que 120";
    }else {
        echo "o número $num não se encaixa em nenhuma dessas condições.";
    }

    ?>