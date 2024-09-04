<?php

    $vetor = [];
    $numeros = 0;
    $a = 0;

    for ($i=0; $i < 10 ; $i++) {
        echo "digite um número positivo". $i +1 .":";
        $numeros = readline();

        if ($numeros > 0) {
            $vetor[]  = $numeros;
            
        } else {
            echo "erro número negativo!";
        }
        
        
    }

    $maior = $vetor[0];
    $posição = 0;

    while ($a <= 10) {
        if ($vetor[$numeros] > $maior) {
            $maior = $vetor[$numeros];
            $posição = $numeros;

        }
        $a++;
    }
    echo "o maior valor é: $maior. \n";
    echo "a posição dele é: $posição. \n";
