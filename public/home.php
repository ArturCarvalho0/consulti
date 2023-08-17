<?php
include('header.php');
if (!isset($_GET['pagina'])) {
  $pagina = "pacientes";
} else {
  $pagina = $_GET['pagina'];
}
?>

<body>
  <div class="container_page">
    <?php require('../src/views/includes/navbar.php') ?>
    <?php
    if ($pagina === "pacientes") {
      require('../src/views/includes/tableContent.php');
    } else {
      require('../src/views/includes/calendar.php');
    }
    ?>
    <?php require('../src/views/includes/schudeleModal.php') ?>
    <?php require('../src/views/includes/viewSchudeleModal.php') ?>
    <?php require('../src/views/includes/newUserModal.php') ?>
    <?php require('../src/views/includes/viewUserModal.php') ?>
  </div>
  <!-- Meu arquivo JS -->
  <script src="/consulti/public/js/script.js"></script>
  <script src="/consulti/public/js/main.js"></script>
  <script src="/consulti/public/js/pt-br.js"></script>

  <script>
    <?php
    if ($pagina === "pacientes") {
      echo "const botao = document.getElementById('patient-tab');";
      echo "botao.classList.add('active');";
    } else {
      echo "const botao = document.getElementById('calendar-tab');";
      echo "botao.classList.add('active');";
    }
    ?>

    // Calendário
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
        headerToolbar: {
          left: 'prevYear,prev,next,nextYear today',
          center: 'title',
          right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        selectable: true,
        select: function(info) {
          $('#schudeleModal #dateInput').val(info.start.toLocaleDateString());
          $('#schudeleModal').modal('show');
        },
        dayMaxEvents: true, // allow "more" link when too many events
        events: [
          <?php foreach ($resultSchedules as $Schedule) : ?>
            {
            id : '<?= $Schedule['id'] ?>',
            title: '<?= $Schedule['nome'] ?>',
            start: '<?= $Schedule['data'] . "T" .$Schedule['inicio']  ?>',
            end: '<?= $Schedule['data'] . "T" .$Schedule['fim']  ?>',
            color: '<?= $Schedule['color'] ?>'
          },
              <?php endforeach; ?>
          
        ],
        eventClick: function(info) {
            var eventId = info.event.id;
            console.log('ID do evento clicado:', eventId);
            $('#viewSchudeleModal').modal('show');
            $.ajax({
                type: 'GET',
                url: 'index.php?a=getSchedule&c=a',
                data: { id: eventId },
                success: function(response) {
                  $("#nameInput").val(response.nome);
                  $("#consultationInput").val(response.consulta);
                  $("#dateInput").val(response.data);
                  $("#professionalInput").val(response.profissional);
                  $("#startTimeInput").val(response.inicio);
                  $("#durationInput").val(response.fim);
                  $("#urgencyInput").val(response.color);
                  $("#noteInput").val(response.observacao);
                    console.log('Resposta da controller:', response);
                },
                error: function(xhr, status, error) {
                    // Lidar com erros aqui
                    console.error('Erro na requisição AJAX:', error);
                }
            });
          }
      });

      calendar.render();
    });
  </script>
</body>

</html>