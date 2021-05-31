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
                <a href="{{ route('dashboard.moderatorok.create') }}" class="btn btn-primary">Create esemeny</a>
                <table class=" table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>felhasznalo_id</td>
                            <td>szekcio_id</td>
                            <td colspan="2" align="middle">Muveletek</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($moderatorok as $moderator)
                    <tr>
                    <td>{{ $moderator->id }}</td>
                    <td>{{ $moderator->felhasznalo_id }}</td>
                    <td>{{ $moderator->szekcio_id }}</td>
                    <td><a href="{{ route('dashboard.moderatorok.edit', $moderator->id) }}" class="btn btn-primary">Edit</a></td>
                   <td>
                       <form action="{{ route('dashboard.moderatorok.delete',$moderator->id) }}" method="post">
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
