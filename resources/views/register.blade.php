
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Regisztracio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="content">
     <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card uper">
    <div class="card-body">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="nev">nev:</label>
            <input type="text" class="form-control" name="nev"/>
        </div>

        <div class="form-group">
          <label for="fokozat">fokozat:</label>
          <input type="text" class="form-control" name="fokozat"/>
      
        </div>
      
        <div class="form-group">
            <label for="intezmeny">intezmeny:</label>
            <input type="text" class="form-control" name="intezmeny"/>
        </div>
        <div class="form-group">
          <label for="eloadascim">eloadas cime:</label>
          <input type="text" class="form-control" name="eloadascim"/>
      </div>
    
      <div class="form-group">
          <label for="email">email:</label>
          <input type="email" class="form-control" name="email"/>
      </div>
      <div class="form-group">
        <label for="kivonat">kivonat:</label>
        <input type="text" class="form-control" name="kivonat"/>
    </div>
      <div class="form-group">
        <label for="szekcio_id">szekciok:</label>
        <select id="szekcio_id" name="szekcio_id" class="form-control" >
          <option value="">-- Melyik szekcio --</option>
          @foreach($szekciok as $szekcio)
            <option value="{{ Str::slug($szekcio->id) }}">{{$szekcio->szekcionev }}</option>
          @endforeach
        </select>
      </div>
        <button type="submit" class="btn btn-primary">Regisztracio</button>
        <a class="btn btn-primary"  href="{{ route('home') }}">Vissza</a>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('js/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>

</html>
