<?php
session_start();
// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
  // Acessa
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'consulti';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  $login = $_POST['login'];
  $senha = $_POST['senha'];

  // print_r('login: ' . $login);
  // print_r('<br>');
  // print_r('Senha: ' . $senha);

  $sql = "SELECT * FROM funcionarios WHERE login = '$login' and senha = '$senha'";

  $result = $conexao->query($sql);

  // print_r($sql);
  // print_r($result);

  if (mysqli_num_rows($result) < 1) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  } else {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('Location: index.php');
  }
} else {
  // Não acessa
  header('Location: login.php');
}
