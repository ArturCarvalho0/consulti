<?php
require('./controllers/clientController.php');
require('./controllers/agendaController.php');

$action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';
if($c == 'a'){
  $controller = new agendaController();
}else {
  $controller = new clientsController();
}

$controller->{$action}();

?>