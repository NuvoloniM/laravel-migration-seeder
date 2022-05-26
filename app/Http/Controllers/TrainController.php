<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// implemento il database creato in model
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();

        return view('trains.index', compact('trains'));
    }
}
