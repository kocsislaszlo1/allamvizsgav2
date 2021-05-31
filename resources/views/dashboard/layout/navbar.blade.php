  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          @if (Auth::check())
          {{ Auth::user()->name }}
          @endif
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bars"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item">
            <i class="fa fa-key mr-2"></i> Jelszó változtatás
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout')}}">
            <i class="fas fa-sign-out-alt"></i> Kilépés
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- /.navbar -->