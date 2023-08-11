<?php
require('./models/clientModel.php');

class clientsController
{
    private $model;

    function __construct()
    {
        $this->model = new clientModel();
    }

    function getAll($page = 1, $perPage = 13)
    {
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $totalRecords = $this->model->getTotalRecords();
        $totalPages = ceil($totalRecords / $perPage);
        $offset = ($currentPage - 1) * $perPage;
        $resultData = $this->model->getByPage($offset, $perPage);

        include __DIR__ . '/../../public/home.php';
    }

    function insertUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nameInput'];
            $nascimento = $_POST['birthInput'];
            $cpf = str_replace(['.', '-', '_'], '', $_POST['cpfInput']);
            $celular = str_replace(['(', '-', ')'], '', $_POST['phoneInput']);
            $email = $_POST['emailInput'];
            $endereco = $_POST['addressInput'];
            $observacao = $_POST['noteInput'];

            $this->model->insertUser($nome, $nascimento, $cpf, $celular, $email, $endereco, $observacao);

            header('Location: index.php');
            exit;
        }
    }

    function getUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $user = $this->model->getUser($id);
            header('Content-Type: application/json');
            echo json_encode($user);
            exit;
        }
    }

    function updateUserController()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['editNameInput'];
            $nascimento = $_POST['editBirthInput'];
            $cpf = str_replace(['.', '-', '_'], '', $_POST['editCpfInput']);
            $celular = str_replace(['(', '-', ')'], '', $_POST['editPhoneInput']);
            $email = $_POST['editEmailInput'];
            $endereco = $_POST['editAddressInput'];
            $observacao = $_POST['editNoteInput'];

            $this->model->updateUser($id, $nome, $nascimento, $cpf, $celular, $email, $endereco, $observacao);

            $response = [
                'status' => 'success',
                'message' => 'Usuário atualizado com sucesso'
            ];
            echo json_encode($response);
            exit;
        }
    }


    function deleteUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $this->model->deleteUser($id);
            header('Location: index.php');
            exit;
        }
    }
}
