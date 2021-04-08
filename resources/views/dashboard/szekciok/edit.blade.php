@extends('dashboard.layout.main')

@section('content')
<div class="row justify-content-center">

<div class="col-md-6">
<div class="card uper">
  <div class="card-header">
    Edit Student
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
    <form method="post" action="{{ route('dashboard.szekciok.update', $id) }}" >
        @csrf        
        <div class="form-group">            
            <label for="szekcionev">szekcionev:</label>
            <input type="text" class="form-control" name="szekcionev" value="{{$szekcio->szekcionev}}" />
        </div>
        <div class="form-group">            
            <label for="idopont">idopont:</label>
            <input type="text" class="form-control" name="idopont" value="{{$szekcio->idopont}}" />
        </div>
         <div class="form-group">            
            <label for="link">link:</label>
            <input type="text" class="form-control" name="link" value="{{$szekcio->link}}" />
        </div>  
        <div class="form-group">            
            <label for="online">online:</label>
            <input type="text" class="form-control" name="online" value="{{$szekcio->online}}" />
        </div>       
        <div class="form-group">            
            <label for="esemenyek_id">esmenenyek_id:</label>
            <input type="text" class="form-control" name="esemenyek_id" value="{{$szekcio->esemenyek_id}}" />
        </div> 
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
  
</div>
</div>
</div>
</div>
@endsection