@extends('dashboard.layout.main')
@section('content')

<div class="row justify-content-center">

<div class="col-md-8">
<div class="card uper">
  <div class="card-header">
    Add esemeny
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
      <form method="post" action="{{ route('dashboard.esemenyek.store') }}">
          @csrf
          <div class="form-group">
              <label for="esemenynev">Esemenynev:</label>
              <input type="text" class="form-control" name="esemenynev"/>
          </div>

          <div class="form-group">
            <label for="tema">Tema:</label>
            <input type="text" class="form-control" name="tema"/>
        
          </div>
        
          <div class="form-group">
              <label for="email">Datum:</label>
              <input type="date" class="form-control" name="datum"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
</div>
  </div>
</v-container>
@endsection