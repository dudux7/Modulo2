<?php
function soma($a, $b) {
    return $a + $b;
}

function subtracao($a, $b) {
    return $a - $b;
}

function multiplicacao($a, $b) {
    return $a * $b;
}

function divisao($a, $b) {
    if ($b == 0) {
        return "Erro";
    }
    return $a / $b;
}
echo "Escolha a operação (1 - Soma, 2 - Subtração, 3 - Multiplicação, 4 - Divisão): ";
$operacao = readline();

echo "Digite o primeiro número: ";
$num1 = (int)readline();

echo "Digite o segundo número: ";
$num2 = (int)readline();



switch ($operacao) {
    case 1:
        $result = soma($num1, $num2);
        break;
    case 2:
        $result = subtracao($num1, $num2);
        break;
    case 3:
        $result = multiplicacao($num1, $num2);
        break;
    case 4:
        $result = divisao($num1, $num2);
        break;

}

echo "Resultado: $result";
?>