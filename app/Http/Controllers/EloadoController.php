<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eloadok;
use App\Models\Szekciok;

class EloadoController extends Controller
{
     public function index(){
        $szekciok=Szekciok::all();
        $eloadok=Eloadok::all();
        return view('dashboard.eloadok.index', compact('eloadok','szekciok'));
    }
    public function create(){
        $szekciok=Szekciok::all();
        $eloadok=Eloadok::all();
        return view('dashboard.eloadok.create',compact('eloadok','szekciok'));
    }
    public function store(Request $request){
        $szekciok=$request->input('szekcio_id');
        $request->validate([
        'nev' =>'required',
        'fokozat' =>'required',
        'intezmeny' =>'required',
        'eloadascim' =>'required',
        'email' =>'required',
        'kivonat' =>'required',
        ]);
        $eloadok=new Eloadok([
        'nev' =>$request->input('nev'),
        'fokozat' =>$request->input('fokozat'),
        'intezmeny' =>$request->input('intezmeny'),
        'eloadascim' =>$request->input('eloadascim'),
        'email' =>$request->input('email'),
        'kivonat' =>$request->input('kivonat'),
        ]);
        
        $eloadok->save();
        $eloadok->szekciok()->attach($szekciok);
        return redirect('/admin/eloadok')->with('status', 'Eloado hozzadva');
    }
    public  function delete ($id)
    {
       $eloadok=Eloadok::find($id);
       $eloadok->delete();
        return redirect('/admin/eloadok')->with('status', 'Eloado torolve');
    }
    public function edit($id)
    {
        $eloadok = Eloadok::find($id);
        return view('dashboard.eloadok.edit', compact('eloadok', 'id'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nev' =>'required',
            'fokozat' =>'required',
            'intezmeny' =>'required',
            'eloadascim' =>'required',
            'email' =>'required',
            'kivonat' =>'required',
        ]);
        
        $eloadok = Eloadok::find($id);
        $eloadok->nev = $request->input('nev');
        $eloadok->fokozat = $request->input('fokozat');
        $eloadok->intezmeny = $request->input('intezmeny');
        $eloadok->eloadascim = $request->input('eloadascim');
        $eloadok->email = $request->input('email');
        $eloadok->kivonat = $request->input('kivonat');
        $eloadok->save();
        return redirect('/admin/eloadok')->with('status', 'Eloado frisitve');
    }
}
