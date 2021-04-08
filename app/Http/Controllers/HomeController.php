<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Eloadok;
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
        // //$settings = Setting::pluck('value', 'key');
        // $speakers = Speaker::all();
        // $schedules = Schedule::with('speaker')
        //     ->orderBy('start_time', 'asc')
        //     ->get()
        //     ->groupBy('day_number');
        // $venues = Venue::all();
        // $hotels = Hotel::all();
        // $galleries = Gallery::all();
        // $sponsors = Sponsor::all();
        // $faqs = Faq::all();
        // $prices = Price::with('amenities')->get();
        // $amenities = Amenity::with('prices')->get();

        return view('home');
    }
    public function index2()
    {
        // //$settings = Setting::pluck('value', 'key');
        // $speakers = Speaker::all();
        // $schedules = Schedule::with('speaker')
        //     ->orderBy('start_time', 'asc')
        //     ->get()
        //     ->groupBy('day_number');
        // $venues = Venue::all();
        // $hotels = Hotel::all();
        // $galleries = Gallery::all();
        // $sponsors = Sponsor::all();
        // $faqs = Faq::all();
        // $prices = Price::with('amenities')->get();
        // $amenities = Amenity::with('prices')->get();

        return view('dashboard.dashboard');
    }
   
}
