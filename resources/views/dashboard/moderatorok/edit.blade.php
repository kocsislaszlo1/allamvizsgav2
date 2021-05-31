@extends('dashboard.layout.main')

@section('content')
<div class="row justify-content-center">

<div class="col-md-6">
<div class="card uper">
  <div class="card-header">
    Edit moderator
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
    <form method="post" action="{{ route('dashboard.moderatorok.update', $id) }}" >
        @csrf        
        <div class="form-group">            
            <label for="id">id:</label>
            <input type="text" class="form-control" name="id" value="{{$moderatorok->id}}" />
        </div>
        <div class="form-group">            
            <label for="felhasznalo_id">felhasznalo_id:</label>
            <input type="text" class="form-control" name="felhasznalo_id" value="{{$moderatorok->felhasznalo_id}}" />
        </div>
         <div class="form-group">            
            <label for="szekcio_id">szekcio_id:</label>
            <input type="text" class="form-control" name="szekcio_id" value="{{$moderatorok->szekcio_id}}" />
        </div>        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Vissza</a>
        </form>
  
</div>
</div>
</div>
</div>
@endsection