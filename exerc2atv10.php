<?php

    echo "digite o valor da compra";
    $valor = (float) readline();

    if ($valor < 20.0) {

        $venda = $valor + $valor * 0.45;
    }elseif ($valor > 20.0) {
        
        $venda = $valor + $valor * 0.30;

    }

    echo "o valor para venda é de $venda";
    