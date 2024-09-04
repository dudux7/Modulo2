<?php

    $vetor = [];
    $negativo = 0;
    $positivo = 0;
    $par = 0;
    $impar = 0;

    for ($i=0; $i < 10; $i++) { 
        echo "digite um numero". $i +1 .":";
        $vetor[$i] = readline();
        if ($vetor[$i] < 0) {
            $negativo++;
        } else {
            $positivo++;
        }
        if ($vetor[$i] % 2 == 0) {
            $par++;
        } else {
            $impar++;
        }
        
    }
        echo "Quantidade de números negativos que foram digitados: $negativo \n";
        echo "Quantidade de números positivos que foram digitados: $positivo \n";
        echo "Quantidade de números pares que foram digitados: $par \n";
        echo "Quantidade de números impares que foram digitados: $impar \n";
    ?>