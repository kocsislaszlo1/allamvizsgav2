@extends('dashboard.layout.main')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card uper">
                <div class="card-header">
                    Edit Eloado
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
                    <form method="post" action="{{ route('dashboard.plenaris.update', $id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="nev">nev:</label>
                            <input type="text" class="form-control" name="nev" value="{{ $plenarisok->nev }}" />
                        </div>

                        <div class="form-group">
                            <label for="fokozat">fokozat:</label>
                            <input type="text" class="form-control" name="fokozat" value="{{ $plenarisok->nev }}" />

                        </div>

                        <div class="form-group">
                            <label for="intezmeny">intezmeny:</label>
                            <input type="text" class="form-control" name="intezmeny" value="{{ $plenarisok->intezmeny }}" />
                        </div>
                        <div class="form-group">
                            <label for="eloadascim">eloadas cime:</label>
                            <input type="text" class="form-control" name="eloadascim"
                                value="{{ $plenarisok->eloadascim }}" />
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" name="email" value="{{ $plenarisok->email }}" />
                        </div>
                        <div class="form-group">
                            <label for="kivonat">kivonat:</label>
                            <input type="text" class="form-control" name="kivonat" value="{{ $plenarisok->kivonat }}" />
                        </div>
                        <div class="form-group">
                            <label for="kezdete">kezdete:</label>
                            <input type="time" name="kezdete" value="{{ $plenarisok->kezdete }}" />
                        </div>
                        <div class="form-group">
                            <label for="vege">vege:</label>
                            <input type="time" name="vege" value="{{ $plenarisok->vege }}" />
                        </div>
                        <div class="form-group">
                            <label for="esemenyek_id">esemeny_id:</label>
                            <select id="esemenyek_id" name="esemenyek_id" class="form-control">
                                <option value="">-- Melyik esemeny --</option>
                                @foreach ($esemenyek as $esemeny)
                                    <option value="{{ Str::slug($esemeny->id) }}">{{ $esemeny->esemenynev }}</option>
                                @endforeach
                            </select>
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
