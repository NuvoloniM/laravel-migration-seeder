<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// implemento il database creato in model
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        // $trains = Train::all();
        // da tutto il database seleziono solo i record che mi interessano, e non tutti 
        // voglio solo treni che partono oggi 
        $today = date("Y.m.d");
        $trains = Train::where('departures_date', '>=', $today)->get();

        return view('trains.index', compact('trains'));
    }
}
