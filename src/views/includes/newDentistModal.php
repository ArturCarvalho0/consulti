<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="newDentistModal" tabindex="-1" aria-labelledby="newDentistModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel"><i class="fa-solid fa-user-md"></i> Cadastrar Dentista</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="newScheduleForm" class="needs-validation" novalidate action="index.php?a=insertNewEmployee&c=a" method="post">
          <div class="mb-3">
            <label for="dentistNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="dentistDateInput" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="dentistDateInput" name="dentistDateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data de nascimento.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dentistCPFInput" class="form-label">CPF</label>
              <input type="text" class="form-control" id="dentistCPFInput" name="dentistCPFInput" required placeholder="Digite o CPF">
              <div class="invalid-feedback">
                Por favor, digite o CPF.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dentistCROInput" class="form-label">CRO</label>
              <input type="text" class="form-control" id="dentistCROInput" name="dentistCROInput" placeholder="Digite o CRO" required>
              <div class="invalid-feedback">
                Por favor, digite o CRO.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dentistPhoneInput" class="form-label">Celular</label>
              <input type="text" class="form-control" id="dentistPhoneInput" name="dentistPhoneInput" placeholder="Digite o celular" required>
              <div class="invalid-feedback">
                Por favor, digite o celular.
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" value="dentista" id="cargoInput" name="cargoInput" hidden>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dentistEmailInput" class="form-label">Email</label>
              <input type="text" class="form-control" id="dentistEmailInput" name="dentistEmailInput" placeholder="Digite o email" required>
              <div class="invalid-feedback">
                Por favor, digite o email.
              </div>
            </div>
          </div>
          
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="dentistLoginInput" class="form-label">Login</label>
              <input type="text" class="form-control" id="dentistLoginInput" name="dentistLoginInput" placeholder="Digite seu Login" required>
              <div class="invalid-feedback">
                Por favor, digite seu login.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="dentistPasswordInput" class="form-label">Senha</label>
              <input type="password" class="form-control" id="dentistPasswordInput" name="dentistPasswordInput" placeholder="Digite sua senha" required>
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