<?php
    echo " digite o valor do salario";
    $salario = readline();

    echo " digite a quantidade de qiulowatts gasta";
    $quilowatts = readline();

    $cemqwatts = $salario / 7;

    $umqwatts = $cemqwatts / 100;
    echo " o valor de cada quilowatts é $umqwatts \n";

    $qwattsgasto = $umqwatts * $quilowatts;
    echo " valor sem desconto $qwattsgasto\n";

    $desconto = $qwattsgasto - 0.10 * $qwattsgasto;
    echo "com desconto de 10% $desconto\n";







?>