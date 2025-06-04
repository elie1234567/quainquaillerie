<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\historique;
use App\Models\ProductPiece;
use App\Models\ProductMaison;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Productvoiture;
class ProductController extends Controller
{
    public function index()
    {
        $electrique = Product::all();
        foreach ($electrique as $product) {
            $profit = $product->calculateProfit();
        }
        return view('produit.electriqueMateriel', compact('electrique'));
    }

    public function trano()
    {
        $maison = ProductMaison::all();
        return view('produit.maisonMateriel', compact('maison'));
    }
    

    public function vaika()
    {
        $voiture = Productvoiture::all();
        return view('produit.voitureMateriel', compact('voiture'));
    }
    public function materiel()
    {
        $autres = ProductPiece::all();
        return view('produit.autreMateriel', compact('autres'));
    }
    public function showChart()
    {
        $histo = historique::all();

        // Compter le nombre total de produits
        $totalProducts = product::count();
    
        // Calculer la somme des quantités de tous les produits
        $totalQuantity = product::sum('quantitee');
          // Compter le nombre total de produits
          $totalProductss = ProductPiece::count();
    
          // Calculer la somme des quantités de tous les produits
          $totalQuantityy = ProductPiece::sum('quantitep');
          $totalProductsss = ProductMaison::count();
    
          // Calculer la somme des quantités de tous les produits
          $totalQuantityyy = ProductMaison::sum('quantitem');
          $totalProductssss = Productvoiture::count();
    
          // Calculer la somme des quantités de tous les produits
          $totalQuantityyyy = Productvoiture::sum('quantitev');
    
        // Organiser les données pour le graphique
        $dataByDate = [];
        foreach ($histo as $item) {
            $date = $item->datep;
            $total = $item->totale;
    
            if (!isset($dataByDate[$date])) {
                $dataByDate[$date] = 0;
            }
            $dataByDate[$date] += $total;
        }
    
        // Envoyer les données à la vue
        return view('dashboard', [
            'dataByDate' => $dataByDate,
            'totalProducts' => $totalProducts,
            'totalQuantity' => $totalQuantity,
            'totalProductss' => $totalProductss,
            'totalQuantityy' => $totalQuantityy,
            'totalProductsss' => $totalProductsss,
            'totalQuantityyy' => $totalQuantityyy,
            'totalProductssss' => $totalProductssss,
            'totalQuantityyyy' => $totalQuantityyyy,
        ]);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'quantiteP' => 'required|integer|min:1',
            'prixP' => 'required|numeric',
            'date' => 'required|date',
            'client' => 'required|integer',
        ]);

        DB::transaction(function () use ($validated) {
            $electrique = Product::findOrFail($validated['id']);
            if ($electrique->quantitee < $validated['quantiteP']) {
                return redirect()->back()->withErrors(['quantiteP' => 'La quantité est dépassée']);
            }
            $electrique->quantitee -= $validated['quantiteP'];
            $electrique->save();

            Commande::create([
                'idproduit' => $validated['id'],
                'email' => $validated['name'],
                'quantiter' => $validated['quantiteP'],
                'prix' => $validated['prixP'],
                'date_comm' => $validated['date'],
                'idclit' => $validated['client']
            ]);
        });

        return redirect()->route('electrique')->with('success', 'Commande ajoutée et quantité mise à jour');
    }





    public function storeMaison(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'quantiteP' => 'required|integer|min:1',
            'prixP' => 'required|numeric',
            'date' => 'required|date',
            'client' => 'required|integer',
        ]);

        DB::transaction(function () use ($validated) {
            $electrique = ProductMaison::findOrFail($validated['id']);
            if ($electrique->quantitem < $validated['quantiteP']) {
                return redirect()->back()->withErrors(['quantiteP' => 'La quantité est dépassée']);
            }
            $electrique->quantitem -= $validated['quantiteP'];
            $electrique->save();

            Commande::create([
                'idproduit' => $validated['id'],
                'email' => $validated['name'],
                'quantiter' => $validated['quantiteP'],
                'prix' => $validated['prixP'],
                'date_comm' => $validated['date'],
                'idclit' => $validated['client']
            ]);
        });

        return redirect()->route('maison')->with('success', 'Commande ajoutée et quantité mise à jour');
    }


    


    public function store_voiture(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'quantiteP' => 'required|integer|min:1',
            'prixP' => 'required|numeric',
            'date' => 'required|date',
            'client' => 'required|integer',
        ]);
    
        $electrique = Productvoiture::findOrFail($validated['id']);
    
        if ($electrique->quantitev < $validated['quantiteP']) {
            return redirect()->back()->withErrors(['quantiteP' => 'La quantité est dépassée']);
        }
    
        DB::transaction(function () use ($validated, $electrique) {
            $electrique->quantitev -= $validated['quantiteP'];
            $electrique->save();
    
            Commande::create([
                'idproduit' => $validated['id'],
                'email' => $validated['name'],
                'quantiter' => $validated['quantiteP'],
                'prix' => $validated['prixP'],
                'date_comm' => $validated['date'],
                'idclit' => $validated['client']
            ]);
        });
    
        return redirect()->route('storevoiture')->with('success', 'Commande ajoutée et quantité mise à jour');
    }





    public function store_autres(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'quantiteP' => 'required|integer|min:1',
            'prixP' => 'required|numeric',
            'date' => 'required|date',
            'client' => 'required|integer',
        ]);
    
        $electrique = ProductPiece::findOrFail($validated['id']);
    
        if ($electrique->quantitep < $validated['quantiteP']) {
            return redirect()->back()->withErrors(['quantiteP' => 'La quantité est dépassée']);
        }
    
        DB::transaction(function () use ($validated, $electrique) {
            $electrique->quantitep -= $validated['quantiteP'];
            $electrique->save();
    
            Commande::create([
                'idproduit' => $validated['id'],
                'email' => $validated['name'],
                'quantiter' => $validated['quantiteP'],
                'prix' => $validated['prixP'],
                'date_comm' => $validated['date'],
                'idclit' => $validated['client']
            ]);
        });
    
        return redirect()->route('storeautres')->with('success', 'Commande ajoutée et quantité mise à jour');
    }
    
    
}
