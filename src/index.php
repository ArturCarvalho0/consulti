<?php
require('./controllers/clientController.php');
require('./controllers/agendaController.php');

if(!isset($_GET['c'])) {
  $c = '';
}else {
  $c = $_GET['c'];
}
$action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';
if($c == 'a'){
  $controller = new agendaController();
}else {
  $controller = new clientsController();
}

$controller->{$action}();

?>