  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('dashboard.dashboard') }}" class="brand-link">

          <span class="brand-text font-weight-light">Admin felulet</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">

                  <li class="nav-item menu-closed">
                      <a href="{{ route('dashboard.dashboard') }}"
                          class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Vezérlőpult
                          </p>
                      </a>
                  </li>
                  @can('create-esemenyek')
                      <li class="nav-item menu-closed">
                          <a href="{{ route('dashboard.esemenyek.index') }}"
                              class="nav-link {{ strpos(Route::currentRouteName(), 'dashboard.esemenyek') === 0 ? 'active' : '' }}">
                              <i class="nav-icon fas fa-route"></i>
                              <p>
                                  Esemenyek
                              </p>
                          </a>
                      </li>
                  @endcan

                  @can('create-szekciok')
                      <li class="nav-item menu-closed">
                          <a href="{{ route('dashboard.szekciok.index') }}"
                              class="nav-link {{ request()->is('dashboard/szekciok*') ? 'active' : '' }}">
                              <i class="nav-icon fas fa-file-alt"></i>
                              <p>
                                  Szekciok
                              </p>
                          </a>
                      </li>
                  @endcan
                  @can('create-eloadok')
                      <li class="nav-item menu-closed">
                          <a href="{{ route('dashboard.eloadok.index') }}"
                              class="nav-link {{ request()->is('dashboard/eloadok*') ? 'active' : '' }}">
                              <i class="nav-icon fas fa-file-alt"></i>
                              <p>
                                  Eloadok
                              </p>
                          </a>
                      </li>
                  @endcan
                  @can('create-moderatorok')
                      <li class="nav-item menu-closed">
                          <a href="{{ route('dashboard.moderatorok.index') }}"
                              class="nav-link {{ request()->is('dashboard/moderatorok*') ? 'active' : '' }}">
                              <i class="nav-icon fas fa-file-alt"></i>
                              <p>
                                  Moderatorok
                              </p>
                          </a>
                      </li>
                  @endcan
                  @can('create-plenaris')
                      <li class="nav-item menu-closed">
                          <a href="{{ route('dashboard.plenaris.index') }}"
                              class="nav-link {{ request()->is('dashboard/plenaris*') ? 'active' : '' }}">
                              <i class="nav-icon fas fa-file-alt"></i>
                              <p>
                                  Plenarisok
                              </p>
                          </a>
                      </li>
                  @endcan

                  <li class="nav-item menu-closed">
                      <a href="{{ route('home') }}" class="nav-link">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              Kilépés
                          </p>
                      </a>

                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
