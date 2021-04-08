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
                <a href="{{ route('dashboard.esemenyek.create') }}" class="btn btn-primary">Create esemeny</a>
                <table class=" table table-bordered table-striped table-hover datatable datatable-Amenity">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>esemenynev</td>
                            <td>tema</td>
                            <td>datum</td>
                            <td colspan="2" align="middle">Muveletek</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($esemenyek as $esemeny)
                    <tr>
                    <td>{{ $esemeny->id }}</td>
                    <td>{{ $esemeny->esemenynev }}</td>
                    <td>{{ $esemeny->tema }}</td>
                    <td>{{ $esemeny->datum }}</td>
                    <td><a href="{{ route('dashboard.esemenyek.edit', $esemeny->id) }}" class="btn btn-primary">Edit</a></td>
                   <td>
                       <form action="{{ route('dashboard.esemenyek.delete',$esemeny->id) }}" method="post">
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
