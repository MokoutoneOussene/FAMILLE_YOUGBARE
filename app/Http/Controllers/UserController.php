<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cotisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = User::latest()->get();
        return view('pages.users.index', compact('collection'));
    }

    /**
     * Display the specified resource.
     */
    public function my_find()
    {
        $collection = Cotisation::where('users_id', '=', Auth::user()->id)->latest()->get();
        $total = $collection->sum('total_cotisation');
        return view('pages.cotisations.mes_cotisations', compact('collection', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());

        emotify('success', 'Membre ajouté avec success !');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function change_role(Request $request, string $id)
    {
        $finds = User::find($id);
        $finds->update([
            'role' => $request->role,
        ]);

        emotify('success', 'Role changé avec success !');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function profil_image(Request $request, string $id)
    {
        $finds = User::find($id);
        $finds->update([
            'photo' => $request->photo->store('user_profil', 'public'),
        ]);

        emotify('success', 'Photo du profile ajoutée avec success !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $finds = User::find($id);
        return view('pages.users.profile', compact('finds'));
    }

    /**
     * Display the specified resource.
     */
    public function profile(string $id)
    {
        $finds = User::find($id);
        return view('pages.users.show', compact('finds'));
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
        $users = User::find($id);
        $users->update($request->all());

        emotify('success', 'Profil modifié avec success !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();

        emotify('error', ' Membre supprimé avec success !');
        return redirect()->route('dashboard');
    }
}
