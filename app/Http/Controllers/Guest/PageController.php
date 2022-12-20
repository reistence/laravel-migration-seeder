<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains= Train::all();
         return view('home', compact('trains'));
    }

    public function showNext(){
        $next_trains = Train::where('departures_schedule', '>=',now())->oldest('departures_schedule')->get();
        return view('nextTrains', compact('next_trains'));
    }
}
