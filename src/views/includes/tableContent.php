<?php
$currentPage = isset($page) ? $page : 1;
?>
<!-- Conteudo da pagina -->
<div class="content">
  <div class="container-fluid">
    <div class="table-container">
      <h1 class="table-title"> Lista de Pacientes</h1>
      <hr>
      <div class="d-flex justify-content-between align-items-center search-container">
        <div class="input-divider">
          <div class="input-group">
            <input type="text" id="nomeInput" class="form-control search-input" placeholder="Pesquisar por nome">
            <button class="btn btn-search" onclick="searchByName()">
              <i class="fas fa-search"></i>
            </button>
          </div>
          <div class="input-group">
            <input type="text" id="emailInput" class="form-control search-input" placeholder="Pesquisar por email">
            <button class="btn btn-search" onclick="searchByEmail()">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
        <button class="btn btn-new-user" data-bs-toggle="modal" data-bs-target="#newUserModal">
          <i class="fas fa-user-plus"></i> Novo Paciente
        </button>
      </div>
      <div class="table-responsive rounded">
        <table id="clientTable" class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Nascimento</th>
              <th scope="col" class="text-center">CPF</th>
              <th scope="col" class="text-center">Celular</th>
              <th scope="col">E-mail</th>
              <th scope="col">Endereço</th>
              <th scope="col">Observação</th>
              <th scope="col" class="text-center">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php if (empty($resultData)) : ?>
              <tr>
                <td colspan="9" class="text-center">Não há registros de clientes. <i class="fa-regular fa-face-sad-tear"></i></td>
              </tr>
            <?php else : ?>
              <?php foreach ($resultData as $data) : ?>
                <tr>
                  <td><?= $data['id'] ?></td>
                  <td><?= $data['nome'] ?></td>
                  <td><?= date('d/m/Y', strtotime($data['nascimento'])) ?></td>
                  <td class="text-center text-cpf"><?= $data['cpf'] ?></td>
                  <td class="text-center text-phone"><?= $data['celular'] ?></td>
                  <td><?= $data['email'] ?></td>
                  <td><?= $data['endereco'] ?></td>
                  <td><?= strlen($data['observacao']) > 20 ? substr($data['observacao'], 0, 20) . '...' : $data['observacao'] ?></td>
                  <td>
                    <div class="action-btn d-flex justify-content-between ">
                      <button class="btn btn-primary" onclick="getUserDetails(<?= $data['id'] ?>, 'visualizacao')" data-id="<?= $data['id'] ?>"><i class="fa-solid fa-eye"></i></button>
                      <button class="btn btn-success btn-edit-user" data-id="<?= $data['id'] ?>" onclick="getUserDetails(<?= $data['id'] ?>, 'edicao')"><i class="fas fa-pencil-alt"></i></button>
                      <button class="btn btn-danger" onclick="confirmDelete(<?php echo $data['id']; ?>)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>

        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <?php if ($currentPage > 1) : ?>
              <li class="page-item">
                <a class="page-link" href="?page=<?= $currentPage - 1 ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
              <li class="page-item">
                <a class="page-link <?= $i == $currentPage ? 'active' : '' ?>" href="?page=<?= $i ?>"><?= $i ?></a>
              </li>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages) : ?>
              <li class="page-item">
                <a class="page-link" href="?page=<?= $currentPage + 1 ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>