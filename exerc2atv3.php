<?php
    echo "digite o numero de maçãs:";
    $maca = readline();

    if ($maca < 12) {
        $valor = $maca * 1.30;
        echo "o custo total da compra é de: R$ $valor";   
    } else {
        $valorduzia = $maca * 1.00;
        echo "o custo total da compra é de: R$ $valorduzia";
    }
?>