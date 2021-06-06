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
          <label for="users_id">felhasznalok:</label>
          <select id="users_id" name="users_id" class="form-control" >
            <option  value="">-- Melyik felhasznalo --</option>
            @foreach($felhasznalok as $fel)
              <option value="{{ Str::slug($fel->id) }}">{{$fel->name }}</option>
            @endforeach
          </select>
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
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Vissza</a>
        </form>
  
</div>
</div>
</div>
</div>
@endsection