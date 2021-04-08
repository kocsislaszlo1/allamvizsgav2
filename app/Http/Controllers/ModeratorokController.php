<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moderatorok;
class ModeratorokController extends Controller
{  public function index(){

    $moderatorok=Moderatorok::all();
    return view('dashboard.moderatorok.index', compact('moderatorok'));
}
public function create(){
    return view('dashboard.moderatorok.create');
}
public function store(Request $request){
    
    $request->validate([
    'felhasznalo_id' =>'required',
    'szekcio_id' =>'required',
    ]);
    $moderatorok=new Moderatorok([
    'felhasznalo_id' =>$request->input('felhasznalo_id'),
    'szekcio_id' =>$request->input('szekcio_id'),
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
{
    $moderatorok = Moderatorok::find($id);
    return view('dashboard.moderatorok.edit', compact('moderatorok', 'id'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'felhasznalo_id' =>'required',
        'szekcio_id' =>'required',
        ]);
    $moderatorok = Moderatorok::find($id);
    $moderatorok->felhasznalo_id = $request->input('felhasznalo_id');
    $moderatorok->szekcio_id = $request->input('szekcio_id');
    $moderatorok->save();
    return redirect('/admin/moderatorok')->with('status', 'Moderator frisitve');
}

}
