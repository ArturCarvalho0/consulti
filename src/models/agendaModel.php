<?php

require_once __DIR__ . '/../../configuration/connect.php';

class agendaModel extends Connect
{
  private $table;

  function __construct()
  {
    parent::__construct();
    $this->table = 'agendamentos';
  }

  function insertSchedule($nome, $consulta, $data_consulta, $profissional, $inicio, $fim, $color, $observacao)
  {
    $sql = "INSERT INTO $this->table (nome, consulta, data, profissional, inicio, fim, color, observacao) 
                VALUES (:nome, :consulta, :data_consulta, :profissional, :inicio, :fim, :color, :observacao)";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':consulta', $consulta);
    $stmt->bindParam(':data_consulta', $data_consulta);
    $stmt->bindParam(':profissional', $profissional);
    $stmt->bindParam(':inicio', $inicio);
    $stmt->bindParam(':fim', $fim);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':observacao', $observacao);

    $stmt->execute();
  }

  function getSchedule($id) {
    $sql = "SELECT * FROM $this->table WHERE id = :id";
    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  function updateSchedule($id, $nome, $consulta, $data_consulta, $profissional, $inicio, $fim, $color, $observacao) {
    $sql = "UPDATE $this->table SET nome = :nome, consulta = :consulta, data = :data_consulta, profissional = :profissional, inicio = :inicio, fim = :fim, color = :color, observacao = :observacao WHERE id = :id";
    $stmt = $this->connection->prepare($sql);
  
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':consulta', $consulta);
    $stmt->bindParam(':data_consulta', $data_consulta);
    $stmt->bindParam(':profissional', $profissional);
    $stmt->bindParam(':inicio', $inicio);
    $stmt->bindParam(':fim', $fim);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':observacao', $observacao);
  
    $stmt->execute();
  }

  function getTotalRecords()
  {
    $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
    $resultQuery = $sqlSelect->fetchAll();
    return $resultQuery;
  }
}
