<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactMessage;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
class AccueilController extends Controller
{
    // Page d'accueil
    public function accueil()
    {
        
        return view('accueil.accueil'); 
    }

    // Page de présentation
    public function presentation()
    {
        return view('accueil.presentation');
    }

    // Page des résidentes
    public function residente()
    {
        return view('accueil.residente');
    }

    // Page des clubs
    public function club()
    {
        return view('accueil.club');
    }

    // Page de contact
    public function contact()
    {
        return view('accueil.contact');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Sauvegarder le message dans la base de données
        $contactMessage = new ContactMessage();
        $contactMessage->name = $request->name;
        $contactMessage->email = $request->email;
        $contactMessage->subject = $request->subject;
        $contactMessage->message = $request->message;
        $contactMessage->save();

        // Envoyer un email à l'administration
        Mail::to('admin@example.com')->send(new ContactFormMail($contactMessage));

        return redirect()->route('app_contact')->with('success', 'Your message has been sent successfully!');
    }

    
}