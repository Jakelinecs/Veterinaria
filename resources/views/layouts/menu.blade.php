<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
  <li class="menu-header">Dashboard</li>

  <li>
    <a class="nav-link" href="/home">
      <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
  </li>

  <li class="menu-header">Gestion de Usuarios</li>
  <li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-regular fa-user"></i> <span>Rol y Usuario</span></a>
    <ul class="dropdown-menu">
    <li>
    @can('ver-user')
      <a class="nav-link" href="/usuarios">
        <i class="fas fa-regular fa-user"></i><span>Usuarios</span>
      </a>
    @endcan
    </li>
    <li>
      @can('ver-rol')
        <a class="nav-link" href="/roles">
          <i class=" fas fa-user-lock"></i><span>Roles</span>
        </a>
      @endcan
      </li>
    </ul>
    <li>
    @can('ver-persona')
    <a class="nav-link" href="/personas">
        <i class=" fas fa-blog"></i><span>Persona</span>
    </a>
    @endcan
</li>
    <li>
    @can('ver-paciente')
    <a class="nav-link" href="/pacientes">
        <i class=" fas fa-blog"></i><span>Paciente</span>
    </a>
    @endcan
    </li>
    <li>
    @can('ver-contrato')
    <a class="nav-link" href="/contratos">
        <i class=" fas fa-blog"></i><span>Contratos</span>
    </a>
    @endcan
    </li>
</li>



  @can('ver-blog')
    <a class="nav-link" href="/blogs">
      <i class=" fas fa-blog"></i><span>Blog</span>
    </a>
  @endcan

  @can('ver-categoria')
    <a class="nav-link" href="/categorias">
      <i class=" fas fa-blog"></i><span>Categoria</span>
    </a>
  @endcan
  @can('ver-producto')
    <a class="nav-link" href="/productos">
      <i class=" fas fa-blog"></i><span>Producto</span>
    </a>
  @endcan
  @can('ver-activo')
    <a class="nav-link" href="/activos">
      <i class=" fas fa-blog"></i><span>Activo</span>
    </a>
  @endcan
  @can('ver-venta')
    <a class="nav-link" href="/ventas">
      <i class=" fas fa-blog"></i><span>Venta</span>
    </a>
  @endcan
  @can('ver-ingreso')
    <a class="nav-link" href="/ingresos">
      <i class=" fas fa-blog"></i><span>Ingreso</span>
    </a>
  @endcan
  <a class="nav-link" href="/inventarios">
    <i class=" fas fa-blog"></i><span>Inventario</span>
  </a>
  @can('ver-tipo_servicio')
    <a class="nav-link" href="/tipo_servicios">
      <i class=" fas fa-blog"></i><span>Tipo de Servicios </span>
    </a>
  @endcan
  @can('ver-servicio')
    <a class="nav-link" href="/servicios">
      <i class=" fas fa-blog"></i><span>Servicios </span>
    </a>
  @endcan
</li>

<a class="nav-link" href="/pagos">
      <i class=" fas fa-blog"></i><span>Pagos </span>
    </a>


<li class="nav-item nav-item-has-children">
      <a href="#0" >
        <span class="text">UI Elements </span>
      </a>
      <ul class="collapse dropdown-nav">
        <li>
        <a href="alerts.html"> Alerts </a>
        </li>

        <li>
        <a href="buttons.html"> Buttons </a>
        </li>

        <li>
        <a href="cards.html"> Cards </a>
        </li>

        <li>
        <a href="typography.html"> Typography </a>
        </li>
      </ul>
      </li>




<li class=" dropdown">
  <a data-toggle="dropdown">
    <i class=" fas fa-solid fa-palette"></i><span>Estilo</span>
  </a>

  <div class="dropdown-menu dropdown-menu-right">
    <div class="dropdown-title">
      Estilo de Pantalla </div>
    <a class="dropdown-item has-icon" href="{{route('estilo.normal')}}">
      <i class="fas fa-sun"></i>Normal</a>
    <a class="dropdown-item has-icon" href="{{route('estilo.light')}}">
    <i class="fas fa-regular fa-snowflake"></i> </i>Light</a>
    <a class="dropdown-item has-icon" href="{{route('estilo.dark')}}">
      <i class="fas fa-moon"></i> Dark
    </a>
  </div>
</li>
