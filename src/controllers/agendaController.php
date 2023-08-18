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

    function updateSchedule()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['viewIdInput'];
            $nome = $_POST['viewNameInput'];
            $consulta = $_POST['viewConsultationInput'];
            $data_consulta = $_POST['viewDateInput'];
            $profissional = $_POST['viewProfessionalInput'];
            $inicio = $_POST['viewStartTimeInput'];
            $fim = $_POST['viewDurationInput'];
            $color = $_POST['viewUrgencyInput'];
            $observacao = $_POST['viewNoteInput'];

            $this->model->updateSchedule($id, $nome, $consulta, $data_consulta, $profissional, $inicio, $fim, $color, $observacao);

            header('Location: index.php?pagina=agenda&c=a');
            exit;
        }
    }

    function getAllSchedules() {
        $resultSchedules = $this->model->getTotalRecords();

        include __DIR__ . '/../../public/home.php';
    }
}
