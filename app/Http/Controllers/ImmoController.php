<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Favorie;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ImmoController extends Controller
{
    //
    public function annonces ( Request $request)
    {   
        $annonces = Annonce::all();
        return view('annonces',['annonces' => $annonces]);
    }

    public function Messages ( Request $request)
    {
        $annonces = Message::all();
        return view('messages',['messages' => $annonces]);
    }

    public function favories ( Request $request)
    {   
        $favories = Favorie::all();
        return view('favories',['favories' => $favories]);
    }
}