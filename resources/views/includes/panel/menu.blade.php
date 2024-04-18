<ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="./index.html">
        <i class="ni ni-tv-2 text-primary"></i> Inicio
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ url('/servicios') }}">
        <i class="ni ni-scissors text-blue"></i> Servicios
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/maps.html">
        <i class="fab fa-creative-commons-by text-orange"></i> Empleados
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/profile.html">
        <i class="fas fa-universal-access text-yellow"></i> Clientes
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/tables.html">
        <i class="ni ni-bullet-list-67 text-red"></i> Tables
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./examples/login.html">
        <i class="ni ni-key-25 text-info"></i> Login
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
        <i class="fas fa-sign-in-alt text-danger"></i> Cerrar sesión
    </a>
      <form action="{{ route('logout') }}" method="POST" style="display: none " id="formLogout"> 
        @csrf </form>
    </li>
  </ul>
 
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item active active-pro">
      <a class="nav-link" href="./examples/upgrade.html">
        <i class="ni ni-send text-dark"></i> Upgrade to PRO
      </a>
    </li>
  </ul>