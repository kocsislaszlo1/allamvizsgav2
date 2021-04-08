  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
         <a class="nav-link" href="#">
          {{ Auth::user()->name }}
        </a> 
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
           <a href="" class="dropdown-item">
            <i class="fas fa-key mr-2"></i> Jelszó változtatás
          </a> 
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt mr-2"></i> Kilépés
          </a>
        </div>
        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
          @csrf
        </form>
      </li>

    </ul>

  </nav>
  <!-- /.navbar -->