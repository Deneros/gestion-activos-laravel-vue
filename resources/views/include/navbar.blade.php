<ul class="navbar-nav align-items-center  ml-md-auto ">
    </ul>
      <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
         <li class="nav-item dropdown ">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{asset('assets/img/theme/team-4.jpg')}}">
                </span>
              <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-md  font-weight-bold">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</span>
                </div>
              </div>
            </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                  @csrf 
                  <button type="submit" class="btn btn-outline-secondary">
                    Cerrar Sesion
                  </button>
                </form>
              </div>
          </li>
            <!-- <form method="POST" action="{{ route('logout') }}">
               @csrf 
               <button type="submit" class="btn btn-primary">
               Cerrar Sesion
               </button>
            </form> -->
      </ul>
          