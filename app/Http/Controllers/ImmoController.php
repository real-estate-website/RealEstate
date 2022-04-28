<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Favorie;
use App\Models\Message;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function createannonce ( Request $request)
    {   
        return view('formulaire');
    }

    public function postannonce(Request $request){
        $annonce = new Annonce();
        $annonce->user_id = Auth::id();

        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'type' => 'required',
            'nbr_piece' => 'required',
            'nbr_chambre' => 'required',
            'surface' => 'required',
            'prix' => 'required',
          ]);  

          if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads', $name, 'public');

                Image::create([
                    'nom' => $name,
                    'url' => '/storage/'.$path
                  ]);
            }
            $annonce->titre = $request->annonce;
            $annonce->description = $request->annonce;
            $annonce->prix = $request->prix;
            $annonce->type = $request->type;
            $annonce->nbr_piece = $request->nbr_piece;
            $annonce->nbr_chambre = $request->nbr_chambre;
            $annonce->surface = $request->surface;
            $annonce->save();

            $images->save();
         }

        return back()->with('success', 'Images uploaded successfully');
    }

}