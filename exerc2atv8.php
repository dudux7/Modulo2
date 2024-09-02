<?php

    echo " digite o preço total: ";
    $preco = readline();

    echo " digite '1' para à vista no dinheiro";
    echo " digite '2' para à vista no cartão";
    echo " digite '3' para fazer em 2 vezes";
    echo " digite '4' para fazer em 3 vezes";
    $metodo = readline();

    if ($metodo = 1) {
        $valor = $preco - $preco * 0.10;
        echo " o valor da compra é de : $valor";
    }elseif ($metodo = 2) {
        $valor = $preco - $preco * 0.05;
        echo " o valor da compra é de : $valor";
    }elseif ($metodo = 3) {
        echo " o valor total é de $preco \n";
        $parcela = $preco/2;
        echo " divido em 2 vezes de $parcela";
    }elseif ($metodo = 4) {
        $valor = $preco + $preco * 0.10;
        echo " o valor total é de $valor \n";
        $parcela = $valor /3;
        echo " dividido em 3 vezes de $parcela";
    }

    ?>
    
    



