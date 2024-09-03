<?php

echo "Digite o primeiro número: ";
$inicio = (int)readline();

echo "Digite o segundo número: ";
$fim = (int)readline();

$soma = 0;

    for ($i = $inicio + 1; $i < $fim; $i++) {
        $soma += $i;
    }
    

echo "Soma dos números entre $inicio e $fim é: $soma";
?>