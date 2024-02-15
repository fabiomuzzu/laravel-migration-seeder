<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $today_trains = Train::where('departure_date', '=', today())->get();

        return view('home', compact('trains', 'today_trains'));
    }
}
