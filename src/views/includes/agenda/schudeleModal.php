<!-- Modal de Agendamento de horário-->
<div class="modal fade" id="schudeleModal" tabindex="-1" aria-labelledby="schudeleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel">Agendar Horário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="newScheduleForm" class="needs-validation" novalidate action="index.php?a=insertSchedule&c=a" method="post">
          <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Digite o nome" required>
            <div class="invalid-feedback">
              Por favor, digite o nome do paciente.
            </div>
          </div>
          <div class="mb-3">
            <label for="consultationInput" class="form-label">Tipo de consulta</label>
            <input type="text" class="form-control" id="consultationInput" name="consultationInput" placeholder="Digite o tipo de consulta" required>
            <div class="invalid-feedback">
              Por favor, digite o tipo de consulta.
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="dateInput" class="form-label">Data da Consulta</label>
              <input type="date" class="form-control" id="dateInput" name="dateInput" required>
              <div class="invalid-feedback">
                Por favor, selecione a data da consulta.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="professionalInput" class="form-label">Profissional</label>
              <select class="form-select" id="professionalInput" name="professionalInput" required>
                <option value="" disabled selected>Selecione um profissional</option>
                <?php
                // Conectar ao banco de dados (substitua com suas credenciais)
                $dbHost = 'Localhost';
                $dbUsername = 'root';
                $dbPassword = '';
                $dbName = 'consulti';
                $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                // Verificar a conexão
                if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }

                // Consultar dentistas
                $sql = "SELECT id, nome FROM funcionarios WHERE cargo LIKE 'dentista'";
                $result = $conn->query($sql);
                print_r($result);

                // Preencher a lista suspensa com os dentistas
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                }

                // Fechar a conexão com o banco de dados
                $conn->close();
            ?>
              </select>
              <div class="invalid-feedback">
                Por favor, selecione um profissional.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="startTimeInput" class="form-label">Horário de início</label>
              <input type="time" class="form-control" id="startTimeInput" name="startTimeInput" required>
              <div class="invalid-feedback">
                Por favor, selecione o horário de início.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="durationInput" class="form-label">Horário de fim</label>
              <input type="time" class="form-control" id="durationInput" name="durationInput" placeholder="Digite a duração" required>
              <div class="invalid-feedback">
                Por favor, digite a duração.
              </div>
            </div>
            <div class="mb-3">
              <label for="urgencyInput" class="form-label">Matriz de Urgência</label>
              <select class="form-select" id="urgencyInput" name="urgencyInput" required>
                <option value="#99cc03">😃 Simples</option>
                <option value="#ffa001">😐 Médio</option>
                <option value="#ff4e4e">😢 Grave</option>
              </select>
            </div>

          </div>
          <div class="mb-3">
            <label for="noteInput" class="form-label">Observação</label>
            <textarea type="text" class="form-control" id="noteInput" name="noteInput" placeholder="Digite uma observação" maxlength="300"></textarea>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Agendar </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>