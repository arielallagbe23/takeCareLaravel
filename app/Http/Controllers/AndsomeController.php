<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AndsomeController extends Controller
{
    public function welcomeView () 
    {
        return view ('welcome-view');
    }
    
    public function getPaiementone()
    {
        return view('paiementone');
    }

    public function getaddPaiement()
    {
        return view('add-paiement');
    }
}
