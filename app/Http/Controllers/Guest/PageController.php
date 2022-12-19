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

    public function showToday(){
        $today_trains = Train::where([['departures_schedule', '>=','2022-12-19 00:00:00'],
                                ['departures_schedule', '<=','2022-12-19 23:59:59'],
                                ])->get();
        return view('todaysTrains', compact('today_trains'));
    }
}
