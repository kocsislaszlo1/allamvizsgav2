<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moderatorok;
use App\Models\User;
use App\Models\Szekciok;
class ModeratorokController extends Controller
{  public function index(){

    $moderatorok=Moderatorok::all();
    
    return view('dashboard.moderatorok.index', compact('moderatorok'));
}
public function create(){
    $felhasznalok=User::all();
    $szekciok=Szekciok::all();
    return view('dashboard.moderatorok.create',compact('felhasznalok','szekciok'));
}
public function store(Request $request){
    
    $request->validate([
    'users_id' =>'required',
    'szekcio_id' =>'required',
    ]);
    $moderatorok=new Moderatorok([
    'users_id' =>$request->input('users_id'),
    'szekciok_id' =>$request->input('szekcio_id'),
    ]);
    $moderatorok->save();
    return redirect('/admin/moderatorok')->with('status', 'Moderator hozzadva');
}
public  function delete ($id)
{
   $moderatorok=Moderatorok::find($id);
   $moderatorok->delete();
   return redirect('/admin/moderatorok')->with('status', 'Moderator torolve');
}
public function edit($id)
{   $felhasznalok=User::all();
    $szekciok=Szekciok::all();
    $moderatorok = Moderatorok::find($id);
    return view('dashboard.moderatorok.edit', compact('moderatorok', 'id','felhasznalok','szekciok'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'users_id' =>'required',
        'szekcio_id' =>'required',
        ]);
    $moderatorok = Moderatorok::find($id);
    $moderatorok->users_id = $request->input('users_id');
    $moderatorok->szekciok_id = $request->input('szekcio_id');
    $moderatorok->save();
    return redirect('/admin/moderatorok')->with('status', 'Moderator frisitve');
}

}
