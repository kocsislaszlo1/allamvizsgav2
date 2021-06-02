<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eloadok;
use App\Models\Esemenyek;
use App\Models\Moderatorok;
use App\Models\Szekciok;
use App\Models\Plenaris;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('home',compact('eloadok','szekciok','esemenyek','plenarisok'));
    }
    public function index2()
    {
        return view('dashboard.dashboard');
    }
   
}
