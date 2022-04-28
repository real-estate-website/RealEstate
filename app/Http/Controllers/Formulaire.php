<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Formulaire extends Controller
{
    public function insert(Request $request)
    {
        $annonce = new Annonce();

        $annonce->type = $request->input('type');
        $annonce->titre = $request->input('titre');
        $annonce->description = $request->input('description');
        $annonce->surface = $request->input('surface');
        $annonce->prix = $request->input('price');
        $annonce->nbr_piece = $request->input('nbr_piece');
        $annonce->nbr_chambre = $request->input('nbr_chambre');
        $annonce->user_id = Auth::user()->id;

        $annonce->save();

        if($annonce->save())
        {      
            $image = $request->file('file');
            //     dd($images);
         
                   //  $image = Storage::putFileAs('file', $image , $image->getClientOriginalName());
                     $path = $request->file('file')->store('files');    
                     $media = new Image();
                     $media -> url = $path;
                     $media -> nom = $image->getClientOriginalName();
                     $media->save();
         
                 
        }
        $annonces = Annonce::all();
        return view('annonces', ['annonces' => $annonces]);
    }

}