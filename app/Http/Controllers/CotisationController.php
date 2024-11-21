<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annee;
use App\Models\Cotisation;
use App\Models\User;
use Illuminate\Http\Request;

class CotisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Cotisation::latest()->get();
        $total = $collection->sum('total_cotisation');
        return view('pages.cotisations.liste', compact('collection', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collection = User::latest()->get();
        $annees = Annee::where('statut', '=', 'Ouverte')->get();
        return view('pages.cotisations.create', compact('collection', 'annees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ponctuelle()
    {
        $collection = User::latest()->get();
        $annees = Annee::where('statut', '=', 'Ouverte')->get();
        return view('pages.cotisations.create_poncuelle', compact('collection', 'annees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cotisation::create([
            'annees_id' => $request->annees_id,
            'users_id' => $request->users_id,
            'autres_info' => $request->autres_info,
            'type' => $request->type,
            'motif' => $request->motif,
            'periode' => $request->periode,
            'nbr_mois' => $request->nbr_mois,
            'montant' => $request->montant,
            'total_cotisation' => $request->total_cotisation,
        ]);

        emotify('success', 'Cotisation ajoutée avec success !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $finds = Cotisation::find($id);
        $annees = Annee::where('statut', '=', 'Ouverte')->get();
        return view('pages.cotisations.edit', compact('finds', 'annees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $total = $request->nbr_mois * $request->montant;

        $cotis = Cotisation::find($id);
        $cotis->update([
            'annees_id' => $request->annees_id,
            'autres_info' => $request->autres_info,
            'motif' => $request->motif,
            'periode' => $request->periode,
            'nbr_mois' => $request->nbr_mois,
            'montant' => $request->montant,
            'total_cotisation' => $total,
        ]);

        emotify('success', 'Cotisation modifiée avec success !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cotis = Cotisation::find($id);
        $cotis->delete();

        emotify('error', ' Cotisation supprimée avec success !');
        return redirect()->back();
    }
}
