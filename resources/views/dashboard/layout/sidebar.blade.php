  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.dashboard') }}" class="brand-link">
     
      <span class="brand-text font-weight-light">Admin felulet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item menu-closed">
            <a href="{{route('dashboard.dashboard') }}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Vezérlőpult
              </p>
            </a>
          </li>        
          @can('create-esemenyek') 
          <li class="nav-item menu-closed">
             <a href="{{route('dashboard.esemenyek.index') }}" class="nav-link {{ (strpos(Route::currentRouteName(), 'dashboard.esemenyek') === 0) ? 'active' : '' }}" > 
              <i class="nav-icon fas fa-route"></i>
              <p>
              Esemenyek
              </p>
            </a>
          </li> 
          @endcan

          @can('create-szekciok') 
          <li class="nav-item menu-closed">
             <a href="{{ route('dashboard.szekciok.index') }}" class="nav-link {{ (request()->is('dashboard/szekciok*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
              Szekciok
              </p>
            </a>
          </li>
            @endcan
            @can('create-eloadok') 
          <li class="nav-item menu-closed">
            <a href="{{ route('dashboard.eloadok.index') }}" class="nav-link {{ (request()->is('dashboard/eloadok*')) ? 'active' : '' }}">
             <i class="nav-icon fas fa-file-alt"></i>
             <p>
             Eloadok
             </p>
           </a>
         </li>
         @endcan
         @can('create-moderatorok') 
         <li class="nav-item menu-closed">
          <a href="{{ route('dashboard.moderatorok.index') }}" class="nav-link {{ (request()->is('dashboard/moderatorok*')) ? 'active' : '' }}">
           <i class="nav-icon fas fa-file-alt"></i>
           <p>
           Moderatorok
           </p>
         </a>
       </li>
       @endcan
          {{-- @can('create-dhtt')   
          <li class="nav-item has-treeview {{ (request()->is('dashboard/dhtt*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('dashboard/dhtt*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-mountain"></i>
              <p>
                DHTT
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('dashboard.dhttesemenyek.index') }}" class="nav-link {{ (request()->is('dashboard/dhtt/esemenyek*')) ? 'active' : '' }}">
                  <i class="fas fa-calendar-day nav-icon"></i>
                  <p>Események</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="{{ route('dashboard.dhtturak.index') }}" class="nav-link {{ (request()->is('dashboard/dhtt/turak*')) ? 'active' : '' }}">
                  <i class="fas fa-route nav-icon"></i>
                  <p>Túrák</p>
                </a>
              </li>       
              <li class="nav-item">
                <a href="{{ route('dashboard.dhttjelentkezok.show') }}" class="nav-link {{ (request()->is('dashboard/dhtt/jelentkezok*')) ? 'active' : '' }}">
                  <i class="fas fa-hiking nav-icon"></i>
                  <p>Jelentkezők</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="{{ route('dashboard.dhttgaleria.index') }}" class="nav-link {{ (request()->is('dashboard/dhtt/galeria*')) ? 'active' : '' }}">
                  <i class="fas fa-images nav-icon"></i>
                  <p>Galéria</p>
                </a>
              </li>                        
            </ul>
          </li>
          @endcan          

          @can('create-vttura')   
          <li class="nav-item has-treeview {{ (request()->is('dashboard/vt*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('dashboard/vt*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-campground"></i>
              <p>
                Vándortábor 2021
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashboard.vtturak.index') }}" class="nav-link {{ (request()->is('dashboard/vtturak*')) ? 'active' : '' }}">
                  <i class="fas fa-route nav-icon"></i>
                  <p>Túrák</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashboard.vtturavezetok.index') }}" class="nav-link {{ (request()->is('dashboard/vtturavezetok*')) ? 'active' : '' }}">
                  <i class="fas fa-hiking nav-icon"></i>
                  <p>Túravezetők</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan

          @can('create-jogosultsag') 
          <li class="nav-item menu-closed">
            <a href="{{ route('dashboard.users.index') }}" class="nav-link {{ (request()->is('dashboard/users*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Felhasználók
              </p>
            </a>
          </li> 
          @endcan 

          @can('view-loggs') 
          <li class="nav-item menu-closed">
            <a href="{{ route('dashboard.loggs') }}" class="nav-link {{ (request()->is('dashboard/loggs*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Eseménynapló
              </p>
            </a>
          </li> 
          @endcan           
--}}
          <li class="nav-item menu-closed">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Kilépés
              </p>
            </a>
            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                    @csrf
                </form>
          </li>   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>