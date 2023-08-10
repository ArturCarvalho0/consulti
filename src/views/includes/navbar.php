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
      <li id="patient-tab" class="nav-item nav-link mb-2">
        <a href="http://localhost/consulti/src/index.php?pagina=pacientes"  class="text-decoration-none item-props" aria-current="page">
          <i class="fa-solid fa-user-large"></i> Pacientes
        </a>
      </li>
      <li id="calendar-tab" class="nav-item nav-link">
        <a href="http://localhost/consulti/src/index.php?pagina=agenda"  class="text-decoration-none item-props" aria-current="page">
        <i class="fa-solid fa-calendar"></i> Agenda
        </a>
      </li>
    </ul>
    <hr>
    <div class="d-flex justify-content-between align-items-center text-white text-decoration-none">
      <a href="#" class="text-white text-decoration-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <div class="user-info">
          <img src="https://github.com/MatheusBalestreiro.png" alt="" width="40" height="40" class="rounded-circle me-2">
          <strong>Matheus</strong>
        </div>
      </a>
      <a href="#">
        <div class="logout">
          <span class="logout-icon">
            <i class="fas fa-sign-out-alt"></i>
          </span>
        </div>
      </a>
    </div>
  </div>
</div>