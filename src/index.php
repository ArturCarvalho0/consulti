<?php

session_start();
print_r($_SESSION);
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['login'];

require('./controllers/client/clientController.php');
require('./controllers/agenda/agendaController.php');
require('./controllers/employee/employeeController.php');

if(!isset($_GET['c'])) {
  $c = '';
}else {
  $c = $_GET['c'];
}

if(!isset($_GET['e'])) {
  $e = '';
}else {
  $e = $_GET['e'];
}

if($c == 'a'){
  $controller = new agendaController();
  $action = !empty($_GET['a']) ? $_GET['a'] : 'getAllSchedules';
} else if ($c == 'e') {
  $controller = new employeesController();
  if($e === 'd') {
    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAllDentists';
  } else if ($e === 'a') {
    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAllAdms';
  } else {
    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAllSecretariats';
  }
} else  {
  $controller = new clientsController();
  $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';
}

$controller->{$action}();
