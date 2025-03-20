<?php

include 'Usuario.php'; 
$u = new Usuario(); 
$op = 0; 
while ($op != 6) {
    echo "Bem-vindo ao sistema de usuários! \n";
    echo "Escolha uma opção: \n";
    echo "1 - Cadastrar Usuário \n";
    echo "2 - Mostrar Todos os Usuários \n";
    echo "3 - Remover Usuário \n";
    echo "4 - Buscar Usuário por Email \n";
    echo "5 - Alterar Usuário \n";
    echo "6 - Sair \n";
    $op = readline(); // Recebe a opção do usuário

    switch ($op) {
        case 1:
            echo "Informe seu nome: ";
            $n = readline();
            echo "Informe seu email: ";
            $e = readline();
            echo "Informe sua senha: ";
            $s = readline();

            // Chama o método de cadastrar usuário
            $u->cadastrar($n, $e, $s);
            break;

        case 2:
            // Chama o método para exibir todos os usuários
            // $u->mostrar();
            break;

        case 3:
            echo "Digite o email do usuário que deseja remover: ";
            $email = readline();
            // Chama o método de remoção de usuário
            $u->cadast($email);
            break;

        case 4:
            echo "Digite o email do usuário que deseja buscar: ";
            $email = readline();
            // Chama o método para buscar um usuário
            // $u->buscar($email);
            break;

        case 5:
            echo "Digite o email do usuário que deseja alterar: ";
            $email = readline();
            // Chama o método de alteração de dados do usuário
            // $u->alterar($email);
            break;

        case 6:
            echo "Saindo... \n";
            exit; // Encerra o programa

        default:
            echo "Opção inválida! \n";
            break;
    }
}
