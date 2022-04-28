<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Favorie;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ImmoController extends Controller
{
    //
    public function annonces ( Request $request)
    {   
        $annonces = Annonce::all();
        return view('annonces',['annonces' => $annonces]);
    }
    public function annoncesdetails ( Request $request)
    {   
        $annoncesdetails = Annonce::findOrFail($request->id);
        return view('annoncesdetails',['details' => $annoncesdetails]);
    }

    public function annoncemodify ( Request $request)
    {  
        $annonce = Annonce::findOrFail($request->id);
        if($annonce->user_id != Auth::id())
            abort(404);
    
        return view('annoncemodify', ['annonce' => $annonce]);
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

    public function createannonce ( Request $request)
    {   
        return view('formulaire');
    }
}