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
            <a href="{{ route('dashboard.szekciok.create') }}" class="btn btn-primary">Create szekciok</a>
            
            <table class=" table table-bordered table-striped table-hover datatable datatable-Amenity">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>szekcionev</td>
                        <td>idopont</td>
                        <td>link</td>
                        <td>online</td>
                        <td>esemenyek_id</td>
                        <td colspan="2">muveletek</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($szekciok as $szekcio)
                   <tr>
                   <td>{{ $szekcio->id }}</td>
                   <td>{{ $szekcio->szekcionev }}</td>
                   <td>{{ $szekcio->idopont }}</td>
                   <td>{{ $szekcio->link }}</td>
                   <td>{{ $szekcio->online }}</td>
                   <td>{{ $szekcio->esemenyek_id }}</td>
                   <td><a href="{{ route('dashboard.szekciok.edit', $szekcio->id) }}" class="btn btn-primary">Edit</a></td>
                   <td>
                       <form action="{{ route('dashboard.szekciok.delete', $szekcio->id) }}" method="post">
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
