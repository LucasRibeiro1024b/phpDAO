<?php

namespace PhpDAO\DAO;

use PhpDAO\model\Contato;
use PhpDAO\connection\ConnectionFactory;

class ContatoDAO {
    private $connection = null;
    
    public function __construct() {
        $this->connection = ConnectionFactory::getConnection();
    }

    public function adicionaContato(Contato $contato) {
        $query = "INSERT INTO contatos (nome, email, endereco, dataNascimento) 
                  VALUES (:nome, :email, :endereco, :dataNascimento)";
        $statement = $this->connection->prepare($query);
        $statement->bindValue(":nome", $contato->getNome(), \PDO::PARAM_STR);
        $statement->bindValue(":email", $contato->getEmail(), \PDO::PARAM_STR);
        $statement->bindValue(":endereco", $contato->getEndereco(), \PDO::PARAM_STR);
        $statement->bindValue(":dataNascimento", $contato->getDataNascimento(), \PDO::PARAM_STR);
        $statement->execute();
    }

    public function deletaContato(Contato $contato) {
        $query = "DELETE FROM contatos WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindValue(":id", $contato->getId());
        $statement->execute();
    }

    public function atualizaContato(Contato $contato) {
        $query = "UPDATE contatos SET nome = :nome, email = :email, endereco = :endereco, dataNascimento = :datanascimento WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindValue(":nome", $contato->getNome(), \PDO::PARAM_STR);
        $statement->bindValue(":email", $contato->getEmail(), \PDO::PARAM_STR);
        $statement->bindValue(":endereco", $contato->getEndereco(), \PDO::PARAM_STR);
        $statement->bindValue(":datanascimento", $contato->getDataNascimento(), \PDO::PARAM_STR);
        $statement->bindValue(":id", $contato->getId(), \PDO::PARAM_STR);
        $statement->execute();

        return $contato;
    }

    public function show($id) {
        $query = "SELECT * FROM contatos WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();

        $row = $statement->fetch(\PDO::FETCH_ASSOC);

        $contato = new Contato();
        $contato->setId($row["id"]);
        $contato->setNome($row["nome"]);
        $contato->setEmail($row["email"]);
        $contato->setEndereco($row["endereco"]);
        $contato->setDataNascimento($row["dataNascimento"]);

        return $contato;
    }

    public function listContato() {
        $listContato = [];

        $query = "SELECT * FROM contatos";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $contato = new Contato();
            $contato->setId($row['id']);
            $contato->setNome($row['nome']);
            $contato->setEmail($row['email']);
            $contato->setEndereco($row['endereco']);
            $contato->setDataNascimento($row['dataNascimento']);
            
            $listContato[] = $contato;
        }

        return $listContato;
    }

}