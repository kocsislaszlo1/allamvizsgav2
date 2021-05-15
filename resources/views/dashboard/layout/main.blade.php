<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Konferencia | Vezérlőpult</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">


  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lib2/adminlte2/dist/css/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

 
 <script src="{{asset('lib2/adminlte2/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
     
        
  <!-- Bootstrap 4 -->

  
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
  <!-- AdminLTE App -->
  <script src="{{asset('lib2/adminlte2/dist/js/adminlte.min.js')}}"></script>

  

  <script src="{{ asset('lib2/tinymce/tinymce.js') }}"></script>

  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>  

  

  <script>
    tinymce.init({
      selector: 'textarea.description',
      height: 400,
      menubar: false,
      toolbar_mode: 'sliding',
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
      ],
      toolbar: 'preview | undo redo | fontselect fontsizeselect formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
    });
  </script>

</head>


<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('dashboard.layout.navbar')
    @include('dashboard.layout.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">@yield('title')</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    @include('dashboard.layout.footer')
  </div>



</body>

</html>