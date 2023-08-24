<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="newAdmModal" tabindex="-1" aria-labelledby="newAdmModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel"><i class="fa-solid fa-user-cog"></i> Cadastrar administrador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="newScheduleForm" class="needs-validation" novalidate action="index.php?a=insertEmployee&c=e" method="post">
          <div class="mb-3">
            <label for="employeeNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="employeeNameInput" name="employeeNameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="employeeDateInput" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="employeeDateInput" name="employeeDateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data de nascimento.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="employeeCPFInput" class="form-label">CPF</label>
              <input type="text" class="form-control" id="employeeCPFInput" name="employeeCPFInput" required placeholder="Digite o CPF">
              <div class="invalid-feedback">
                Por favor, digite o CPF.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="employeePhoneInput" class="form-label">Celular</label>
              <input type="text" class="form-control" id="employeePhoneInput" name="employeePhoneInput" placeholder="Digite o celular" required>
              <div class="invalid-feedback">
                Por favor, digite o celular.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="employeeEmailInput" class="form-label">Email</label>
              <input type="text" class="form-control" id="employeeEmailInput" name="employeeEmailInput" placeholder="Digite o email" required>
              <div class="invalid-feedback">
                Por favor, digite o email.
              </div>
            </div>
            <div class="mb-3">
            <label for="employeeAddressInput" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="employeeAddressInput" name="employeeAddressInput" placeholder="Digite o endereço" required>
            <div class="invalid-feedback">
              Por favor, digite o endereço.
            </div>
          </div>
            <div class="mb-3">
              <input type="text" class="form-control" value="administrador" id="employeeCargoInput" name="employeeCargoInput" hidden>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="employeeLoginInput" class="form-label">Login</label>
              <input type="text" class="form-control" id="employeeLoginInput" name="employeeLoginInput" placeholder="Digite seu Login" required>
              <div class="invalid-feedback">
                Por favor, digite seu login.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="employeePasswordInput" class="form-label">Senha</label>
              <input type="password" class="form-control" id="employeePasswordInput" name="employeePasswordInput" placeholder="Digite sua senha" required>
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