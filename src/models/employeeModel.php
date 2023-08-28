<?php

  require_once __DIR__ . '/../../configuration/connect.php';

  class employeeModel extends Connect{
    private $table;

    function __construct()
    {
      parent::__construct();
      $this->table = 'funcionarios';
    }

    function getTotalDentists()
    {
      $sqlSelect = $this->connection->query("SELECT COUNT(*) as total FROM $this->table WHERE cargo = 'dentista'");
      $result = $sqlSelect->fetch();
      return $result['total'];
    }

    function getDentistsByPage($offset, $perPage)
    {
      $sqlSelect = $this->connection->query("SELECT * FROM $this->table WHERE cargo = 'dentista' LIMIT $offset, $perPage");
      $resultQuery = $sqlSelect->fetchAll();
      return $resultQuery;
    }

    function getTotalAdms()
    {
      $sqlSelect = $this->connection->query("SELECT COUNT(*) as total FROM $this->table WHERE cargo = 'administrador'");
      $result = $sqlSelect->fetch();
      return $result['total'];
    }

    function getAdmsByPage($offset, $perPage)
    {
      $sqlSelect = $this->connection->query("SELECT * FROM $this->table WHERE cargo = 'administrador' LIMIT $offset, $perPage");
      $resultQuery = $sqlSelect->fetchAll();
      return $resultQuery;
    }

    function getTotalSecretariats()
    {
      $sqlSelect = $this->connection->query("SELECT COUNT(*) as total FROM $this->table WHERE cargo = 'secretaria'");
      $result = $sqlSelect->fetch();
      return $result['total'];
    }

    function getSecretariatsByPage($offset, $perPage)
    {
      $sqlSelect = $this->connection->query("SELECT * FROM $this->table WHERE cargo = 'secretaria' LIMIT $offset, $perPage");
      $resultQuery = $sqlSelect->fetchAll();
      return $resultQuery;
    }

    function insertUser($nome, $nascimento, $cpf, $cro, $telefone, $email, $endereco, $cargo, $login, $senha)
    {
      $sql = "INSERT INTO $this->table (nome, nascimento, cpf, cro, telefone, email, endereco, cargo, login, senha) 
                VALUES (:nome, :nascimento, :cpf,:cro, :telefone, :email, :endereco,:cargo, :login, :senha)";
        
      $stmt = $this->connection->prepare($sql);

      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':nascimento', $nascimento);
      $stmt->bindParam(':cpf', $cpf);
      $stmt->bindParam(':cro', $cro);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':endereco', $endereco);
      $stmt->bindParam(':cargo', $cargo);
      $stmt->bindParam(':login', $login);
      $stmt->bindParam(':senha', $senha);

      $stmt->execute();
    }

    function getEmployee($id) {
      $sql = "SELECT * FROM $this->table WHERE id = :id";
      $stmt = $this->connection->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    function updateEmployee($id, $nome, $nascimento, $cpf, $cro, $telefone, $email, $endereco, $cargo, $login, $senha) {
      $sql = "UPDATE $this->table SET nome = :nome, nascimento = :nascimento, cpf = :cpf, cro = :cro, telefone = :telefone, email = :email, endereco = :endereco, cargo = :cargo, login = :login, senha = :senha WHERE id = :id";
      $stmt = $this->connection->prepare($sql);
      
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':nascimento', $nascimento);
      $stmt->bindParam(':cpf', $cpf);
      $stmt->bindParam(':cro', $cro);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':endereco', $endereco);
      $stmt->bindParam(':cargo', $cargo);
      $stmt->bindParam(':login', $login);
      $stmt->bindParam(':senha', $senha);
    
      $stmt->execute();
    }

    function deleteEmployee($id)
    {
      $sql = "DELETE FROM $this->table WHERE id = :id";
      $stmt = $this->connection->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
    }
  }