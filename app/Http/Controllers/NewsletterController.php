<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function signup(Request $request)
    {
        // Validation de l'email
        $request->validate([
            'email' => 'required|email|unique:subscribers,email', // Assurez-vous que vous avez une table subscribers
        ]);

        // Ajouter l'email à la liste des abonnés (exemple)
        Subscriber::create(['email' => $request->email]);

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Merci pour votre inscription !');
    }
}
