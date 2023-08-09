<?php

  require __DIR__ . '/../../configuration/connect.php';

  class clientModel extends Connect{
    private $table;

    function __construct()
    {
      parent::__construct();
      $this->table = 'clientes';
    }

    function getTotalRecords()
    {
      $sqlSelect = $this->connection->query("SELECT COUNT(*) as total FROM $this->table");
      $result = $sqlSelect->fetch();
      return $result['total'];
    }

    function getByPage($offset, $perPage)
    {
      $sqlSelect = $this->connection->query("SELECT * FROM $this->table LIMIT $offset, $perPage");
      $resultQuery = $sqlSelect->fetchAll();
      return $resultQuery;
    }

    function insertUser($nome, $nascimento, $cpf, $celular, $email, $endereco, $observacao)
    {
      $sql = "INSERT INTO $this->table (nome, nascimento, cpf, celular, email, endereco, observacao) 
                VALUES (:nome, :nascimento, :cpf, :celular, :email, :endereco, :observacao)";
        
      $stmt = $this->connection->prepare($sql);

      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':nascimento', $nascimento);
      $stmt->bindParam(':cpf', $cpf);
      $stmt->bindParam(':celular', $celular);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':endereco', $endereco);
      $stmt->bindParam(':observacao', $observacao);

      $stmt->execute();
    }

    function getUser($id) {
      $sql = "SELECT * FROM $this->table WHERE id = :id";
      $stmt = $this->connection->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    function updateUser($id, $nome, $nascimento, $cpf, $celular, $email, $endereco, $observacao) {
      $sql = "UPDATE $this->table SET nome = :nome, nascimento = :nascimento, cpf = :cpf, celular = :celular, email = :email, endereco = :endereco, observacao = :observacao WHERE id = :id";
      $stmt = $this->connection->prepare($sql);
    
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':nascimento', $nascimento);
      $stmt->bindParam(':cpf', $cpf);
      $stmt->bindParam(':celular', $celular);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':endereco', $endereco);
      $stmt->bindParam(':observacao', $observacao);
    
      $stmt->execute();
    }

    function deleteUser($id)
    {
      $sql = "DELETE FROM $this->table WHERE id = :id";
      $stmt = $this->connection->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
    }
  }
