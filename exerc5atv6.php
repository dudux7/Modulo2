<?php
function pesoIdeal($altura, $sexo) {
    if ($sexo == 'm') {
        return 72.7 * $altura - 58;
    } elseif ($sexo == 'f') {
        return 62.1 * $altura - 44.7;
    } else {
        return "Sexo inválido.";
    }
}

echo "Digite a altura em metros: ";
$altura = (float)readline();

echo "Digite o sexo (m/f): ";
$sexo = readline();

$peso = pesoIdeal($altura, $sexo);
    echo "Peso ideal: $peso kg" ;
?>
