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

  function getTotalRecords()
  {
    $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
    $resultQuery = $sqlSelect->fetchAll();
    return $resultQuery;
  }
}
