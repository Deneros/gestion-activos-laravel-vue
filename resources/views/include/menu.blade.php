<div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vistaeditar') }}">
                <i class="ni ni-circle-08 text-Default"></i>
                <span class="nav-link-text">Mi cuenta</span>
              </a>
            </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-Default">
              <span class="docs-normal">USUARIOS</span>
            </h6>

            <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vista') }}">
                <i class="ni ni-badge text-Default"></i>
                <span class="nav-link-text">Usuarios</span>
              </a>
            </li>
            </ul>

            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-Default">
              <span class="docs-normal">INVENTARIO</span>
            </h6>

            <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vistacategoria') }}">
                <i class="ni ni-bullet-list-67 text-Default"></i>
                <span class="nav-link-text">Categorias</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('vistainventariototal') }}">
                <i class="ni ni-archive-2 text-Default"></i>
                <span class="nav-link-text">Inventario total</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('vistahistorial') }}">
                <i class="ni ni-folder-17 text-Default"></i>
                <span class="nav-link-text">Historial</span>
              </a>
            </li>
            </ul>
            

            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-Default">
              <span class="docs-normal">CONFIGURACIÓN</span>
            </h6>

            <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vistapersonalizacion') }}">
                <i class="ni ni-settings-gear-65 text-Default"></i>
                <span class="nav-link-text">Personalizar</span>
              </a>
            </li>
            </ul>
          </ul>
          
        </div>