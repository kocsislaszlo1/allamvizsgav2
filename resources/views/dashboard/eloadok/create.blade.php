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
      <form method="post" action="{{ route('dashboard.eloadok.store') }}">
          @csrf
          <div class="form-group">
              <label for="nev">nev:</label>
              <input type="text" class="form-control" name="nev"/>
          </div>

          <div class="form-group">
            <label for="fokozat">fokozat:</label>
            <input type="text" class="form-control" name="fokozat"/>
        
          </div>
        
          <div class="form-group">
              <label for="intezmeny">intezmeny:</label>
              <input type="text" class="form-control" name="intezmeny"/>
          </div>
          <div class="form-group">
            <label for="eloadascim">eloadas cime:</label>
            <input type="text" class="form-control" name="eloadascim"/>
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input type="email" class="form-control" name="email"/>
        </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
</div>
  </div>
</v-container>
@endsection