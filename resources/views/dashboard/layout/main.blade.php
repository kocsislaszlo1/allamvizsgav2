<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>CsEKE | Vezérlőpult</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">


  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lib2/adminlte2/dist/css/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


 
 <script src="{{asset('lib2/adminlte2/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
     
        
  <!-- Bootstrap 4 -->

  
  <script src="{{ asset('js/app.js') }}" defer></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <!--<script src="{{asset('lib2/adminlte2/plugins/jquery/jquery.min.js')}}"></script>-->


  
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