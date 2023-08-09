<!-- Modal de Edição e Visualização de Cliente -->
<div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            <form id="editUserForm" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="editNameInput" class="form-label">Nome</label>
                <input type="text" class="form-control" id="editNameInput" name="editNameInput" placeholder="Digite o nome" required>
                <div class="invalid-feedback">
                  Por favor, digite o nome.
                </div>
              </div>
              <div class="mb-3">
                <label for="editBirthInput" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="editBirthInput" name="editBirthInput" required>
                <div class="invalid-feedback">
                  Por favor, selecione a data de nascimento.
                </div>
              </div>
              <div class="mb-3">
                <label for="editCpfInput" class="form-label">CPF</label>
                <input type="text" class="form-control" id="editCpfInput" name="editCpfInput" placeholder="Digite o CPF" required>
                <div class="invalid-feedback">
                  Por favor, digite o CPF.
                </div>
              </div>
              <div class="mb-3">
                <label for="editPhoneInput" class="form-label">Celular</label>
                <input type="text" class="form-control" id="editPhoneInput" name="editPhoneInput" placeholder="Digite o número de celular" required>
                <div class="invalid-feedback">
                  Por favor, digite o número de celular.
                </div>
              </div>
              <div class="mb-3">
                <label for="editEmailInput" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="editEmailInput" name="editEmailInput" placeholder="Digite o e-mail" required>
                <div class="invalid-feedback">
                  Por favor, digite um endereço de e-mail válido.
                </div>
              </div>
              <div class="mb-3">
                <label for="editAddressInput" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="editAddressInput" name="editAddressInput" placeholder="Digite o endereço" required>
                <div class="invalid-feedback">
                  Por favor, digite o endereço.
                </div>
              </div>
              <div class="mb-3">
                <label for="editNoteInput" class="form-label">Observação</label>
                <textarea type="text" class="form-control" id="editNoteInput" name="editNoteInput" placeholder="Digite uma observação" maxlength="300"></textarea>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="salvarAlteracoesBtn">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>