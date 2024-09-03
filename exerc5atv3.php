<?php
function Par($numero) {
    return $numero % 2 == 0;
}

echo "Digite um número inteiro: ";
$numero = readline();
if (Par($numero)) {
    echo "O número é par.";
} else {
    echo "O número é ímpar.";
}
?>