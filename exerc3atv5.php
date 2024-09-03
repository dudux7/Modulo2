<?php
$maior = PHP_INT_MIN;
$menor = PHP_INT_MAX;
$valor = null;

while (true) {
    echo "Digite um valor (0 para sair): ";
    $valor = (int)readline();
    
    if ($valor == 0) {
        break;
    }
    
    if ($valor > $maior) {
        $maior = $valor;
    }
    
    if ($valor < $menor) {
        $menor = $valor;
    }
}

echo "Maior valor: $maior \n";
echo "Menor valor: $menor \n ";
?>