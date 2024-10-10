<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Création d'une nouvelle instance de Contact et enregistrement en base de données
        $contact = new Contact();
        $contact->fullname = $validatedData['fullname'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];
        $contact->save();

        // Envoi d'un e-mail de notification
        Mail::to('medmouha93@gmail.com')->send(new ContactFormSubmitted($contact));

        // Redirection après la soumission du formulaire avec un message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
