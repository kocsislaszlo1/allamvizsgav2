<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Esemenyek;
class EsemenyController extends Controller
{
    public function index(){

        $esemenyek=Esemenyek::all();
        return view('dashboard.esemenyek.index', compact('esemenyek'));
    }
    public function create(){
        return view('dashboard.esemenyek.create');
    }
    public function store(Request $request){
        
        $request->validate([
        'esemenynev' =>'required',
        'tema' =>'required',
        'datum' =>'required',
        ]);
        $esemenyek=new Esemenyek([
        'esemenynev' =>$request->input('esemenynev'),
        'tema' =>$request->input('tema'),
        'datum' =>$request->input('datum'),
        ]);
        $esemenyek->save();
        return redirect('/admin/esemenyek')->with('status', 'Esemeny hozzadva');
    }
    public  function delete ($id)
    {
       $esemeny=Esemenyek::find($id);
       $esemeny->delete();
       return redirect('/admin/esemenyek')->with('status', 'Esemeny torolve');
    }
    public function edit($id)
    {
        $esemenyek = Esemenyek::find($id);
        return view('dashboard.esemenyek.edit', compact('esemenyek', 'id'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'esemenynev' =>'required',
            'tema' =>'required',
            'datum' =>'required',
            ]);
        $esemeny = Esemenyek::find($id);
        $esemeny->esemenynev = $request->input('esemenynev');
        $esemeny->tema = $request->input('tema');
        $esemeny->datum = $request->input('datum');
        $esemeny->save();
        return redirect('/admin/esemenyek')->with('status', 'Esemeny frisitve');
    }

}
