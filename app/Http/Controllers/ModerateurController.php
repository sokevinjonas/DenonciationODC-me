<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class ModerateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', 'moderateur')->get();
        return view('admin.moderateur.index', compact('users'));
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
    public function store(StoreUserRequest $request)
    {
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'pseudo' => $request->pseudo,
            'telephone' => $request->telephone,
            'ref_cnib' => $request->ref_cnib,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin_id' => auth()->user()->id,
            'role' =>   'moderateur'
        ]);

        return redirect()->route('users.index')->with('success', 'utilisateur creer');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.moderateur.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.moderateur.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'pseudo' => $request->pseudo,
            'telephone' => $request->telephone,
            'ref_cnib' => $request->ref_cnib,
            'email' => $request->email,
        ]);

        return redirect()->route('users.index')->with('success', 'utilisateur modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        $user->update(['supprimer_par_id' => auth()->user()->id]);

        return redirect()->route('users.index')->with('success', 'utilisateur suppimer');
    }
}
