<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// controller per pagine statiche, no logica solo cambio views
class PageController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function contacts(){
        return view('contacts');
    }
}
