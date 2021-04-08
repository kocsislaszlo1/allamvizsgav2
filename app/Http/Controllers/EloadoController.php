<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eloadok;
class EloadoController extends Controller
{
     public function index(){

        $eloadok=Eloadok::all();
        return view('dashboard.eloadok.index', compact('eloadok'));
    }
    public function create(){
        return view('dashboard.eloadok.create');
    }
    public function store(Request $request){
        
        $request->validate([
        'nev' =>'required',
        'fokozat' =>'required',
        'intezmeny' =>'required',
        'eloadascim' =>'required',
        'email' =>'required',
        ]);
        $eloadok=new Eloadok([
        'nev' =>$request->input('nev'),
        'fokozat' =>$request->input('fokozat'),
        'intezmeny' =>$request->input('intezmeny'),
        'eloadascim' =>$request->input('eloadascim'),
        'email' =>$request->input('email'),
        ]);
        $eloadok->save();
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
        ]);
        
        $eloadok = Eloadok::find($id);
        $eloadok->nev = $request->input('nev');
        $eloadok->fokozat = $request->input('fokozat');
        $eloadok->intezmeny = $request->input('intezmeny');
        $eloadok->eloadascim = $request->input('eloadascim');
        $eloadok->email = $request->input('email');
        $eloadok->save();
        return redirect('/admin/eloadok')->with('status', 'Eloado frisitve');
    }
}
