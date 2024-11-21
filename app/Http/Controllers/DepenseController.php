<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Depense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Depense::latest()->get();
        $total = $collection->sum('montant');
        return view('pages.depenses.index', compact('collection', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $annees = Annee::where('statut', '=', 'Ouverte')->get();
        return view('pages.depenses.create', compact('annees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Depense::create($request->all());

        emotify('success', 'Dépense effectuée avec success !');
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
        $finds = Depense::find($id);
        $annees = Annee::where('statut', '=', 'Ouverte')->get();
        return view('pages.depenses.edit', compact('finds', 'annees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $depens = Depense::find($id);
        $depens->update($request->all());

        emotify('success', 'Dépense modifiée avec success !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $depens = Depense::find($id);
        $depens->delete();

        emotify('error', ' Dépense supprimée avec success !');
        return redirect()->back();
    }
}
