<?php
include('header.php');
?>
<body>
  <div class="container_page">
    <?php require('../src/views/includes/navbar.php')?>
    <?php require('../src/views/includes/calendar.php')?>
    <?php require('../src/views/includes/newUserModal.php')?>
    <?php require('../src/views/includes/viewUserModal.php')?>
  </div>
  <!-- Meu arquivo JS -->
  <script src="/consulti/public/js/script.js"></script>
  <script src="/consulti/public/js/index.global.min.js"></script>
</body>

</html>