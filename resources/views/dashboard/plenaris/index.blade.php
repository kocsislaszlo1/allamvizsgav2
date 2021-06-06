@extends('dashboard.layout.main')
@section('content')

    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <div class="mb-2">
                    <a href="{{ route('dashboard.plenaris.create') }}" class="btn btn-primary">Create plenaris</a>

                    <table class=" table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <td>nev</td>
                                <td>fokozat</td>
                                <td>intezmeny</td>
                                <td>eloadascim</td>
                                <td>email</td>
                                <td>kivonat</td>
                                <td>kezdete</td>
                                <td>vege</td>
                                <td colspan="2">muveletek</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plenarisok as $plenaris)
                                <tr>
                                    <td>{{ $plenaris->nev }}</td>
                                    <td>{{ $plenaris->fokozat }}</td>
                                    <td>{{ $plenaris->intezmeny }}</td>
                                    <td>{{ $plenaris->eloadascim }}</td>
                                    <td>{{ $plenaris->email }}</td>
                                    <td>{{ $plenaris->kivonat }}</td>
                                    <td>{{ $plenaris->kezdete }}</td>
                                    <td>{{ $plenaris->vege }}</td>
                                    <td><a href="{{ route('dashboard.plenaris.edit', $plenaris->id) }}"
                                            class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="{{ route('dashboard.plenaris.delete', $plenaris->id) }}"
                                            method="post">
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
            </div>

        </div>
    </div>
@endsection
