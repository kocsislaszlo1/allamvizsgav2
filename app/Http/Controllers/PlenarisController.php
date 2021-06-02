<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Esemenyek;
use App\Models\Plenaris;
class PlenarisController extends Controller
{
    public function index(){
        $esemenyek=Esemenyek::all();
        $plenarisok=Plenaris::all();
        return view('dashboard.plenaris.index', compact('esemenyek','plenarisok'));
    }
    public function create(){
        $esemenyek=Esemenyek::all();     
        return view('dashboard.plenaris.create',compact('esemenyek'));
    }
    public function store(Request $request){
        $request->validate([
        'nev' =>'required',
        'fokozat' =>'required',
        'intezmeny' =>'required',
        'eloadascim' =>'required',
        'email' =>'required',
        'kivonat' =>'required',
        'kezdete' =>'required',
        'vege' =>'required',
        'esemenyek_id'=>'required'
        ]);
        $plenarisok=new Plenaris([
        'nev' =>$request->input('nev'),
        'fokozat' =>$request->input('fokozat'),
        'intezmeny' =>$request->input('intezmeny'),
        'eloadascim' =>$request->input('eloadascim'),
        'email' =>$request->input('email'),
        'kivonat' =>$request->input('kivonat'),
        'kezdete' =>$request->input('kezdete'),
        'vege' =>$request->input('vege'),
        'esemenyek_id' =>$request->input('esemenyek_id'),
        ]);    
        $plenarisok->save();
    
        return redirect('/admin/plenaris')->with('status', 'Plenaris hozzadva');
    }
    public  function delete ($id)
    {
       $plenarisok=Plenaris::find($id);
       $plenarisok->delete();
        return redirect('/admin/plenaris')->with('status', 'Plenaris torolve');
    }
    public function edit($id)
    {   $esemenyek=Esemenyek::all();
        $plenarisok = Plenaris::find($id);
        return view('dashboard.plenaris.edit', compact('plenarisok', 'id','esemenyek'));
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
            'kezdete' =>'required',
            'vege' =>'required',
            'esemenyek_id' =>'required',
        ]);      
        $plenarisok = Plenaris::find($id);
        $esemenyek=$request->input('szekcio_id');
        $plenarisok->nev = $request->input('nev');
        $plenarisok->fokozat = $request->input('fokozat');
        $plenarisok->intezmeny = $request->input('intezmeny');
        $plenarisok->eloadascim = $request->input('eloadascim');
        $plenarisok->email = $request->input('email');
        $plenarisok->kivonat = $request->input('kivonat');
        $plenarisok->kezdete = $request->input('kezdete');
        $plenarisok->vege = $request->input('vege');
        $plenarisok->esemenyek_id = $request->input('esemenyek_id');
        $plenarisok->save();
        
        return redirect('/admin/plenaris')->with('status', 'Plenaris frisitve');
    }
}
