<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szekciok;
use App\Models\Esemenyek;
use App\Models\Eloadok;
class SzekcioidoController extends Controller
{
    
   
        // public function index(){
    
        //     $szekciok=Szekciok::all();
        //     return view('dashboard.szekciok.index', compact('szekciok'));
        // }
        // public function create(){
        //     $esemenyek=Esemenyek::all();
        //     return view('dashboard.szekciok.create',compact('esemenyek'));
        // }
        public function store(Request $request){
           
            $request->validate([
            'szekcionev' =>'required',
            'idopont' =>'required',
            'link' =>'required',
            'online' =>'required',
            'esemenyek_id' =>'required',
            ]);
            $szekcio=new Szekciok([
            'szekcionev' =>$request->input('szekcionev'),
            'idopont' =>$request->input('idopont'),
            'link' =>$request->input('link'),
            'online' =>$request->input('online'),
            'esemenyek_id' =>$request->input('esemenyek_id'),
            ]);
            $szekcio->save();
            
            return redirect('/admin/szekciok')->with('status', 'Szekcio hozzadva');
        }
        public  function delete ($id)
        {
           $szekcio=Szekciok::find($id);
           $szekcio->eloadok()->where('szekcio_id', $szekcio)->wherePivot('kezdete')->detach(1);
           //$szekcio->eloadok()->detach($szekcio);
            return redirect('/admin/szekciok')->with('status', 'idopont torolve');
        }
        public function edit($id)
        {   $szekciok = Szekciok::find($id);
            $eloadok=Eloadok::whereHas('szekciok',function($q) use ($szekciok){
                $q->where('eloadok_szekciok.szekcio_id', '=', $szekciok->id);
            }) ->get();
          
            $eloadok2 = Eloadok::with('szekciok')->get();
            return view('dashboard.szekciok.idopont', compact('szekciok', 'id','eloadok','eloadok2'));
        }
        public function update(Request $request, $id)
        {
            $request->validate([
            'kezdete' =>'required',
            'vege' =>'required',
            ]);
            $szekciok = Szekciok::find($id);
            //$szekciok->szekcionev = $request->input('szekcionev');
            $kezdete=$request->input('kezdete');
            $vege=$request->input('vege');
           //
            $szekciok->eloadok()->updateExistingPivot($szekciok,['kezdete'=> $kezdete,'vege'=> $vege,]);
            //$eloadok->szekciok()->attach($szekciok);
            return redirect('/admin/szekciok')->with('status', 'ido frisitve');
        }
    
    }
    

