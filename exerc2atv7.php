<?php
    echo "insira a idade do nadador: ";
    $idade = readline();

    if ($idade > 4 and $idade < 8) {
        echo "a categoria é infantil A\n";

        }elseif ($idade > 7 and $idade < 11) {
            echo "a categoria é infantil B\n";

        }elseif ($idade > 10 and $idade < 14) {
            echo "a categoria é juvenil A\n";

        }elseif ($idade > 13 and $idade < 18) {
            echo "a categoria é juvenil B\n";

        }elseif ($idade > 17 ) {
            echo "a categoria é sênior\n";
        }

    ?>