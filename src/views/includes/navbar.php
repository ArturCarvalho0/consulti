<!-- Barra de navegação -->
<div class="navbar">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark navbar_content">
    <a href="#">
      <div class="d-flex justify-content-center align-items-center">
        <img width="195px" height="65px" src="/consulti/public/assets/img/logo.png" alt="">
      </div>
    </a>
    <hr>
    <ul class="nav flex-column mb-auto">
      <a href="http://localhost/consulti/src/index.php?pagina=pacientes" class="text-decoration-none item-props" aria-current="page">
        <li id="patient-tab" class="nav-item nav-link mb-2">
          <i class="fa-solid fa-user-large"></i> Pacientes
        </li>
      </a>
      <a href="http://localhost/consulti/src/index.php?pagina=agenda" class="text-decoration-none item-props" aria-current="page">
        <li id="calendar-tab" class="nav-item nav-link">
          <i class="fa-solid fa-calendar"></i> Agenda
        </li>
      </a>
    </ul>
    <hr>
    <div class="d-flex justify-content-between align-items-center text-white text-decoration-none">
      <div class="user-info d-flex align-items-center">
        <div class="rounded-circle me-2 circle-icon-user">
          <i class="fa-solid fa-user"></i>
        </div>
        <div>
          <strong>Matheus</strong><br>
          <span class="user-role">Dentista</span>
        </div>
      </div>
      <a href="#" class="text-white text-decoration-none">
        <div class="logout">
          <span class="logout-icon">
            <i class="fas fa-sign-out-alt"></i>
          </span>
        </div>
      </a>
    </div>
  </div>
</div>