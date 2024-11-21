<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Maison;
use App\Models\Location;
use App\Models\Locataire;
use App\Models\Cotisation;
use App\Models\Encaissement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Depense;
use App\Models\User;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.acceuil');
    }

    /**
     * Display a listing of the resource.
     */
    public function authentification()
    {
        return view('pages.auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('pages.register');
    }

    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $cotisations = Cotisation::latest()->get();
        $depenses = Depense::latest()->get();

        $total_cotisation = $cotisations->sum('total_cotisation');
        $total_depense = $depenses->sum('montant');
        $caisses = $total_cotisation - $total_depense;

        return view('pages.dashboard', compact('total_depense', 'total_cotisation', 'caisses'));
    }

    /**
     * Display a listing of the resource.
     */
    public function galerie()
    {
        $collection = User::latest()->get();
        return view('pages.galerie', compact('collection'));
    }
}