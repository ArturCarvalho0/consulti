<?php
require('./controllers/clientController.php');
require('./controllers/agendaController.php');

if(!isset($_GET['c'])) {
  $c = '';
}else {
  $c = $_GET['c'];
}
if($c == 'a'){
  $controller = new agendaController();
  $action = !empty($_GET['a']) ? $_GET['a'] : 'getAllSchedules';
}else {
  $controller = new clientsController();
  $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';
}

$controller->{$action}();

?>