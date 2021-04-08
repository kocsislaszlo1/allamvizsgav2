@extends('dashboard.layout.main')
@section('content')

<div class="row justify-content-center">

<div class="col-md-8">
<div class="card uper">
  <div class="card-header">
    Add szekcio
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
      <form method="post" action="{{ route('dashboard.szekciok.store') }}">
          @csrf
          <div class="form-group">
              <label for="szekcionev">Szekcionev:</label>
              <input type="text" class="form-control" name="szekcionev"/>
          </div>

          <div class="form-group">
            <label for="idopont">Idopont:</label>
            <input type="datetime-local" class="form-control" name="idopont"/>

          </div>
        
          <div class="form-group">
              <label for="link">link:</label>
              <input type="text" class="form-control" name="link"/>
          </div>
          <div class="form-group">
            <label for="online">online:</label>
            <input type="number" class="form-control" name="online"/>
        </div>
        <div class="form-group">
            <label for="esemeny_id">esemeny_id:</label>
            <input type="number" class="form-control" name="esemenyek_id"/>
        </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
</div>
  </div>
</v-container>
@endsection