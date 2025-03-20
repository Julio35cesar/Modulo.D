<?php

class Usuario
{

    public $id;
    public $nome;
    public $email;
    public $senha;


    public function db()
    {

        return $db = new PDO('sqlite:Database.sqlite');
    }

    public function cadastrar($n, $e, $s)
    {

        if ($this->deletarEmail($e)) {
            echo "Email deletado \n ";
            return null;
        }
        if ($this->verificaEmail($e)) {
            echo "Email ja cadastrado! \n";
            return null;
        }


        $query = $this->db()->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $query->execute(['nome' => $n, 'email' => $e, 'senha' => $s]);


        echo "Usuario cadastrado com sucesso! \n";
    }


    public function verificaEmail($email)
    {

        $query = $this->db()->prepare("select * from usuarios where email = :email");
        return $query->execute(['email' => $email]);
    }
    public function deletarEmail($email)
    {

        $query = $this->db()->prepare("select * from usuarios where email = :email");
        return $query->execute(['email' => $email]);
    }
}
