<?php
require('./controllers/clientController.php');

$action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

$controller = new clientsController();
$controller->{$action}();

?>