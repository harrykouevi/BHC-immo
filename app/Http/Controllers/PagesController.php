<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PagesController extends Controller
{
    public function sendMessage(Request $request){
        $message = new Contact();
        $message->nom = $request->nom;
        $message->email = $request->email;
        $message->tel = $request->tel;
        $message->message = $request->message;
        $message->save();

        return redirect('/contacts')->with('status','Votre méssage à été bien envoyé');
    }
}
