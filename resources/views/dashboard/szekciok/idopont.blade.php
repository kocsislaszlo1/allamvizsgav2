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
                <td>kezdete</td>
                <td>vege</td>
                <td>muveletek</td>
            
            </tr>
        </thead>
        <tbody>
           @foreach ($eloadok as $eloado)
           <tr>
           <td>{{ $eloado->nev }}</td>
           @foreach ($eloado->szekciok as $szekcio)
          
           <td>{{$szekcio->pivot->kezdete}}</td>
           <td>{{$szekcio->pivot->vege}}</td>
           @endforeach
          
           <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            idopont megadas
          </button>
          <td>
            <form action="{{ route('dashboard.szekciok.deidopont',$szekcio->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>
           </tr>
           @endforeach
        </tbody>
    </table>

  
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{ route('dashboard.szekciok.didopont', $id) }}" >
                @csrf     
            
                <div class="form-group">            
                    <label for="kezdete">kezdete:</label>
                    <input type="text" class="form-control" name="kezdete" value="" />
                </div>
                <div class="form-group">            
                  <label for="vege">vege:</label>
                  <input type="text" class="form-control" name="vege" value="" />
              </div>
           
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
@endsection