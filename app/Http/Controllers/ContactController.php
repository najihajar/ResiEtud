<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Afficher la page contact
    public function index()
    {
        return view('accueil.contact');
    }

    // Gérer l'envoi du message
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Enregistrement en base de données
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // Envoi d'email à l'administration
        Mail::to('admin@example.com')->send(new ContactMail($contact));

        return redirect()->route('app_contact')->with('success', 'Message envoyé avec succès !');
    }
}
