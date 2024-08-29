<?php
    echo "digite o preço original do produto";
    $valorpd = readline();
    $porcent = 0.01;
    $reajuste = $valorpd * $porcent + $valorpd;
    echo" o valor reajustado é de : $reajuste";

?>