<!-- Modal Novo Cliente -->
<div class="modal fade" id="newUserModal" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel">Novo Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="newUserForm" class="needs-validation" novalidate action="index.php?a=insertUser" method="post">
          <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome.
            </div>
          </div>
          <div class="mb-3">
            <label for="birthInput" class="form-label">Nascimento</label>
            <input type="date" class="form-control" id="birthInput" name="birthInput" required>
            <div class="invalid-feedback">
              Por favor, selecione a data de nascimento.
            </div>
          </div>
          <div class="mb-3">
            <label for="cpfInput" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpfInput" name="cpfInput" placeholder="Digite o CPF" required>
            <div class="invalid-feedback">
              Por favor, digite o CPF.
            </div>
          </div>
          <div class="mb-3">
            <label for="phoneInput" class="form-label">Celular</label>
            <input type="text" class="form-control" id="phoneInput" name="phoneInput" placeholder="Digite o número de celular" required>
            <div class="invalid-feedback">
              Por favor, digite o número de celular.
            </div>
          </div>
          <div class="mb-3">
            <label for="emailInput" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="Digite o e-mail" required>
            <div class="invalid-feedback">
              Por favor, digite um endereço de e-mail válido.
            </div>
          </div>
          <div class="mb-3">
            <label for="addressInput" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="addressInput" name="addressInput" placeholder="Digite o endereço" required>
            <div class="invalid-feedback">
              Por favor, digite o endereço.
            </div>
          </div>
          <div class="mb-3">
            <label for="noteInput" class="form-label">Observação</label>
            <textarea type="text" class="form-control" id="noteInput" name="noteInput" placeholder="Digite uma observação" maxlength="300"></textarea>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>