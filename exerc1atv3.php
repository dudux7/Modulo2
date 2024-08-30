<?php
    echo "digite o primeiro numero";
        $a = readline();
    echo "digite o segundo numero";
        $b = readline();
    echo "digite o terceiro numero ";
        $c = readline();
    echo "digite o quarto numero";
        $d = readline();

    $peso1 = 1;
    $peso2 = 2;
    $peso3 = 3;
    $peso4 = 4;

    $mult1 = $a * $peso1;
    $mult2 = $b * $peso2;
    $mult3 = $c * $peso3;
    $mult4 = $d * $peso4;

    $somanum = $mult1 + $mult2 + $mult3 + $mult4;

    $somapeso = $peso1 + $peso2 + $peso3 + $peso4;

    $media = $somanum / $somapeso;

    echo "o resultado é $media"



?>