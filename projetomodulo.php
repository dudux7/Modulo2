<?php

$i = 0;
$total = 0;
$adm = ['admin' => 'admin'];

    
    /*funções para login*/    
        function login($usuario, $senha) {
        global $adm;
        return ($adm[$usuario]) && $adm[$usuario] === $senha;
    }
    
     /*função de operações*/
     function operações() {
        global $total;
        system('cls');
        echo "Usuário logado\n";
        
        echo "Valor total arrecadado: R$ ". $total. "\n";
       
        echo "1 - Cadastrar novo usuário\n";
        echo "2 - Verificar login\n";
        echo "3 - Deslogar\n";
        
        echo "4 - Vender\n";
      
        echo "5 - Sair do Programa\n";
    }
    
        
        /* funções de venda */
        function venda() {
        global $total, $i;
        system('cls');
        echo "Nome do produto: ";
        $produto = readline();
        echo "Valor do(a) $produto: ";
        $valor = (float)readline();
        $total += $valor;
        $i = $i++;
    }
        
        
        
        /* função para novos usuários */
            function cadastrar() {
            system('cls');
            global $adm;
            
            echo "Digite o nome do novo usuário: ";
            $usuario = readline();
            
            echo "Digite a senha do novo usuário: ";
            $senha = readline();
            
            $adm[$usuario] = $senha;
            echo "Sucesso\n";
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
            echo "Usuário ou senha incorreto\n";
        }
        
        operações();
        echo"Digite a operação desejada: ";
        $operação = readline();
        switch ($operação) {
            case 1:
                cadastrar();
                break;
            case 2:
                verificar();
                break;
            case 3:
                deslogar();
                break;
            case 4:
                venda();
                break;
            case 5:
                break 2; 
            default:
                echo "Opção inválida\n";
        }
    }




?>