@extends('dashboard.layout.main')

@section('content')
<div class="row justify-content-center">

<div class="col-md-6">
<div class="card uper">
  <div class="card-header">
    Edit {{$szekciok->szekcionev }}
  </div>
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
    <table class=" table table-bordered table-striped table-hover datatable datatable-Amenity">
        <thead>
            <tr>
                <td>eloadok</td>
            
            </tr>
        </thead>
        <tbody>
           @foreach ($eloadok as $eloado)
           <tr>
           <td>{{ $eloado->nev }}</td>

           </tr>
           @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
@endsection