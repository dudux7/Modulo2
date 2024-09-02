<?php
    echo "digite o seu ano de nascimento: ";
    $anonasc = readline();

    echo "digite o ano atual: ";
    $anoatual = readline();

    $idade = $anoatual - $anonasc;
    echo " você tem $idade anos\n";

    if ($idade > 16) {
        echo "você ja pode votar \n";

        if ($idade >= 18) {
            echo "você ja pode tirar sua habilitação\n";
        }else {
            echo "você ainda é muito novo para tirar sua habilitação\n";
        }
        
    }else {
        echo "idade abaixo da exigida para votar\n";
        echo "você ainda é muito novo para tirar sua habilitação\n";

    }


