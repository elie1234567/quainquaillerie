<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function loginAdmin()
    {
        return view('admin');
    }
    public function registreA()
    {
        return view('adminV');
    }
    public function logAd(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        $admin = admin::where('email', $request->email)->first();
    
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('tab');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);                    
        }
    }
    
    public function adminRegister(Request $request)
    {
        $request->validate([
            'nomA' => 'required|string|max:255|unique:admins',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $admin = admin::create([
            'nomA' => $request->nomA,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('admin')->login($admin);

        return redirect()->route('registreA');
    }

    public function admina(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        $admin = admin::where('email', $request->email)->first();
    
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('tab');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
}
}