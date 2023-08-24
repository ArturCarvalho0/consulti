<?php
require('./models/employeeModel.php');

class employeesController
{
    private $model;

    function __construct()
    {
        $this->model = new employeeModel();
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
}
