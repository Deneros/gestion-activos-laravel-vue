<div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('usuario*')) ? 'active' : '' }}" href="{{ route('vistaeditar') }}">
                <i class="ni ni-circle-08 text-Default"></i>
                <span class="nav-link-text">Mi cuenta</span>
              </a>
            </li>
            </ul>

            <!-- Divider -->
            @if(Auth::user()->tipo_usuario == "Admin")
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-Default">
              <span class="docs-normal">USUARIOS</span>
            </h6>

            <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('admin/usuarios*')) ? 'active' : '' }}" href="{{ route('vista') }}">
                <i class="ni ni-badge text-Default"></i>
                <span class="nav-link-text">Usuarios</span>
              </a>
            </li>
            </ul>
            @endif
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-Default">
              <span class="docs-normal">INVENTARIO</span>
            </h6>

            <ul class="navbar-nav mb-md-3">   

            @if(Auth::user()->tipo_usuario == "Admin")
            <li class="nav-item" >
              <a class="nav-link {{ (request()->is('categoria*')) ? 'active' : '' }}" href="{{ route('vistacategoria') }}">
                <i class="ni ni-bullet-list-67 text-Default"></i>
                <span class="nav-link-text">Categorias</span>
              </a>
            </li>
            @endif

            <li class="nav-item">
              <a class="nav-link {{ (request()->is('inventario*')) ? 'active' : '' }}" href="{{ route('vistainventariototal') }}">
                <i class="ni ni-archive-2 text-Default"></i>
                <span class="nav-link-text">Inventario total</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ (request()->is('historial*')) ? 'active' : '' }}" href="{{ route('vistahistorial') }}">
                <i class="ni ni-folder-17 text-Default"></i>
                <span class="nav-link-text">Historial</span>
              </a>
            </li>
            </ul>

            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-Default">
              <span class="docs-normal">REPORTES</span>
            </h6>
            
            <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('reportes*')) ? 'active' : '' }}" href="{{ route('vistareportes') }}">
                <i class="ni ni-chart-bar-32 text-Default"></i>
                <span class="nav-link-text">Generar reporte</span>
              </a>
            </li>
            </ul>
            @if(Auth::user()->tipo_usuario == "Admin")
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-Default">
              <span class="docs-normal">CONFIGURACIÓN</span>
            </h6>

            <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('admin/personalizar*')) ? 'active' : '' }}" href="{{ route('vistapersonalizacion') }}">
                <i class="ni ni-settings-gear-65 text-Default"></i>
                <span class="nav-link-text">Personalizar</span>
              </a>
            </li>
            </ul>
          </ul>
          @endif
        </div>