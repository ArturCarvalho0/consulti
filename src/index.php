<?php
require('./controllers/clientController.php');
require('./controllers/agendaController.php');
require('./controllers/employeeController.php');

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
