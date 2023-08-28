<?php
require('./models/employeeModel.php');

class employeesController
{
    private $model;

    function __construct()
    {
        $this->model = new employeeModel();
    }

    function getAllDentists($page = 1, $perPage = 13)
    {
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $totalRecords = $this->model->getTotalDentists();
        $totalPages = ceil($totalRecords / $perPage);
        $offset = ($currentPage - 1) * $perPage;
        $resultData = $this->model->getDentistsByPage($offset, $perPage);

        include __DIR__ . '/../../public/home.php';
    }

    function getAllAdms($page = 1, $perPage = 13)
    {
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $totalRecords = $this->model->getTotalAdms();
        $totalPages = ceil($totalRecords / $perPage);
        $offset = ($currentPage - 1) * $perPage;
        $resultData = $this->model->getAdmsByPage($offset, $perPage);

        include __DIR__ . '/../../public/home.php';
    }

    function getAllSecretariats($page = 1, $perPage = 13)
    {
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $totalRecords = $this->model->getTotalSecretariats();
        $totalPages = ceil($totalRecords / $perPage);
        $offset = ($currentPage - 1) * $perPage;
        $resultData = $this->model->getSecretariatsByPage($offset, $perPage);

        include __DIR__ . '/../../public/home.php';
    }

    function insertEmployee()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['employeeNameInput'];
            $nascimento = $_POST['employeeDateInput'];
            $cpf = str_replace(['.', '-', '_'], '', $_POST['employeeCPFInput']);
            $cro = str_replace(['.', '-', '_'], '', $_POST['employeeCROInput']);
            $telefone = str_replace(['(', '-', ')'], '', $_POST['employeePhoneInput']);
            $email = $_POST['employeeEmailInput'];
            $endereco = $_POST['employeeAddressInput'];
            $cargo = $_POST['employeeCargoInput'];
            $login = $_POST['employeeLoginInput'];
            $senha = $_POST['employeePasswordInput'];

            $this->model->insertUser($nome, $nascimento, $cpf, $cro, $telefone, $email, $endereco, $cargo, $login, $senha);

            header('Location: index.php');
            exit;
        }
    }

    function getEmployee()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $user = $this->model->getEmployee($id);
            header('Content-Type: application/json');
            echo json_encode($user);
            exit;
        }
    }

    function updateDentist()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['editDentistEmployeeNameInput'];
            $nascimento = $_POST['editDentistEmployeeDateInput'];
            $cpf = str_replace(['.', '-', '_'], '', $_POST['editDentistEmployeeCPFInput']);
            $cro = str_replace(['.', '-', '_'], '', $_POST['editDentistEmployeeCROInput']);
            $telefone = str_replace(['(', '-', ')'], '', $_POST['editDentistEmployeePhoneInput']);
            $email = $_POST['editDentistEmployeeEmailInput'];
            $endereco = $_POST['editDentistEmployeeAddressInput'];
            $cargo = $_POST['editDentistEmployeeCargoInput'];
            $login = $_POST['editDentistEmployeeLoginInput'];
            $senha = $_POST['editDentistEmployeePasswordInput'];

            $this->model->updateEmployee($id, $nome, $nascimento, $cpf, $cro, $telefone, $email, $endereco, $cargo, $login, $senha);

            $response = [
                'status' => 'success',
                'message' => 'Dentista atualizado com sucesso'
            ];
            echo json_encode($response);
            exit;
        }
    }

    function updateAdm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['editAdmEmployeeNameInput'];
            $nascimento = $_POST['editAdmEmployeeDateInput'];
            $cpf = str_replace(['.', '-', '_'], '', $_POST['editAdmEmployeeCPFInput']);
            $cro = str_replace(['.', '-', '_'], '', $_POST['editAdmEmployeeCROInput']);
            $telefone = str_replace(['(', '-', ')'], '', $_POST['editAdmEmployeePhoneInput']);
            $email = $_POST['editAdmEmployeeEmailInput'];
            $endereco = $_POST['editAdmEmployeeAddressInput'];
            $cargo = $_POST['editAdmEmployeeCargoInput'];
            $login = $_POST['editAdmEmployeeLoginInput'];
            $senha = $_POST['editAdmEmployeePasswordInput'];

            $this->model->updateEmployee($id, $nome, $nascimento, $cpf, $cro, $telefone, $email, $endereco, $cargo, $login, $senha);

            $response = [
                'status' => 'success',
                'message' => 'Administrador atualizado com sucesso'
            ];
            echo json_encode($response);
            exit;
        }
    }

    function updateSecretary()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['editSecretaryEmployeeNameInput'];
            $nascimento = $_POST['editSecretaryEmployeeDateInput'];
            $cpf = str_replace(['.', '-', '_'], '', $_POST['editSecretaryEmployeeCPFInput']);
            $cro = str_replace(['.', '-', '_'], '', $_POST['editSecretaryEmployeeCROInput']);
            $telefone = str_replace(['(', '-', ')'], '', $_POST['editSecretaryEmployeePhoneInput']);
            $email = $_POST['editSecretaryEmployeeEmailInput'];
            $endereco = $_POST['editSecretaryEmployeeAddressInput'];
            $cargo = $_POST['editSecretaryEmployeeCargoInput'];
            $login = $_POST['editSecretaryEmployeeLoginInput'];
            $senha = $_POST['editSecretaryEmployeePasswordInput'];

            $this->model->updateEmployee($id, $nome, $nascimento, $cpf, $cro, $telefone, $email, $endereco, $cargo, $login, $senha);

            $response = [
                'status' => 'success',
                'message' => 'Secretária atualizada com sucesso'
            ];
            echo json_encode($response);
            exit;
        }
    }

    function deleteEmployee()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $this->model->deleteEmployee($id);
            header('Location: index.php');
            exit;
        }
    }
}
