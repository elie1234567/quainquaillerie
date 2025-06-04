<?php

namespace App\Http\Controllers;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FournisseurController extends Controller
{
    public function affichage()
    {
        $fournisseurs = Fournisseur::all();
        return view('account-pages.profile', compact('fournisseurs'));
    }
}
