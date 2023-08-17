<?php
require('./models/agendaModel.php');

class agendaController
{
    private $model;

    function __construct()
    {
        $this->model = new agendaModel();
    }

    function insertSchedule()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nameInput'];
            $consulta = $_POST['consultationInput'];
            $data_consulta =$_POST['dateInput'];
            $profissional = $_POST['professionalInput'];
            $inicio = $_POST['startTimeInput'];
            $fim = $_POST['durationInput'];
            $color = $_POST['urgencyInput'];
            $observacao = $_POST['noteInput'];

            $this->model->insertSchedule($nome, $consulta, $data_consulta, $profissional, $inicio, $fim, $color, $observacao);

            header('Location: index.php?pagina=agenda&c=a');
            exit;
        }
    }

    function getSchedule(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $schudele = $this->model->getSchedule($id);
            header('Content-Type: application/json');
            echo json_encode($schudele);
            exit;
        }
    }

    function getAllSchedules() {
        $resultSchedules = $this->model->getTotalRecords();

        include __DIR__ . '/../../public/home.php';
    }
}
