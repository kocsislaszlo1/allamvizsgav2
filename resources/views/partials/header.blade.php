<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
        SapiEconf
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">Home</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">About</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">Speakers</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">Schedule</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contact</a></li>
        @if( auth()->check() )
        <li >
            <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
        </li>
        <li>
            <a href="{{ route('logout') }}">Log Out</a>
        </li>
    @else
        <li>
            <a href="/login">Log In</a>
        </li>
        <li>
            <a href="/register">Register</a>
        </li>
    @endif
    

      </ul>
    </nav>
  </div>
</header>
