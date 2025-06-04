<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('laravel-examples.users-management', compact('users'));
    }
    public function rechercher_etudiant(Request $request)
    {
        $textRecherche = $request->input('textRecherche');
    
        // Vérifier si le champ de recherche est vide
        if (empty($textRecherche)) {
            return back()->with('error', 'Veuillez remplir le champ de recherche.');
        }
    
        // Logique de recherche
        $users = User::where('id', 'like', '%' . $textRecherche . '%')
            ->orWhere('name', 'like', '%' . $textRecherche . '%')
            ->get();
    
        return view('laravel-examples.users-management', compact('users'));
    }
    
    public function deleteU($id)
    {
        $user = User::find($id);
        
        if ($user) {
            $user->delete();
            return redirect('/laravel-examples/users-management')->with('status', 'Suppression réussie 😎');
            
           
            if (Auth::check()) {
                return redirect('/laravel-examples/users-management')->with('status', 'Suppression réussie 😎');
            } else {
                return redirect('/sign-in')->with('status', 'Session expirée, veuillez vous reconnecter.');
            }
        } else {
            return redirect('/laravel-examples/users-management')->with('status', 'Utilisateur non trouvé 😢');
        }
    }
    
    
}
