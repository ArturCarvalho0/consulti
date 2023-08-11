<?php
include('header.php');
if (!isset($_GET['pagina'])) {
  $pagina = "pacientes";
} else {
  $pagina = $_GET['pagina'];
}
?>

<body>
  <div class="container_page">
    <?php require('../src/views/includes/navbar.php') ?>
    <?php
    if ($pagina === "pacientes") {
      require('../src/views/includes/tableContent.php');
    } else {
      require('../src/views/includes/calendar.php');
    }
    ?>
    <?php require('../src/views/includes/schudeleModal.php') ?>
    <?php require('../src/views/includes/newUserModal.php') ?>
    <?php require('../src/views/includes/viewUserModal.php') ?>
  </div>
  <!-- Meu arquivo JS -->
  <script src="/consulti/public/js/script.js"></script>
  <script src="/consulti/public/js/main.js"></script>
  <script>
    <?php
    if ($pagina === "pacientes") {
      echo "const botao = document.getElementById('patient-tab');";
      echo "botao.classList.add('active');";
    } else{
      echo "const botao = document.getElementById('calendar-tab');";
      echo "botao.classList.add('active');";
    }
    ?>
  </script>
</body>

</html>