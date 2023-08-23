<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="newSecretaryModal" tabindex="-1" aria-labelledby="newSecretaryModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel"><i class="fa-solid fa-user-clock"></i> Cadastrar Secretária</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="newScheduleForm" class="needs-validation" novalidate action="index.php?a=insertNewEmployee&c=a" method="post">
          <div class="mb-3">
            <label for="secretaryNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="secretaryNameInput" name="secretaryNameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="secretaryDateInput" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="secretaryDateInput" name="secretaryDateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data de nascimento.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="secretaryCPFInput" class="form-label">CPF</label>
              <input type="text" class="form-control" id="secretaryCPFInput" name="secretaryCPFInput" required placeholder="Digite o CPF">
              <div class="invalid-feedback">
                Por favor, digite o CPF.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="secretaryPhoneInput" class="form-label">Celular</label>
              <input type="text" class="form-control" id="secretaryPhoneInput" name="secretaryPhoneInput" placeholder="Digite o celular" required>
              <div class="invalid-feedback">
                Por favor, digite o celular.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="secretaryEmailInput" class="form-label">Email</label>
              <input type="text" class="form-control" id="secretaryEmailInput" name="secretaryEmailInput" placeholder="Digite o email" required>
              <div class="invalid-feedback">
                Por favor, digite o email.
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" value="secretaria" id="cargoInput" name="cargoInput" hidden>
            </div>
            
          </div>
          
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="secretaryLoginInput" class="form-label">Login</label>
              <input type="text" class="form-control" id="secretaryLoginInput" name="secretaryLoginInput" placeholder="Digite seu Login" required>
              <div class="invalid-feedback">
                Por favor, digite seu login.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="secretaryPasswordInput" class="form-label">Senha</label>
              <input type="password" class="form-control" id="secretaryPasswordInput" name="secretaryPasswordInput" placeholder="Digite sua senha" required>
              <div class="invalid-feedback">
                Por favor, digite a sua senha.
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>