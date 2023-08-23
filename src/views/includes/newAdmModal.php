<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="newAdmModal" tabindex="-1" aria-labelledby="newAdmModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel">Cadastrar Administrador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="newScheduleForm" class="needs-validation" novalidate action="index.php?a=insertSchedule&c=a" method="post">
          <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome do paciente.
            </div>
          </div>
          <div class="mb-3">
            <label for="consultationInput" class="form-label">Tipo de consulta</label>
            <input type="text" class="form-control" id="consultationInput" name="consultationInput" placeholder="Digite o tipo de consulta" required>
            <div class="invalid-feedback">
              Por favor, digite o tipo de consulta.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="dateInput" class="form-label">Data da Consulta</label>
              <input type="date" class="form-control" id="dateInput" name="dateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data da consulta.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="professionalInput" class="form-label">Profissional</label>
              <select class="form-select" id="professionalInput" name="professionalInput" required>
                <option value="" disabled selected>Selecione um profissional</option>
                <option value="profissional1">Dentista 1</option>
                <option value="profissional2">Dentista 2</option>
                <option value="profissional3">Dentista 3</option>
                <!-- Adicione mais opções conforme necessário -->
              </select>
              <div class="invalid-feedback">
                Por favor, selecione um profissional.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="startTimeInput" class="form-label">Horário de início</label>
              <input type="time" class="form-control" id="startTimeInput" name="startTimeInput" required>
              <div class="invalid-feedback">
                Por favor, selecione o horário de início.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="durationInput" class="form-label">Horário de fim</label>
              <input type="time" class="form-control" id="durationInput" name="durationInput" placeholder="Digite a duração" required>
              <div class="invalid-feedback">
                Por favor, digite a duração.
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" value="administrador" id="cargoInput" name="cargoInput" hidden>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="startTimeInput" class="form-label">Login</label>
              <input type="text" class="form-control" id="startTimeInput" name="startTimeInput" placeholder="Digite seu Login" required>
              <div class="invalid-feedback">
                Por favor, digite seu login.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="durationInput" class="form-label">Senha</label>
              <input type="password" class="form-control" id="durationInput" name="durationInput" placeholder="Digite sua senha" required>
              <div class="invalid-feedback">
                Por favor, digite a sua senha.
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Agendar </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>