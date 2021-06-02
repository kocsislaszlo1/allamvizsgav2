<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szekciok;
use App\Models\Esemenyek;
use App\Models\Eloadok;
class SzekcioidoController extends Controller
{
 
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
        public  function delete ($eloado_id)
        {
           $szekcio=Szekciok::find($eloado_id);
           $szekcio->eloadok()->detach($szekcio);
           //$szekcio->eloadok()->detach($szekcio);
            return redirect('/admin/szekciok')->with('status', 'idopont torolve');
        }
        public function edit($id)
        {   $szekciok = Szekciok::find($id);
            $eloadok=Eloadok::whereHas('szekciok',function($q) use ($szekciok){
                $q->where('eloadok_szekciok.szekcio_id', '=', $szekciok->id);
            }) ->get();
            return view('dashboard.szekciok.idopont', compact('szekciok', 'id','eloadok'));
        }
        public function update(Request $request, $id)
        {
           
            $eloadok = Eloadok::find($id);
            //$szekciok->szekcionev = $request->input('szekcionev');
            $elid=$request->input('szekcio_id');
            $kezdete=$request->input('kezd');
            $eloadok->szekciok()->updateExistingPivot($elid,['kezdete'=> $kezdete]);

            $eloadok->save();
            return redirect('/admin/szekciok')->with('status', 'ido frisitve');
        }
        public function update2(Request $request, $id)
        {
           
            $eloadok = Eloadok::find($id);
            //$szekciok->szekcionev = $request->input('szekcionev');
            $elid=$request->input('szekcio_id');
            $vege=$request->input('vege');
            $eloadok->szekciok()->updateExistingPivot($elid,['vege'=> $vege]);
            //$eloadok->szekciok()->attach($szekciok);
            $eloadok->save();
            return redirect('/admin/szekciok')->with('status', 'ido frisitve');
        }
    }
    

