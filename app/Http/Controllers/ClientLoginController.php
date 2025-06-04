<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class ClientLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('produit.loginclient');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('loginclient');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

   

    // public function registreA()
    // {
    //     return view('adminV');
    // }


}
