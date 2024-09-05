<?php

    $adm = ['admin' => 'admin'];
    $log = [];

/*funções para login*/    
        function login($usuario, $senha) {
            global $adm;
            return ($adm[$usuario]) && $adm[$usuario] === $senha;
        }

/*função de operações*/
        function operações() {
                system('clear');
                echo "Usuário logado\n";
                echo "\n";
                echo "\n";
                echo "1 - Cadastrar novo usuário\n";
                echo "2 - Verificar\n";
                echo "3 - Vender\n";
                echo "4 - deslogar\n";
        }

/* funções de venda */
        function venda() {
            global $total;
                system('clear');
                echo "Nome do produto: ";
                $produto = readline();
                echo "Valor do(a) $produto: ";
                $valor = (float)readline();
            addLog( "venda do produto $produto. R$ $valor");
        }

/* função para novos usuários */
        function cadastrar() {
            global $adm;
                system('clear');
                echo "Digite o nome do novo usuário: ";
                $usuario = readline();
                echo "Digite a senha do novo usuário: ";
                $senha = readline();
                $adm[$usuario] = $senha;
                echo "Sucesso\n";
            addLog( "Usuario $adm $usuario cadastrado");
        }

/*função para verificar logs*/
        function verificar(){
            system('clear');
            global $log;
                foreach ($log as $entrada){
                    echo $entrada;
                }
                echo " Precione ENTER para voltar \n";
                fgets(STDIN);
            
        } 

/*função para adicionar logs*/
        function addLog($sms){
            global $log;
                $log [] = date('d/m/Y H:i:s') . $sms . "\n";
        }
    
/*codigo*/
/*login*/
        while (true) {
            $i = 0;
            echo "digite o nome do usuario: ";
            $usuario = readline();
            echo "digite a senha: ";
            $senha = readline();

        /* usuario entra no sistema ou não*/
                if (login($usuario, $senha,)) {
                    echo"bem vindo $usuario \n";
                    addLog( "Usuario $usuario logado");

                /*menu*/
                        while ($i == 0) {
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
                                        venda();
                                        break;
                                    case 4:
                                        system('clear');
                                        addLog( "Usuario $usuario deslogado");
                                        break 2; 
                                    default:
                                        echo "Opção inválida\n";
                                }
                        }
            

                }else {
                    echo "Usuário ou senha incorreto\n";
                }
        }
?>