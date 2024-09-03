<?php
$soma = 0;
$quantidade = 0;
$valor = null;

while (true) {
    
    echo "Digite um valor (0 para sair): ";
    $valor = (int)readline();
    
    if ($valor == 0) {
        break;
    }
    
    $soma += $valor;
    $quantidade++;
}

$media = $soma / $quantidade;

echo "Somatória: $soma \n";
echo "Média:  $media \n";
echo "Quantidade de valores lidos: $quantidade";
?>