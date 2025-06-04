<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductPiece;
use App\Models\ProductMaison;
use Illuminate\Support\Facades\Auth;
use App\Models\Productvoiture;

class marketing extends Controller
{
    public function marketing()
    {
        $piece = ProductPiece::all();
        return view('layouts.index', compact('piece'));
    }
    public function tsena()
    {
        $marketing = Product::all();
        return view('layouts.produit', compact('marketing'));
    }
    public function voiture()
    {
        $voiture = Productvoiture::all();
        return view('layouts.voiture', compact('voiture'));
    }
    public function maison()
    {
        $maison = ProductMaison::all();
        return view('layouts.maison', compact('maison'));
    }
    
}
