<?php
$currentPage = isset($page) ? $page : 1;
?>
<!-- Conteúdo da pagina -->
<div class="content">
  <div class="container-fluid">
    <div class="table-container">
      <div class="actions-buttons">
        <button class="next-patient">Proximo Paciente: Artur - 12:00</button>
        <button class="add-patient"><div>Agendar Horário</div> <div class="icon-circle"><i class="fa-solid fa-user-plus"></i></div></button>
      </div>
      <div id="calendar"></div>
    </div>
  </div>
</div>