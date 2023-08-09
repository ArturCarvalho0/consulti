 // Pesquisar por nome no input
 function searchByName() {
  var searchTerm = document.getElementById('nomeInput').value.toLowerCase();
  var tableRows = document.querySelectorAll('#clientTable tbody tr');

  tableRows.forEach(function(row) {
    var nomeData = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

    if (nomeData.includes(searchTerm)) {
      row.style.display = 'table-row';
    } else {
      row.style.display = 'none';
    }
  });
}

// Pesquisar por email no input
function searchByEmail() {
  var searchTerm = document.getElementById('emailInput').value.toLowerCase();
  var tableRows = document.querySelectorAll('#clientTable tbody tr');

  tableRows.forEach(function(row) {
    var nomeData = row.querySelector('td:nth-child(6)').textContent.toLowerCase();

    if (nomeData.includes(searchTerm)) {
      row.style.display = 'table-row';
    } else {
      row.style.display = 'none';
    }
  });
}

// Máscara de telefone e CPF
$(document).ready(function() {
  $('#cpfInput').mask('000.000.000-00', {
    reverse: true
  });
  $('#phoneInput').mask('(00) 00000-0000');

  $('td.text-cpf').each(function() {
    var cpf = $(this).text();
    $(this).text(cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4"));
  });
  $('td.text-phone').each(function() {
    var phone = $(this).text();
    $(this).text(phone.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3"));
  });
  $('#editCpfInput').mask('000.000.000-00', {
    reverse: true
  });
  $('#editphoneInput').mask('(00) 00000-0000');
});

/* 
  Função que envia uma requisição ajax com o Id e retorna os dados do cliente.
  Podendo mudar de acordo se for "editar" ou apenas "visualizar".   
*/
function getUserDetails(userId, funcao = '') {
  console.log('view', userId)
  $.ajax({
    url: "index.php?a=getUser",
    type: "GET",
    data: {
      id: userId
    },
    dataType: "json",
    success: function(response) {
      $("#editNameInput").val(response.nome);
      $("#editBirthInput").val(response.nascimento);
      $("#editCpfInput").val(response.cpf).mask("000.000.000-00");;
      $("#editPhoneInput").val(response.celular).mask("(00) 0000-0000");;
      $("#editEmailInput").val(response.email);
      $("#editAddressInput").val(response.endereco);
      $("#editNoteInput").val(response.observacao);

      console.log('response', response)
      // Conficional para verificar o tipo de ação na modal
      if (funcao == 'edicao') {
        $("#UserModal").modal("show");
        document.getElementById('modalTitle').innerHTML = 'Editar Cliente';
        $('#UserModal input').prop('disabled', false);
        document.getElementById('editNoteInput').disabled = false;
        document.getElementById('salvarAlteracoesBtn').style.display = 'block';

      } else {
        $("#UserModal").modal("show");
        document.getElementById('modalTitle').innerHTML = 'Visualizar Cliente';
        $('#UserModal input').prop('disabled', true);
        document.getElementById('editNoteInput').disabled = true;
        document.getElementById('salvarAlteracoesBtn').style.display = 'none';
      }

      updateUser(userId);

    },
    error: function(xhr, status, error,) {
      console.log(error)
    }
  });
}

// Função que envia requisição ajax para dar update no cliente
function updateUser(userId) {
  console.log('update', userId)
  $('#editUserForm').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var formData = $(this).serializeArray();

    console.log('form', form)
    console.log('formData', formData)
    formData.push({
      name: 'id',
      value: userId
    });

    $.ajax({
      url: "index.php?a=updateUserController",
      method: 'POST',
      data: formData,
      dataType: 'json',
      success: function(response) {
        Swal.fire({
          title: 'Alterado!',
          text: 'Cliente atualizado com sucesso',
          icon: 'success',
          timer: 1000
        }).then((result) => {
          location.reload();
        });

        $('#userDetailsModal').modal('hide');
      },

      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
}

// Função que exibe uma mensagem de confirmação de exclusão
function confirmDelete(userId) {
  Swal.fire({
    title: 'Tem certeza?',
    text: 'Você tem certeza de que deseja excluir este cliente?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#4e9abf',
    cancelButtonColor: 'rgb(231, 78, 78)',
    confirmButtonText: 'Sim, excluir!',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      deleteUser(userId);
    }
  });
}

// Função que envia uma requisição ajax passando o id para deletar.
function deleteUser(userId) {
  $.ajax({
    type: 'POST',
    url: 'index.php?a=deleteUser',
    data: {
      id: userId
    },
    success: function(response) {
      Swal.fire({
        title: 'Excluído!',
        text: 'Usuário excluído com sucesso.',
        icon: 'success',
        timer: 1000,
      }).then((result) => {
        location.reload();
      });
    },
    error: function(xhr, status, error) {
      Swal.fire({
        title: 'Erro!',
        text: 'Ocorreu um erro ao excluir o usuário.',
        icon: 'error'
      });
    }
  });
}


// Função de "validação de campos" com a classe do bootstrap 
(function() {
  'use strict';

  var forms = document.querySelectorAll('.needs-validation');

  Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();

// Calendário
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: 'prevYear,prev,next,nextYear today',
      center: 'title',
      right: 'dayGridMonth,dayGridWeek,dayGridDay'
    },
    initialDate: '2023-01-12',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2023-01-01'
      },
      {
        title: 'Long Event',
        start: '2023-01-07',
        end: '2023-01-10'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2023-01-09T16:00:00'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2023-01-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2023-01-11',
        end: '2023-01-13'
      },
      {
        title: 'Meeting',
        start: '2023-01-12T10:30:00',
        end: '2023-01-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2023-01-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2023-01-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2023-01-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2023-01-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2023-01-13T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2023-01-28'
      }
    ]
  });

  calendar.render();
});
