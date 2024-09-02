<?php
    echo "digite a 1ª nota:";
    $nota1 = readline();

    echo "digite a 2ª nota:";
    $nota2 = readline();

    $media = ($nota1 + $nota2) /2;

    if ($media >= 6.0) {
        echo " parabéns! você foi aprovado, sua média foi de: $media";
    } else {
        echo " que pena, sua média foi de: $media ";
    }

    ?>