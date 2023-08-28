<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="editAdmModal" tabindex="-1" aria-labelledby="editAdmModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewAdmModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="editAdmForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="editAdmEmployeeNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="editAdmEmployeeNameInput" name="editAdmEmployeeNameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editAdmEmployeeDateInput" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="editAdmEmployeeDateInput" name="editAdmEmployeeDateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data de nascimento.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editAdmEmployeeCPFInput" class="form-label">CPF</label>
              <input type="text" class="form-control" id="editAdmEmployeeCPFInput" name="editAdmEmployeeCPFInput" required placeholder="Digite o CPF">
              <div class="invalid-feedback">
                Por favor, digite o CPF.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editAdmEmployeePhoneInput" class="form-label">Celular</label>
              <input type="text" class="form-control" id="editAdmEmployeePhoneInput" name="editAdmEmployeePhoneInput" placeholder="Digite o celular" required>
              <div class="invalid-feedback">
                Por favor, digite o celular.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editAdmEmployeeEmailInput" class="form-label">Email</label>
              <input type="text" class="form-control" id="editAdmEmployeeEmailInput" name="editAdmEmployeeEmailInput" placeholder="Digite o email" required>
              <div class="invalid-feedback">
                Por favor, digite o email.
              </div>
            </div>
            <div class="mb-3">
              <label for="editAdmEmployeeAddressInput" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="editAdmEmployeeAddressInput" name="editAdmEmployeeAddressInput" placeholder="Digite o endereço" required>
              <div class="invalid-feedback">
                Por favor, digite o endereço.
              </div>
            </div>
            <div>
              <input type="text" class="form-control" value="administrador" id="editAdmEmployeeCargoInput" name="editAdmEmployeeCargoInput" hidden>
            </div>
          </div>
          <div>
            <input type="text" class="form-control" id="editAdmEmployeeCROInput" name="editAdmEmployeeCROInput" value="" hidden>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editAdmEmployeeLoginInput" class="form-label">Login</label>
              <input type="text" class="form-control" id="editAdmEmployeeLoginInput" name="editAdmEmployeeLoginInput" placeholder="Digite seu Login" required>
              <div class="invalid-feedback">
                Por favor, digite seu login.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editAdmEmployeePasswordInput" class="form-label">Senha</label>
              <input type="password" class="form-control" id="editAdmEmployeePasswordInput" name="editAdmEmployeePasswordInput" placeholder="Digite sua senha" required>
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