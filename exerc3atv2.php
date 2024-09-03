<?php
$soma = 0;
$quantidade = 10;

for ($i = 0; $i < $quantidade; $i++) {
    $valor = (int)readline("Digite o valor " . ($i + 1) . ": ");
    $soma += $valor;
}

$media = $soma / $quantidade;

echo "Somatória: $soma \n";
echo "Média: $media";

?>