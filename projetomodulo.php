<?php

$adm = ['admin' => 'admin'];

    
    /*funções para login*/    
        function login($usuario, $senha) {
        global $adm;
        return ($adm[$usuario]) && $adm[$usuario] === $senha;
    }
    
    
    /*logar*/
    
while (true) {
        echo "digite o nome do usuario: ";
        $usuario = readline();
        echo "digite a senha: ";
        $senha = readline();
        
       
         if (login($usuario, $senha)) {
            echo"bem vindo $usuario \n";
        } else {
            echo "Login incorreto\n";
        }
        
    }




?>