<?php

$user = [ 'Adm' => '1234'];
$log = [];

    while(true){
        if (!isset(['usuario'])){
            echo "Login ";
            $user = readline();
            echo "Senha ";
            $senha = readline();
            echo "Quanto de dinheiro tem no caixa? ";
            $caixa = readline();
            if(login($user, $senha)){
                $_SESSION['usuario'] = $user;
                salvaLog(" Usuario $user logou no sistema");
            }
        }

    }