<?php

    echo "digite o numero de carros vendidos pelo vendedor:";
    $numCarros = readline();

    echo "digite o valor total de vendas:";
    $valorvendas = readline();

    echo "digite o salario fixo mensal:";
    $fixo = readline();

    echo "digite o valor da comissão. ex: 0.01:";
    $comissao = readline();

    $salario = $fixo + ($numCarros * $comissao) + ($valorvendas * 0.05);
    echo "o salario final é de $salario";

    ?>







