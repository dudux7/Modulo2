<?php
function MultiploDe4($numero) {
    return $numero % 4 == 0;
}

echo "Digite um número inteiro: ";
$numero = (int)readline();
if (MultiploDe4($numero)) {
    echo "O número é múltiplo de 4.";
} else {
    echo "O número não é múltiplo de 4.";
}
?>