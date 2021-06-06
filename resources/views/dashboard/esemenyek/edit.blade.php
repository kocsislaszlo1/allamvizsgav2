@extends('dashboard.layout.main')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card uper">
                <div class="card-header">
                    Edit Esemeny
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
                    <form method="post" action="{{ route('dashboard.esemenyek.update', $id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="esemenynev">Esemenynev:</label>
                            <input type="text" class="form-control" name="esemenynev"
                                value="{{ $esemenyek->esemenynev }}" />
                        </div>
                        <div class="form-group">
                            <label for="tema">Tema:</label>
                            <input type="text" class="form-control" name="tema" value="{{ $esemenyek->tema }}" />
                        </div>
                        <div class="form-group">
                            <label for="datum">Datum:</label>
                            <input type="date" class="form-control" name="datum" value="{{ $esemenyek->datum }}" />
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i>
                            Vissza</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
