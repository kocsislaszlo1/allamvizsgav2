@extends('dashboard.layout.main')

@section('content')
<div class="card">

<div class="cardbody">

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
    <div class="table-responsive">
    <table class=" table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <td>eloadok</td>
                <td>kezdete</td>
                <td>vege</td>
                <td colspan="3">muveletek</td>
            
            </tr>
        </thead>
        <tbody>
           @foreach ($eloadok as $eloado)
           <tr>
           <td>{{ $eloado->nev }}</td>
           @foreach ($eloado->szekciok as $szekcio)
          
         
           <td> <form action="{{ route('dashboard.szekciok.eupdate',$szekcio->pivot->eloado_id) }}" method="post">
              @csrf
              @method('POST')  
              <input type="time" name="kezd" value="{{$szekcio->pivot->kezdete}}" />
              <input type="hidden"  name="szekcio_id" value="{{$szekcio->id}}" />
               <input type="hidden"  name="eloado_id" value="{{$szekcio->pivot->eloado_id}}" /> 
              <button class="btn btn-danger" type="submit">Frissit</button>
          </form>
           </td>
           <td> <form action="{{ route('dashboard.szekciok.eupdate2',$szekcio->pivot->eloado_id) }}" method="post">
            @csrf
            @method('POST')  
            <input type="time" name="vege" value="{{$szekcio->pivot->vege}}" />
            <input type="hidden"  name="szekcio_id" value="{{$szekcio->id}}" />
             <input type="hidden"  name="eloado_id" value="{{$szekcio->pivot->eloado_id}}" /> 
            <button class="btn btn-danger" type="submit">Frissit</button>
        </form>
         </td>
           @endforeach
          
           
          <td>
            <form action="{{ route('dashboard.szekciok.deidopont',$szekcio->pivot->eloado_id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>

           </tr>
           @endforeach
        </tbody>
    </table>
   
</div>
  
    
        {{-- <!-- Modal -->
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
        
                <form method="post" action="{{ route('dashboard.szekciok.didopont', $szekciok->id) }}" >
                      
                @csrf  
                    <div class="form-group">            
                        <label for="kezdete">kezdete:</label>
                        <input type="text" class="form-control" name="kezdete" value="" />
                    </div>
                    <input type="hidden"  name="eloado_id" value="" />
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
        </div> --}}
</div>

</div>
</div>
@endsection