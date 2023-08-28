<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="editSecretaryModal" tabindex="-1" aria-labelledby="editSecretaryModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewSecretaryModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="editSecretaryForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="editSecretaryEmployeeNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="editSecretaryEmployeeNameInput" name="editSecretaryEmployeeNameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editSecretaryEmployeeDateInput" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="editSecretaryEmployeeDateInput" name="editSecretaryEmployeeDateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data de nascimento.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editSecretaryEmployeeCPFInput" class="form-label">CPF</label>
              <input type="text" class="form-control" id="editSecretaryEmployeeCPFInput" name="editSecretaryEmployeeCPFInput" required placeholder="Digite o CPF">
              <div class="invalid-feedback">
                Por favor, digite o CPF.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editSecretaryEmployeePhoneInput" class="form-label">Celular</label>
              <input type="text" class="form-control" id="editSecretaryEmployeePhoneInput" name="editSecretaryEmployeePhoneInput" placeholder="Digite o celular" required>
              <div class="invalid-feedback">
                Por favor, digite o celular.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editSecretaryEmployeeEmailInput" class="form-label">Email</label>
              <input type="text" class="form-control" id="editSecretaryEmployeeEmailInput" name="editSecretaryEmployeeEmailInput" placeholder="Digite o email" required>
              <div class="invalid-feedback">
                Por favor, digite o email.
              </div>
            </div>
            <div class="mb-3">
              <label for="editSecretaryEmployeeAddressInput" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="editSecretaryEmployeeAddressInput" name="editSecretaryEmployeeAddressInput" placeholder="Digite o endereço" required>
              <div class="invalid-feedback">
                Por favor, digite o endereço.
              </div>
            </div>
            <div>
              <input type="text" class="form-control" value="secretaria" id="editSecretaryEmployeeCargoInput" name="editSecretaryEmployeeCargoInput" hidden>
            </div>
            <div>
              <input type="text" class="form-control" id="editSecretaryEmployeeCROInput" name="editSecretaryEmployeeCROInput" value="" hidden>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editSecretaryEmployeeLoginInput" class="form-label">Login</label>
              <input type="text" class="form-control" id="editSecretaryEmployeeLoginInput" name="editSecretaryEmployeeLoginInput" placeholder="Digite seu Login" required>
              <div class="invalid-feedback">
                Por favor, digite seu login.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editSecretaryEmployeePasswordInput" class="form-label">Senha</label>
              <input type="password" class="form-control" id="editSecretaryEmployeePasswordInput" name="editSecretaryEmployeePasswordInput" placeholder="Digite sua senha" required>
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