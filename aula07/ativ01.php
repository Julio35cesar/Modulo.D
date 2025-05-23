<?php

class Usuario
{

    public $id;
    public $nome;
    public $email;
    public $senha;


    public function cadastrar($nome, $email, $senha, $usuarios, $cont): array
    {

        if (!$this->email($email, $usuarios)) {
            echo "Email ja cadastrado \n";
            return $usuarios;
        }

        $u = new Usuario();
        $u->id = $cont;
        $u->nome = $nome;
        $u->email = $email;
        $u->senha = $senha;
        $usuarios[] = $u;
        echo "Usuario cadastrado com sucesso!";

        return $usuarios;
    }

    public function email($email, $usuarios)
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
        foreach ($usuarios as $u) {
            echo "--------------------------------- \n";
            echo "ID: " . $u->id . "\n";
            echo "Nome: " . $u->nome . "\n";
            echo "Email: " . $u->email . "\n";
            echo "Senha: " . $u->senha . "\n";
            echo "--------------------------------- \n";
        }
    }
}
