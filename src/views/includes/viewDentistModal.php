<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="dentistModal" tabindex="-1" aria-labelledby="newDentistModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewDentistModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="newDentistForm" class="needs-validation" novalidate action="index.php?a=insertEmployee&c=e" method="post">
          <div class="mb-3">
            <label for="editDentistEmployeeNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="editDentistEmployeeNameInput" name="editDentistEmployeeNameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editDentistEmployeeDateInput" class="form-label">Data de Nascimento</label>
              <input type="date" class="form-control" id="editDentistEmployeeDateInput" name="editDentistEmployeeDateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data de nascimento.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editDentistEmployeeCPFInput" class="form-label">CPF</label>
              <input type="text" class="form-control" id="editDentistEmployeeCPFInput" name="editDentistEmployeeCPFInput" required placeholder="Digite o CPF">
              <div class="invalid-feedback">
                Por favor, digite o CPF.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editDentistEmployeeCROInput" class="form-label">CRO</label>
              <input type="text" class="form-control" id="editDentistEmployeeCROInput" name="editDentistEmployeeCROInput" placeholder="Digite o CRO" required>
              <div class="invalid-feedback">
                Por favor, digite o CRO.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editDentistEmployeePhoneInput" class="form-label">Celular</label>
              <input type="text" class="form-control" id="editDentistEmployeePhoneInput" name="editDentistEmployeePhoneInput" placeholder="Digite o celular" required>
              <div class="invalid-feedback">
                Por favor, digite o celular.
              </div>
            </div>
            <div class="mb-3">
            <label for="editDentistEmployeeAddressInput" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="editDentistEmployeeAddressInput" name="editDentistEmployeeAddressInput" placeholder="Digite o endereço" required>
            <div class="invalid-feedback">
              Por favor, digite o endereço.
            </div>
          </div>
            <div class="mb-3">
              <input type="text" class="form-control" value="dentista" id="editDentistEmployeeCargoInput" name="editDentistEmployeeCargoInput" hidden>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editDentistEmployeeEmailInput" class="form-label">Email</label>
              <input type="text" class="form-control" id="editDentistEmployeeEmailInput" name="editDentistEmployeeEmailInput" placeholder="Digite o email" required>
              <div class="invalid-feedback">
                Por favor, digite o email.
              </div>
            </div>
          </div>
          
          <hr>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editDentistEmployeeLoginInput" class="form-label">Login</label>
              <input type="text" class="form-control" id="editDentistEmployeeLoginInput" name="editDentistEmployeeLoginInput" placeholder="Digite seu Login" required>
              <div class="invalid-feedback">
                Por favor, digite seu login.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editDentistEmployeePasswordInput" class="form-label">Senha</label>
              <input type="password" class="form-control" id="editDentistEmployeePasswordInput" name="editDentistEmployeePasswordInput" placeholder="Digite sua senha" required>
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