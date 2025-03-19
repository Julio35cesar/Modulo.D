<?php

class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function cadastrar($nome, $email, $senha, $usuarios, &$cont): array
    {
        if (!$this->emailDisponivel($email, $usuarios)) {
            echo "Email já cadastrado! \n";
            return $usuarios;
        }

        $u = new Usuario();
        $u->id = $cont++;
        $u->nome = $nome;
        $u->email = $email;
        $u->senha = $senha;
        $usuarios[] = $u;

        echo "Usuário cadastrado com sucesso!\n";
        return $usuarios;
    }

    private function emailDisponivel($email, $usuarios): bool
    {
        foreach ($usuarios as $u) {
            if ($u->email == $email) {
                return false;
            }
        }
        return true;
    }

    public function mostrar($usuarios): void
    {
        if (empty($usuarios)) {
            echo "Nenhum usuário cadastrado! \n";
            return;
        }

        foreach ($usuarios as $u) {
            echo "--------------------------------- \n";
            echo "ID: " . $u->id . "\n";
            echo "Nome: " . $u->nome . "\n";
            echo "Email: " . $u->email . "\n";
            echo "--------------------------------- \n";
        }
    }

    public function remover($email, $usuarios): array
    {
        foreach ($usuarios as $key => $u) {
            if ($u->email == $email) {
                unset($usuarios[$key]);
                echo "Usuário removido com sucesso!\n";
                return array_values($usuarios); // Reorganiza os índices do array
            }
        }
        echo "Usuário não encontrado!\n";
        return $usuarios;
    }

    public function buscar($email, $usuarios): void
    {
        foreach ($usuarios as $u) {
            if ($u->email == $email) {
                echo "Usuário encontrado! \n";
                echo "Nome: " . $u->nome . "\n";
                echo "Email: " . $u->email . "\n";
                return;
            }
        }
        echo "Usuário não encontrado!\n";
    }
}