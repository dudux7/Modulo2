<?php
function somaDivisiveis($a, $b, $c) {
    $soma = 0;
    for ($i = $b; $i <= $c; $i++) {
        if ($i % $a == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

echo "Digite o valor de a (a maior que 1): ";
$a = (int)readline();

echo "Digite o valor de b: ";
$b = (int)readline();

echo "Digite o valor de c: ";
$c = (int)readline();

echo "Soma dos números divisíveis por $a entre $b e $c é: " . somaDivisiveis($a, $b, $c);
?>