<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (Request $request) {
        if (Auth::attempt(['telephone' => $request->login, 'password' => $request->password, 'active' => 1])) {
            if (Auth::user()){
                emotify('success', 'BIENVENUE ! Vous etes bien connecté !');
                return redirect()->route('dashboard');
            }
             else {
                // notify()->error('Login ou mot de passe incorrect !');
                emotify('error', 'Login ou mot de passe incorrect, ou compte inactive !');
                return redirect()->route('authentification')->with('status', 'Login ou mot de passe incorrect, ou compte inactive !');
            }
        }

        emotify('error', 'Login ou mot de passe incorrect, ou compte inactive !');
        // notify()->error('Login ou mot de passe incorrect ! , ou verifier si vous avez bien selectionner votre role');
        return redirect()->route('authentification')->with('status', 'Login ou mot de passe incorrect, ou compte inactive !');
    }

    public function logout () {
        Auth::logout();
        return redirect()->route('authentification');
    }
}
