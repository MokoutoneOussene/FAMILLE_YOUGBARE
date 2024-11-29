<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annee;
use Illuminate\Http\Request;

class AnneeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Annee::latest()->get();
        return view('pages.annees.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ouverte(Request $request, string $id)
    {
        $finds = Annee::find($id);
        $finds->update([
            'statut' => 'Ouverte',
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function fermee(Request $request, string $id)
    {
        $finds = Annee::find($id);
        $finds->update([
            'statut' => 'Fermée',
        ]);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
