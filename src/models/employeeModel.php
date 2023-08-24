<?php

  require_once __DIR__ . '/../../configuration/connect.php';

  class employeeModel extends Connect{
    private $table;

    function __construct()
    {
      parent::__construct();
      $this->table = 'funcionarios';
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
  }