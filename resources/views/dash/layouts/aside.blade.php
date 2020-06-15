<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="/admin">
      <i class="fas fa-fw fa-home"></i>

      <span>Inicio</span>
    </a>
  </li>

    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Login Screens:</h6>
      <a class="dropdown-item" href="login.html">Login</a>
      <a class="dropdown-item" href="register.html">Register</a>
      <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="404.html">404 Page</a>
      <a class="dropdown-item active" href="blank.html">Blank Page</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/usuarios">
      <i class="fas fa-fw fa-users"></i>
      <span>Usuarios</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/pacientes">
      <i class="fas fa-fw fa-heart"></i>
      <span>Pacientes</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/testimonios">
      <i class="fas fa-fw fa-file"></i>
      <span>Testimonios</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/noticias">
      <i class="fas fa-fw fa-bullhorn"></i>
      <span>Noticias</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
<i class="fas fa-sign-out-alt"></i>
      <span>Salir</span></a>
  </li>
</ul>
