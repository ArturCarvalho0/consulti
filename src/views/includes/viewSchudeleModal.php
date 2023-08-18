<div class="modal fade" id="viewSchudeleModal" tabindex="-1" aria-labelledby="schudeleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel">Agendar Horário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="viewScheduleForm" class="needs-validation" action="index.php?a=updateSchedule&c=a" method="post">
          <div>
            <input type="text" id="viewIdInput" name="viewIdInput" hidden>
          </div>
          <div class="mb-3">
            <label for="viewNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="viewNameInput" name="viewNameInput" placeholder="Digite o nome" required disabled>
            <div class="invalid-feedback">
              Por favor, digite o nome do paciente.
            </div>
          </div>
          <div class="mb-3">
            <label for="viewConsultationInput" class="form-label">Tipo de consulta</label>
            <input type="text" class="form-control" id="viewConsultationInput" name="viewConsultationInput" placeholder="Digite o tipo de consulta" required disabled>
            <div class="invalid-feedback">
              Por favor, digite o tipo de consulta.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="viewDateInput" class="form-label">Data da Consulta</label>
              <input type="date" class="form-control" id="viewDateInput" name="viewDateInput" required disabled>
              <div class="invalid-feedback">
                Por favor, selecione a data da consulta.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="viewProfessionalInput" class="form-label">Profissional</label>
              <select class="form-select" id="viewProfessionalInput" name="viewProfessionalInput" required disabled>
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
              <label for="viewStartTimeInput" class="form-label">Horário de início</label>
              <input type="time" class="form-control" id="viewStartTimeInput" name="viewStartTimeInput" required disabled>
              <div class="invalid-feedback">
                Por favor, selecione o horário de início.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="viewDurationInput" class="form-label">Horário de fim</label>
              <input type="time" class="form-control" id="viewDurationInput" name="viewDurationInput" placeholder="Digite a duração" required disabled>
              <div class="invalid-feedback">
                Por favor, digite a duração.
              </div>
            </div>
            <div class="mb-3">
              <label for="viewUrgencyInput" class="form-label">Matriz de Urgência</label>
              <select class="form-select" id="viewUrgencyInput" name="viewUrgencyInput" required disabled>
                <option value="#99cc03">😃 Simples</option>
                <option value="#ffa001">😐 Médio</option>
                <option value="#ff4e4e">😢 Grave</option>
              </select>
            </div>

          </div>
          <div class="mb-3">
            <label for="viewNoteInput" class="form-label">Observação</label>
            <textarea type="text" class="form-control" id="viewNoteInput" name="viewNoteInput" placeholder="Digite uma observação" maxlength="300" disabled></textarea>
          </div>
          <div class="modal-footer">
            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-success" id="enableInputsBtn">Editar</button>
              <button type="submit" class="btn btn-success" disabled id="scheduleBtn" style="display: none;">Agendar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>