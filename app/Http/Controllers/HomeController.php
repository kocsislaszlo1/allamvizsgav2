<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eloadok;
use App\Models\Esemenyek;
use App\Models\Moderatorok;
use App\Models\Szekciok;
use App\Models\Plenaris;
use App\Models\User;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   

        $eloadok = Eloadok::all();
        $szekciok=Szekciok::all();
        $esemenyek=Esemenyek::first();
        $plenarisok=Plenaris::all();
        $moderatorok=DB::table('users')
        ->join('moderatorok','users.id','=','moderatorok.users_id')
        ->join('szekciok','szekciok.id','=','moderatorok.szekciok_id')
        ->select('users.name','users.id','moderatorok.szekciok_id')->get();   
        $users=Moderatorok::with('users');
        
        return view('home',compact('eloadok','szekciok','esemenyek','plenarisok','moderatorok','users'));
    }
    public function index2()
    {
        return view('dashboard.dashboard');
    }
   
}
