<?php

include 'ativ01.php';


$cont = 1;
$usuarios = [];
$op = 0;
$u = new Usuario();

while ($op != 6) {
    echo "Bem-vindo ao sistema de usuários! \n";
    echo "Escolha uma opção: \n";
    echo "1 - Cadastrar Usuário \n";
    echo "2 - Mostrar Todos os Usuários \n";
    echo "3 - Remover Usuário \n";
    echo "4 - Buscar Usuário por Email \n";
    echo "5 - Alterar Usuário \n";
    echo "6 - Sair \n";
    $op = readline();

    switch ($op) {
        case 1:
            echo "Informe seu nome: ";
            $n = readline();
            echo "Informe seu email: ";
            $e = readline();
            echo "Informe sua senha: ";
            $s = readline();

            $usuarios = $u->cadastrar($n, $e, $s, $usuarios, $cont);
            break;

        case 2:
            $u->mostrar($usuarios);
            break;

        case 3:
            echo "Digite o email do usuário que deseja remover: ";
            $email = readline();
            $usuarios = $u->remover($email, $usuarios);
            break;

        case 4:
            echo "Digite o email do usuário que deseja buscar: ";
            $email = readline();
            $u->buscar($email, $usuarios);
            break;


        case 5:
            echo "Digite o email do usuário que deseja alterar: ";
            $email = readline();
            $usuarios = $u->alterar($email, $usuarios); 
            break;

        case 6:
            echo "Saindo... \n";
            exit;

        default:
            echo "Opção inválida! \n";
    }
}
