// Pesquisar por nome no input
function searchByName() {
  var searchTerm = document.getElementById("nomeInput").value.toLowerCase();
  var tableRows = document.querySelectorAll("#clientTable tbody tr");

  tableRows.forEach(function (row) {
    var nomeData = row
      .querySelector("td:nth-child(2)")
      .textContent.toLowerCase();

    if (nomeData.includes(searchTerm)) {
      row.style.display = "table-row";
    } else {
      row.style.display = "none";
    }
  });
}

// Pesquisar por email no input
function searchByEmail() {
  var searchTerm = document.getElementById("emailInput").value.toLowerCase();
  var tableRows = document.querySelectorAll("#clientTable tbody tr");

  tableRows.forEach(function (row) {
    var nomeData = row
      .querySelector("td:nth-child(6)")
      .textContent.toLowerCase();

    if (nomeData.includes(searchTerm)) {
      row.style.display = "table-row";
    } else {
      row.style.display = "none";
    }
  });
}

// Máscara de telefone e CPF
$(document).ready(function () {
  $("#cpfInput").mask("000.000.000-00", {
    reverse: true,
  });
  $("#phoneInput").mask("(00) 00000-0000");

  $("td.text-cpf").each(function () {
    var cpf = $(this).text();
    $(this).text(cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4"));
  });
  $("td.text-phone").each(function () {
    var phone = $(this).text();
    $(this).text(phone.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3"));
  });
  $("#editCpfInput").mask("000.000.000-00", {
    reverse: true,
  });
  $("#editphoneInput").mask("(00) 00000-0000");
});

/* 
  Função que envia uma requisição ajax com o Id e retorna os dados do cliente.
  Podendo mudar de acordo se for "editar" ou apenas "visualizar".   
*/
function getUserDetails(userId, funcao = "") {
  console.log("view", userId);
  $.ajax({
    url: "index.php?a=getUser",
    type: "GET",
    data: {
      id: userId,
    },
    dataType: "json",
    success: function (response) {
      $("#editNameInput").val(response.nome);
      $("#editBirthInput").val(response.nascimento);
      $("#editCpfInput").val(response.cpf).mask("000.000.000-00");
      $("#editPhoneInput").val(response.celular).mask("(00) 0000-0000");
      $("#editEmailInput").val(response.email);
      $("#editAddressInput").val(response.endereco);
      $("#editNoteInput").val(response.observacao);

      console.log("response", response);
      // Conficional para verificar o tipo de ação na modal
      if (funcao == "edicao") {
        $("#UserModal").modal("show");
        document.getElementById("modalTitle").innerHTML = "Editar Cliente";
        $("#UserModal input").prop("disabled", false);
        document.getElementById("editNoteInput").disabled = false;
        document.getElementById("salvarAlteracoesBtn").style.display = "block";
      } else {
        $("#UserModal").modal("show");
        document.getElementById("modalTitle").innerHTML = "Visualizar Cliente";
        $("#UserModal input").prop("disabled", true);
        document.getElementById("editNoteInput").disabled = true;
        document.getElementById("salvarAlteracoesBtn").style.display = "none";
      }

      updateUser(userId);
    },
    error: function (xhr, status, error) {
      console.log(error);
    },
  });
}

// Função que envia requisição ajax para dar update no cliente
function updateUser(userId) {
  console.log("update", userId);
  $("#editUserForm").submit(function (e) {
    e.preventDefault();

    var form = $(this);
    var formData = $(this).serializeArray();

    console.log("form", form);
    console.log("formData", formData);
    formData.push({
      name: "id",
      value: userId,
    });

    $.ajax({
      url: "index.php?a=updateUserController",
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        Swal.fire({
          title: "Alterado!",
          text: "Cliente atualizado com sucesso",
          icon: "success",
          timer: 1000,
        }).then((result) => {
          location.reload();
        });

        $("#userDetailsModal").modal("hide");
      },

      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });
}

// Função que exibe uma mensagem de confirmação de exclusão
function confirmDelete(userId) {
  Swal.fire({
    title: "Tem certeza?",
    text: "Você tem certeza de que deseja excluir este cliente?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#4e9abf",
    cancelButtonColor: "rgb(231, 78, 78)",
    confirmButtonText: "Sim, excluir!",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      deleteUser(userId);
    }
  });
}

// Função que envia uma requisição ajax passando o id para deletar.
function deleteUser(userId) {
  $.ajax({
    type: "POST",
    url: "index.php?a=deleteUser",
    data: {
      id: userId,
    },
    success: function (response) {
      Swal.fire({
        title: "Excluído!",
        text: "Usuário excluído com sucesso.",
        icon: "success",
        timer: 1000,
      }).then((result) => {
        location.reload();
      });
    },
    error: function (xhr, status, error) {
      Swal.fire({
        title: "Erro!",
        text: "Ocorreu um erro ao excluir o usuário.",
        icon: "error",
      });
    },
  });
}

function getEmployeeDetails(employeeId, funcao = "") {
  console.log("view", employeeId);
  $.ajax({
    url: "index.php?a=getEmployee&c=e",
    type: "GET",
    data: {
      id: employeeId,
    },
    dataType: "json",
    success: function (response) {
      if (response.cargo === "dentista") {
        $("#editDentistEmployeeNameInput").val(response.nome);
        $("#editDentistEmployeeDateInput").val(response.nascimento);
        $("#editDentistEmployeeCPFInput")
          .val(response.cpf)
          .mask("000.000.000-00");
        $("#editDentistEmployeeCROInput").val(response.cro);
        $("#editDentistEmployeePhoneInput")
          .val(response.telefone)
          .mask("(00) 0000-0000");
        $("#editDentistEmployeeEmailInput").val(response.email);
        $("#editDentistEmployeeAddressInput").val(response.endereco);
        $("#editDentistEmployeeLoginInput").val(response.login);
        $("#editDentistEmployeePasswordInput").val(response.senha);

        if (funcao == "edicao") {
          $("#editDentistModal").modal("show");
          document.getElementById("viewDentistModalLabel").innerHTML =
            " <i class='fa-solid fa-user-md'></i> Editar Dentista";
          $("#editDentistModal input").prop("disabled", false);
          document.getElementById("editNoteInput").disabled = false;
          document.getElementById("salvarAlteracoesBtn").style.display =
            "block";
        } else {
          $("#editDentistModal").modal("show");
          document.getElementById("viewDentistModalLabel").innerHTML =
            "<i class='fa-solid fa-user-md'></i> Visualizar Dentista";
          $("#editDentistModal input").prop("disabled", true);
          document.getElementById("editNoteInput").disabled = true;
          document.getElementById("salvarAlteracoesBtn").style.display = "none";
        }
      } else if (response.cargo == "administrador") {
        $("#editAdmEmployeeNameInput").val(response.nome);
        $("#editAdmEmployeeDateInput").val(response.nascimento);
        $("#editAdmEmployeeCPFInput").val(response.cpf).mask("000.000.000-00");
        $("#editAdmEmployeeCROInput").val(response.cro);
        $("#editAdmEmployeePhoneInput")
          .val(response.telefone)
          .mask("(00) 0000-0000");
        $("#editAdmEmployeeEmailInput").val(response.email);
        $("#editAdmEmployeeAddressInput").val(response.endereco);
        $("#editAdmEmployeeLoginInput").val(response.login);
        $("#editAdmEmployeePasswordInput").val(response.senha);

        if (funcao == "edicao") {
          $("#editAdmModal").modal("show");
          document.getElementById("viewAdmModalLabel").innerHTML =
            "<i class='fa-solid fa-user-cog'> Editar Administrador";
          $("#editAdmModal input").prop("disabled", false);
          document.getElementById("editNoteInput").disabled = false;
          document.getElementById("salvarAlteracoesBtn").style.display =
            "block";
        } else {
          $("#editAdmModal").modal("show");
          document.getElementById("viewAdmModalLabel").innerHTML =
            "<i class='fa-solid fa-user-cog'> Visualizar Administrador";
          $("editAdmModal input").prop("disabled", true);
          document.getElementById("editNoteInput").disabled = true;
          document.getElementById("salvarAlteracoesBtn").style.display = "none";
        }
      } else {
        $("#editSecretaryEmployeeNameInput").val(response.nome);
        $("#editSecretaryEmployeeDateInput").val(response.nascimento);
        $("#editSecretaryEmployeeCPFInput")
          .val(response.cpf)
          .mask("000.000.000-00");
        $("#editSecretaryEmployeeCROInput").val(response.cro);
        $("#editSecretaryEmployeePhoneInput")
          .val(response.telefone)
          .mask("(00) 0000-0000");
        $("#editSecretaryEmployeeEmailInput").val(response.email);
        $("#editSecretaryEmployeeAddressInput").val(response.endereco);
        $("#editSecretaryEmployeeLoginInput").val(response.login);
        $("#editSecretaryEmployeePasswordInput").val(response.senha);

        if (funcao == "edicao") {
          $("#editSecretaryModal").modal("show");
          document.getElementById("viewSecretaryModalLabel").innerHTML =
            "Editar Secretária";
          $("#editSecretaryModal input").prop("disabled", false);
          document.getElementById("editNoteInput").disabled = false;
          document.getElementById("salvarAlteracoesBtn").style.display =
            "block";
        } else {
          $("#editSecretaryModal").modal("show");
          document.getElementById("viewSecretaryModalLabel").innerHTML =
            "Visualizar Secretária";
          $("#editSecretaryModal input").prop("disabled", true);
          document.getElementById("editNoteInput").disabled = true;
          document.getElementById("salvarAlteracoesBtn").style.display = "none";
        }
      }

      console.log("response", response);

      if (response.cargo === "dentista") {
        updateDentist(employeeId);
      } else if (response.cargo === "administrador") {
        updateAdm(employeeId);
      } else {
        updateSecretary(employeeId);
      }
    },
    error: function (xhr, status, error) {
      console.log(error);
    },
  });
}

function updateDentist(employeeId) {
  console.log("update", employeeId);
  $("#editDentistForm").submit(function (e) {
    e.preventDefault();

    var form = $(this);
    var formData = $(this).serializeArray();

    console.log("form", form);
    console.log("formData", formData);
    formData.push({
      name: "id",
      value: employeeId,
    });

    $.ajax({
      url: "index.php?a=updateDentist&c=e",
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        Swal.fire({
          title: "Alterado!",
          text: "Dentista atualizado com sucesso",
          icon: "success",
          timer: 1000,
        }).then((result) => {
          location.reload();
        });

        $("#editDentistModal").modal("hide");
      },

      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });
}

function updateAdm(employeeId) {
  console.log("update", employeeId);
  $("#editAdmForm").submit(function (e) {
    e.preventDefault();

    var form = $(this);
    var formData = $(this).serializeArray();

    console.log("form", form);
    console.log("formData", formData);
    formData.push({
      name: "id",
      value: employeeId,
    });

    $.ajax({
      url: "index.php?a=updateAdm&c=e",
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        Swal.fire({
          title: "Alterado!",
          text: "Administrador atualizado com sucesso",
          icon: "success",
          timer: 1000,
        }).then((result) => {
          location.reload();
        });

        $("#editAdmModal").modal("hide");
      },

      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });
}

function updateSecretary(employeeId) {
  console.log("update", employeeId);
  $("#editSecretaryForm").submit(function (e) {
    e.preventDefault();

    var form = $(this);
    var formData = $(this).serializeArray();

    console.log("form", form);
    console.log("formData", formData);
    formData.push({
      name: "id",
      value: employeeId,
    });

    $.ajax({
      url: "index.php?a=updateSecretary&c=e",
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        Swal.fire({
          title: "Alterado!",
          text: "Secretária atualizada com sucesso",
          icon: "success",
          timer: 1000,
        }).then((result) => {
          location.reload();
        });

        $("#editSecretaryModal").modal("hide");
      },

      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });
}

function confirmDeleteEmployee(userId) {
  Swal.fire({
    title: "Tem certeza?",
    text: "Você tem certeza de que deseja excluir este cliente?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#4e9abf",
    cancelButtonColor: "rgb(231, 78, 78)",
    confirmButtonText: "Sim, excluir!",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      deleteEmployee(userId);
    }
  });
}

// Função que envia uma requisição ajax passando o id para deletar.
function deleteEmployee(employeeId) {
  $.ajax({
    type: "POST",
    url: "index.php?a=deleteEmployee&c=e",
    data: {
      id: employeeId,
    },
    success: function (response) {
      Swal.fire({
        title: "Excluído!",
        text: "Funcionário excluído com sucesso.",
        icon: "success",
        timer: 1000,
      }).then((result) => {
        location.reload();
      });
    },
    error: function (xhr, status, error) {
      Swal.fire({
        title: "Erro!",
        text: "Ocorreu um erro ao excluir o funcionário.",
        icon: "error",
      });
    },
  });
}

// Função de "validação de campos" com a classe do bootstrap
(function () {
  "use strict";

  var forms = document.querySelectorAll(".needs-validation");

  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();
