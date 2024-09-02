<?php
    echo " digite a medida da base do retangulo";
    $base = readline();

    echo " digite a medida da altura do retangulo";
    $altura = readline();

    $perimetro = $base * 2 + $altura * 2;
    echo " esse é o perimetro do retangulo: $perimetro \n";

    $area = $base * $altura;
    echo "a area do retangulo é de: $area \n ";

    $diagonal = sqrt($base**2 + $altura**2);
    echo "o valor da diagonal do retangulo é: $diagonal";

    ?>




