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
            <a href="{{ route('dashboard.eloadok.create') }}" class="btn btn-primary">Create speaker</a>
            
            <table class=" table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <td>nev</td>
                        <td>fokozat</td>
                        <td>intezmeny</td>
                        <td>eloadascim</td>
                        <td>email</td>
                        <td>kivonat</td>
                        <td colspan="2">muveletek</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($eloadok as $eloado)
                   <tr>
                   <td>{{ $eloado->nev }}</td>
                   <td>{{ $eloado->fokozat }}</td>
                   <td>{{ $eloado->intezmeny }}</td>
                   <td>{{ $eloado->eloadascim }}</td>
                   <td>{{ $eloado->email }}</td>
                   <td>{{ $eloado->kivonat }}</td>
            
                   <td><a href="{{ route('dashboard.eloadok.edit', $eloado->id) }}" class="btn btn-primary">Edit</a></td>
                   <td>
                       <form action="{{ route('dashboard.eloadok.delete', $eloado->id) }}" method="post">
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
