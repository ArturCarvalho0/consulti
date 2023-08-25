<?php
$currentPage = isset($page) ? $page : 1;
?>
<!-- Conteúdo da pagina -->
<div class="content">
  <div class="container-fluid">
    <div class="table-container-agenda">
      <div class="actions-buttons">
        <div class="table-container-title-calendar">
          <h1 class="table-title"><i class="fa-solid fa-calendar"></i> Agenda de Pacientes</h1>
        </div>

        <button class="add-patient" data-bs-toggle="modal" data-bs-target="#schudeleModal">
          <div>Agendar Horário</div>
          <div class="icon-circle"><i class="fa-solid fa-user-plus"></i></div>
        </button>
      </div>
      <div class="container-calendar">
        <div id="calendar"></div>
      </div>
    </div>
  </div>
</div>