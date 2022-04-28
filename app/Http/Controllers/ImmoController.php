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

    /* Annonce */

    public function createannonce ( Request $request)
    {   
        return view('formulaire');
    }

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

    public function annoncemodifyform ( Request $request)
    {  
        $annonce = Annonce::findOrFail($request->id);
        /* if($annonce->user_id != Auth::id())
            abort(404); */
        return view('annoncemodifyform', ['annonce' => $annonce]);
    }

    public function annoncedelete ( Request $request)
    {  
        $annonces = Annonce::findOrFail($request->id);
        #dd($annonces);
        $annonces->delete();
        $annonces = Annonce::all();
        return view('annonces',['annonces' => $annonces]);
    }

    public function annoncemodify ( Request $request)
    {  
        $annonce = Annonce::find($request->id);

        $annonce->titre = $request->titre;
        $annonce->description = $request->description;
        $annonce->type = $request->type;
        $annonce->prix = $request->prix;
        $annonce->save();    
        $annoncesdetails = Annonce::findOrFail($request->id);
        return view('annoncesdetails',['details' => $annoncesdetails]);

    }

    /* Annonce */
    
    /* Message */
    public function Messages ( Request $request)
    {
        $annonces = Message::all();
        return view('messages',['messages' => $annonces]);
    }

    public function messagemodifyform ( Request $request)
    {
        $message = Message::findOrFail($request->id);
        return view('messagemodifyform',['message' => $message]);
    }

    public function messagemodify ( Request $request)
    {
        $message = Message::find($request->id);
        #dd($request);
        $message->objet = $request->objet;
        $message->contenu = $request->contenu;
        $message->expediteur_id = $request->expediteur_id;
        $message->destinataire_id = $request->destinataire_id;
        $message->save();    
        $message = Message::all();
        return view('messages',['messages' => $message]);
    }

    public function messagedelete ( Request $request)
    {  
        $message = Message::findOrFail($request->id);
        #dd($annonces);
        $message->delete();
        $message = Message::all();
        return view('messages',['messages' => $message]);
    }

    /* Message */

    /* favorie */

    public function favories ( Request $request)
    {
        $favories = Favorie::all();
        return view('favories',['favories' => $favories]);
    }



    public function favoriedetails ( Request $request)
    {
        $favoriesdetails = Favorie::findOrFail($request->id);
        return view('favoriedetails',['favorie' => $favoriesdetails]);
    }

    public function favoriemodifyform ( Request $request)
    {
        $favorie = Favorie::findOrFail($request->id);
        return view('favoriemodifyform', ['favorie'  => $favorie]);
    }

    public function favoriemodify ( Request $request)
    {
        $favorie = Favorie::find($request->id);
        #dd($request);
        $favorie->url = $request->url;
        $favorie->save();    
        $favorie = Favorie::all();
        return view('favories',['favories' => $favorie]);
    }

    public function favoriedelete ( Request $request)
    {
        $favorie = Favorie::findOrFail($request->id);
        $favorie->delete();

        $favories = Favorie::all();
        return view('favories',['favories' => $favories]);
    }
    /* favorie */

}