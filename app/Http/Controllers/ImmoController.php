<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImmoController extends Controller
{
    //
    public function annonces ( Request $request)
    {
        return view('annonces');
    }

    public function contacts ( Request $request)
    {
        return view('contacts');
    }

    public function favories ( Request $request)
    {
        return view('favories');
    }
}